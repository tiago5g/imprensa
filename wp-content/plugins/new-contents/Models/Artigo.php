<?php
        namespace NC ;

        class Artigo {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Artigos',
                                            'singular_name' => 'Artigo',
                                            'add_new' => 'Criar novo artigo', 'artigo',
                                            'add_new_item' => 'Criar Novo Artigo',
                                            'edit_item' => 'Editar Artigo',
                                            'new_item' => 'Novo Artigo',
                                            'all_items' => 'Todos os Artigos',
                                            'view_item' =>'Ler Artigo',
                                            'search_items' => 'Procurar Artigos',
                                            'not_found' =>  'Nenhum artigo encontrado',
                                            'not_found_in_trash' => 'Sem artigos na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Artigos',
                                        ),
                                    'public' => true,
                                    'menu_position' => 5,
                                    'has_archive' => true,
                                    'rewrite' => array( 'slug' => 'artigos' )
                                );

                static function add_artigos(){
                            register_post_type('artigo',self::$options);
                }

                static function add_termos_artigo() {
                        $capabilities = array (
                                            'manage_terms'=>false,
                                            'edit_terms'=>true,
                                            'delete_terms'=>false,
                                            'assign_terms'=>true
                                        );

                        register_taxonomy( 'tipos-artigos', array( 'artigo' ), array(
                            'hierarchical' => true,
                            'label' => __( 'Tipos de Artigos' ),
                            'show_in_nav_menus'=>true,
                            'show_ui' => true,
                            'show_in_tag_cloud' => true,
                            'query_var' => true,
                            'rewrite' => true,
                            'capabilities'=> $capabilities
                            )
                        );
                        wp_insert_term('Cantinho da Criança','tipos-artigos');
                        wp_insert_term('Cantinho da Reflexão','tipos-artigos');
                        wp_insert_term('Factuais','tipos-artigos');
                }

                static function build(){
                            add_action('init', 'NC\Artigo::add_artigos') ;
                            add_action('init', 'NC\Artigo::add_termos_artigo',99);
                }
                
        }

?>