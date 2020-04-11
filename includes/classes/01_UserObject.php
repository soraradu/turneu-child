<?
    class UserObject {

        private 
            $user_id,
            $post_id, 
            $user_points, 
            $user_tickets, 
            $user_nickname ;

        function __construct($user_id, $post_id) {
            $this->user_id             = $user_id;
            $this->post_id             = $post_id; 
            $this->user_points         = get_field( 'points' , "user_$this->user_id");
            $this->user_tickets        = get_field( 'tickets' , "user_$this->user_id");
            $this->user_id             = $user_id;
            $this->user_nickname       = get_user_meta($this->user_id, 'game_name', true) ;
            $this->enrolled            = null ;

            if ($this->user_points == null) $this->user_points = 50;
            if ($this->user_tickets == null) $this->user_tickets = 0;

        }

        // Getters and Setters
            public function GetUserId() {
                return $this->user_id ;
            }

            public function GetPostId() {
                return $this->post_id ;
            }

            public function GetUserPoints() {
                return $this->user_points ;
            }

            public function GetUserTickets() {
                return $this->user_tickets ;
            }

            public function GetUserFullName() {
                
                $first_name = get_userdata($this->user_id)->first_name ;
                $last_name = get_userdata($this->user_id)->last_name ;
                
                return "$first_name $last_name" ;
            }

            public function GetUserNickName() {
                return $this->user_nickname ;
            }
            
        // end


    }
    

    function UserObject($user_id,$post_id) {
        return new UserObject($user_id, $post_id) ;
    }




?>




