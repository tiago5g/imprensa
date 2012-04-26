<?php
        namespace NC ;

        class Acampamento {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Acampamentos',
                                            'singular_name' => 'Acampamento',
                                            'edit_item' => 'Editar Acampamentos',
                                            'all_items' => 'Todos os Acampamentos',
                                            'view_item' =>'Ver Cadastro',
                                            'search_items' => 'Procurar Cadastros',
                                            'not_found' =>  'Nenhum cadastro encontrado',
                                            'not_found_in_trash' => 'Sem cadastros na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Acampamento'
                                        ),
                                    'public' => true,
                                    'menu_position' => 5,
                                    'supports' => array('title')
                                );

                static function register_acampamento(){
                            register_post_type('acampamento',self::$options);
                }

                static function build(){
                            add_action('init', 'NC\Acampamento::register_acampamento') ;
                }

        }

?>