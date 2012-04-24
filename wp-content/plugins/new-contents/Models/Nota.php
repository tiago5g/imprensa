<?php
        namespace NC ;

        class Nota {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Notas',
                                            'singular_name' => 'Nota',
                                            'add_new' => 'Criar nova nota', 'nota',
                                            'add_new_item' => 'Criar Nova Nota Oficial',
                                            'edit_item' => 'Editar Nota Oficial',
                                            'new_item' => 'Nova Nota Oficial',
                                            'all_items' => 'Todas as Notas',
                                            'view_item' =>'Ler Nota Oficial',
                                            'search_items' => 'Procurar Notas',
                                            'not_found' =>  'Nenhuma nota encontrada',
                                            'not_found_in_trash' => 'Sem notas na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Notas Oficiais'
                                        ),
                                    'public' => true,
                                    'menu_position' => 5,
                                    'has_archive' => true,
                                    'rewrite' => array( 'slug' => 'notas' )
                                );

                static function add_notas(){
                            register_post_type('nota',self::$options);
                }

                static function build(){
                            add_action('init', 'NC\Nota::add_notas') ;
                }

        }

?>