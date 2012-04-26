<?php
        namespace NC ;

        class Mailing {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Mailing',
                                            'singular_name' => 'Mailing',
                                            'edit_item' => 'Editar Cadastros',
                                            'all_items' => 'Todos os Cadastros',
                                            'view_item' =>'Ver Cadastro',
                                            'search_items' => 'Procurar Cadastros',
                                            'not_found' =>  'Nenhum cadastro encontrado',
                                            'not_found_in_trash' => 'Sem cadastros na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Mailing'
                                        ),
                                    'public' => true,
                                    'menu_position' => 5,
                                    'supports' => array('title','custom-fields')
                                );

                static function register_mailing(){
                            register_post_type('mailing',self::$options);
                }

                function getFields($post_id){
			global $wpdb ;
			$sql = $wpdb->prepare("SELECT meta_key, meta_value from $wpdb->postmeta where post_id = %d",
				$post_id) ;
			return $wpdb->get_results($sql) ;
		}

                static function build(){
                            add_action('init', 'NC\Mailing::register_mailing') ;
                }

        }

?>