<?php
        namespace NC ;

        class Colaborador {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Colaboradores',
                                            'singular_name' => 'Colaborador',
                                            'add_new' => 'Criar novo Colaborador', 'colaborador',
                                            'add_new_item' => 'Criar Novo Colaborador',
                                            'edit_item' => 'Editar Colaborador',
                                            'new_item' => 'Novo Colaborador',
                                            'all_items' => 'Todos os Colaboradores',
                                            'view_item' =>'Ver dados do Colaborador',
                                            'search_items' => 'Procurar Colaboradores',
                                            'not_found' =>  'Nenhum colaborador encontrado',
                                            'not_found_in_trash' => 'Sem cadastros na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Colaboradores'
                                        ),
                                    'public' => true,
                                    'menu_position' => 20,
                                    'supports' => array('title')
                                );

                static function add_colaboradores(){
                            register_post_type('colaborador',self::$options);
                }

                static function build(){
                            add_action('init', 'NC\Colaborador::add_colaboradores') ;
                }

        }

?>