<?

class UserEnrlollment extends UserObject {

    public 
        $status, 
        $tornament_to_check, 
        $tournament_cost,
        $tournament_currency,
        $button_text ;
    

    function __construct($user_id , $post_id , $tornament_to_check) {

        parent::__construct($user_id , $post_id);

        $this->tornament_to_check  = $tornament_to_check ;
        $this->tournament_cost     = get_field('cost', $this->GetPostId()) ;
        $this->tournament_currency = get_field('currency', $this->GetPostId()) ;
        
        /* Daca setez paramentrii in constructor sa fie default null, obiectul va considera ca userl nu este inscris.*/
        if ($this->status == null) {
            $this->status = 'not_enrolled' ;
        }

        setup_postdata($this->tornament_to_check);
        if ( have_rows( 'tournament_tabel', $this->GetPostId() ) ) {
            while ( have_rows( 'tournament_tabel',$this->GetPostId() ) ){
                the_row();  
                if (get_sub_field('user') == $this->GetUserId()) {
                    if ( get_sub_field( 'leave' ) == 1 ) {
                        $this->status = 'leave' ;
                    }else{
                        $this->status = 'join' ;
                    }
                }
            } 
        }
        wp_reset_postdata();

        if ($this->status == 'join') 
            return $this->button_text = 'Leave' ;
        elseif ($this->status == 'leave') 
            return $this->button_text = 'Rejoin' ;
        else
            return $this->button_text = 'Join' ;

    }

    public function GetStatus() {
        return $this->status ;
    }

    public function GetTournamentCost() {
        return $this->tournament_cost ;
    }

    public function GetTournamentCurrency() {
        return $this->tournament_currency ;
    }

    public function GetButtonText(){
        return $this->button_text ;
    }
    
    public function RenderButton() {

        if (is_user_logged_in()) {

            if (strtotime(get_field('start_date')) < strtotime(current_time('mysql')) )
                return  '<a class="waves-effect waves-light btn disabled " id="" >Enrollment date is over</a>';

            else
                return '<a class="modal-close waves-effect waves-green btn-flat" id="action_in_tournament">' . $this->button_text . '</a> ' ;

        }else {
            return '<p>Please <a href="register">Register</a> or <a href="login">Login</a> to join a tournament </p>' ;
        }
        // unset(create_html()) ;

    }

    public function FindUserRow($execute_for_user_row) {
        setup_postdata($this->tornament_to_check);
        if ( have_rows( 'tournament_tabel', $this->GetPostId() ) ) {
            while ( have_rows( 'tournament_tabel',$this->GetPostId() ) ){
                the_row();  
                if (get_sub_field('user') == $this->GetUserId()) {
                    if ($this->{'GetUser' . $this->tournament_currency}() >=  $this->tournament_cost || $this->status === 'join')  {
                        $execute_for_user_row() ;
                    }
                }
            } 
        }
        wp_reset_postdata();
    }

    public function UserEnrollInTournament(){

        if ($this->{'GetUser' . $this->tournament_currency}() >= $this->tournament_cost && $this->status == 'not_enrolled') {
            update_field($this->tournament_currency, $this->{'GetUser' . $this->tournament_currency}() - $this->tournament_cost, "user_ " . $this->GetUserId());
            add_row('tournament_tabel', ['user' => $this->GetUserId() ,'date_time' => current_time( 'mysql' )] , $this->GetPostId()) ;
        }else{
            return 'Cannt join' ;
        }

    }

    public function UserLeaveTournament() {
        $this->FindUserRow(
            function () {
                update_field($this->tournament_currency, $this->{'GetUser' . $this->tournament_currency}() + $this->tournament_cost / 2, "user_ " . $this->GetUserId());
                update_sub_field('leave', true ,$this->GetPostId()) ; 
            }
        );
    }

    public function UserRejoinTournament() {
        $this->FindUserRow(
            function () {
                update_field($this->tournament_currency, $this->{'GetUser' . $this->tournament_currency}() - $this->tournament_cost, "user_ " . $this->GetUserId());
                update_sub_field('leave', false ,$this->GetPostId()) ; 
                update_sub_field('date_time' , current_time( 'mysql' )) ; 
            }
        );
    }

}

function UserEnrlollment($user_id, $post_id, $tornament_to_check) {
    return new UserEnrlollment($user_id, $post_id, $tornament_to_check) ;
}


?>