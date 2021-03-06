<?

    class ProductData extends UserObject {
        
        private 
            $id ,
            $field,
            $title,
            $currency ,
            $cost ,
            $stock ,
            $availible ,
            $image ;

        function __construct($user_id, $post_id) {
            parent::__construct($user_id , $post_id);
            $this->id         = $post_id ;
            $this->field      = get_field('shop',$this->GetPostId()) ;
            $this->title      = get_the_title($post_id) ;
            $this->currency   = $this->field['currency'] ;
            $this->cost       = $this->field['cost'] ;
            $this->stock      = $this->field['stock'] ;
            $this->availible  = $this->field['availible'] ;
            $this->image  = get_post_thumbnail_id($this->GetPostId()) ;
        }

        public function UserBuyProduct() {

            $currency    = $this->currency ;
            $user_id     = "user_ " . $this->GetUserId() ;
            $user_budget = $this->{'GetUser' . $this->currency }() ;
            $rest        = $user_budget - $this->cost ;
            
            if (  $user_budget >= $this->cost && $this->stock > 0) {

                global $wpdb ;
                $table_name = $wpdb->prefix . 'users_products' ;

                $insert_data = [
                    'product_id'     => $this->id ,
                    'product_name'   => $this->title ,
                    'image_id'       => $this->image ,
                    'user_id'        => $this->GetUserId(),
                    'date'           => current_time( 'mysql' )
                ] ;

                $wpdb->insert($table_name , $insert_data);

                // To do ...
        
                    // Update
                        // $wpdb->update(
                        //     $table_name, 
                        //     array(
                        //         'id'=>'8', 
                        //         'product_id'=> 50, 
                        //         'product_name' => 'updated',
                        //         'image_id' =>100,
                        //         'user_id' => 100,
                        //         'date' => current_time( 'mysql' ),
                        //     ),
                        //     array('id' => 8)
                        // );
                   
                    // delete
                        // $wpdb->delete( $table_name, array( 'id' => 8 ) );

                $this->stock = $this->stock - 1 ;
                $updated_stock = $this->field;
                $updated_stock['stock'] = $this->stock ;
                update_field( $currency , $rest , $user_id);
                update_field( 'shop', $updated_stock, $this->GetPostId() );

                return  'updated' ;
            }else {
                return 'don`t have budget or out of stock' ;
            }


        }

    }

?>