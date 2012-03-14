<?php
        namespace NC ;

        class NotaPresenter{

            static function add_show_index_box() {
                            add_meta_box(
                                'nota_index_id',
                                'Exibir na Index',
                                'NC\NotaPresenter::view_show_index_box',
                                'nota'
                            );
           }

           function view_show_index_box($nota){
               require_once (dirname(__FILE__) . '/../Views/show_index_box.php');
           }

           static function save_show_index_box($nota_id){
               if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
                return;

               if ( ! $_POST['show_index'] ) return;

               update_post_meta($nota_id, 'show_index', $_POST['show_index']);

           }

            static function build(){
                            add_action('add_meta_boxes', 'NC\NotaPresenter::add_show_index_box');
                            add_action( 'save_post', 'NC\NotaPresenter::save_show_index_box' );
            }
        }

?>
