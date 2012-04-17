<?php
        namespace NC ;

        class ColaboradoresPresenter{

            static function add_boxes() {
                            add_meta_box(
                                'upload',
                                'Dados do Colaborador',
                                'NC\ColaboradoresPresenter::view_dados',
                                'colaborador'
                            );
           }

           function view_dados($colaborador){
               require_once (dirname(__FILE__) . '/../Views/Colaboradores/add.php');
           }

           static function save_boxes($colaborador_id){
               if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
                return;
               $foto    =   $_FILES["foto"];
               $funcao  =   $_POST["funcao"];
               if(!is_null($foto)){
                    $upload = wp_upload_bits($foto['name'], null, file_get_contents($foto["tmp_name"]));
                    if($upload['error']){
                        echo "<script>alert(<h1>Erro ao fazer upload da imagem.</h1>);</script>";
                    }else{
                        update_post_meta($colaborador_id, 'foto', $upload['url']);
                    }
                }
                if(!is_null($funcao)){
                    update_post_meta($colaborador_id, 'funcao', $funcao);
                }
               

           }

            static function build(){
                            add_action('add_meta_boxes', 'NC\ColaboradoresPresenter::add_boxes');
                            add_action('save_post', 'NC\ColaboradoresPresenter::save_boxes');
                            
            }
        }

?>
