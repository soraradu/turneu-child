<?

    class TournamentModal extends UserEnrlollment {

        private 
            $header_text , 
            $body_text;
            
        function __construct($user_id=null , $post_id=null , $tornament_to_check=null) {

            parent::__construct($user_id , $post_id, $tornament_to_check);
            
            $join_payment = $this->GetTournamentCost() . " " .$this->GetTournamentCurrency() ;
            $leave_refound = $this->GetTournamentCost() / 2 . " " .$this->GetTournamentCurrency() ;
            
            switch ($this->GetStatus()) {
                case 'leave':
                    $this->header_text = "Re-Enroll" ;
                    $this->body_text   = "Are you sure you wanna re-enroll in this tournament ? You will have to pay the normal tax : <b>" . $join_payment . "</b> .";
                    break;

                case 'join':
                    $this->header_text = "Leave Tournament ? " ;
                    $this->body_text   = "Are you sure you wanna re-enroll in this tournament ? You will have to pay the normal tax : <b>" . $leave_refound . "</b> .";
                    break;

                case 'not_enrolled':
                    $this->header_text = "Enroll in this Tournament ? " ;
                    $this->body_text   = "Are you sure you wanna enroll in this tournament ? You will have to pay the normal tax : <b>" . $join_payment . "</b> .";
                    break;
                
            }

        }

        public function RenderModal(){
            return (
                '
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">'. $this->header_text .'</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            '. $this->body_text .'
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                '.$this->RenderButton().'
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4> ' . $this->header_text . '</h4>
                        <p> ' . $this->body_text . '</p>
                    </div>
                    <div class="modal-footer">
                        '.$this->RenderButton().'
                    </div>
                </div>'
            ) ;
        }



    }
    


?>