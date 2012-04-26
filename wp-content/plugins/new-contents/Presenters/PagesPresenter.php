<?php
        namespace NC ;

        class PagesPresenter{

            static function add_numbers() {
                            add_meta_box(
                                'page_number_id',
                                'Números',
                                'NC\PagesPresenter::view_add_numbers',
                                'page'
                            );
           }

           function view_add_numbers($page){
               require_once (dirname(__FILE__) . '/../Views/Pages/add_numbers.php');
           }

           static function save_numbers($page_id){
               if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
                return;
                $show_index;
               if ( ! $_POST['numeros'] )
               return;

               update_post_meta($page_id, 'numeros', $_POST['numeros']);

           }

            static function build(){
                            //add_action('add_meta_boxes', 'NC\PagesPresenter::add_numbers');
                            //add_action( 'save_post', 'NC\PagesPresenter::save_numbers' );
            }
        }

?>
