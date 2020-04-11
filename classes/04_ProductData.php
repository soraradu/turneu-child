<?

    class ProductData extends UserObject {
        
        private 
            $post_id ,
            $field,
            $currency ,
            $cost ,
            $stock ,
            $availible ;

        function __construct($user_id, $post_id) {
            parent::__construct($user_id , $post_id);
            $this->field     = get_field('shop',$this->GetPostId()) ;
            $this->currency   = $this->field['currency'] ;
            $this->cost       = $this->field['cost'] ;
            $this->stock      = $this->field['stock'] ;
            $this->availible  = $this->field['availible'] ;
        }

        function test() {
            return  $this->cost ;
        }


        public function UserBuyProduct() {
            
            $currency    = $this->currency ;
            $user_id     = "user_ " . $this->GetUserId() ;
            $user_budget = $this->{'GetUser' . $this->currency }() ;
            $rest        = $user_budget - $this->cost ;
            
            if (  $user_budget >= $this->cost && $this->stock > 0) {
                $this->stock = $this->stock - 1 ;
                $updated_field = $this->field;
                $updated_field['stock'] = $this->stock ;
                update_field( $currency , $rest , $user_id);
                update_field( 'shop', $updated_field, $this->GetPostId() );
                return  'updated' ;
            }else {
                return 'don`t have budget or out of stock' ;
            }


        }

    }

?>