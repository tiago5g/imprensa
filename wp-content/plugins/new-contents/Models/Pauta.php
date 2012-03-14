<?php
        namespace NC ;

        class Pauta {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Pautas',
                                            'singular_name' => 'Pauta',
                                            'add_new' => 'Criar nova pauta', 'pauta',
                                            'add_new_item' => 'Criar Nova Pauta',
                                            'edit_item' => 'Editar Pauta',
                                            'new_item' => 'Nova Pauta',
                                            'all_items' => 'Todas as Pautas',
                                            'view_item' =>'Ler Pauta',
                                            'search_items' => 'Procurar Pautas',
                                            'not_found' =>  'Nenhuma pauta encontrada',
                                            'not_found_in_trash' => 'Sem pautas na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Pautas'
                                        ),
                                    'public' => true,
                                    'menu_position' => 5
                                );

                static function add_pautas(){
                            register_post_type('pauta',self::$options);
                }

                static function build(){
                            add_action('init', 'NC\Pauta::add_pautas') ;
                }

        }

?>