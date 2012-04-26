<?php
        namespace NC ;

        class Credenciamento {

                static $options = array(
                                    'labels' => array(
                                            'name' => 'Credenciamentos',
                                            'singular_name' => 'Credenciamento',
                                            'edit_item' => 'Editar Cadastros',
                                            'all_items' => 'Todos os Cadastros',
                                            'view_item' =>'Ver Cadastro',
                                            'search_items' => 'Procurar Cadastros',
                                            'not_found' =>  'Nenhum cadastro encontrado',
                                            'not_found_in_trash' => 'Sem cadastros na lixeira',
                                            'parent_item_colon' => '',
                                            'menu_name' => 'Credenciamento'
                                        ),
                                    'public' => true,
                                    'menu_position' => 5,
                                    'supports' => array('title','custom-fields')
                                );

                static function register_credenciamento(){
                            register_post_type('credenciamento',self::$options);
                }

                static function add_termos_credenciamento() {
                        $labels = array(
                            'search_items' =>  __( 'Procurar Funções' ),
                            'all_items' => __( 'Todas as Funções' ),
                            'edit_item' => __( 'Editar Função' ),
                            'update_item' => __( 'Atualizar Função' ),
                            'add_new_item' => __( 'Nova Função' ),
                            'new_item_name' => __( 'Nova Função' ),
                          );
                        $capabilities = array (
                                            'manage_terms'=>true,
                                            'edit_terms'=>true,
                                            'delete_terms'=>true,
                                            'assign_terms'=>true
                                        );

                        register_taxonomy( 'funcao-credenciamento', array( 'credenciamento' ), array(
                            'hierarchical' => true,
                            'label' => __( 'Função' ),
                            'labels'=>$labels,
                            'show_in_nav_menus'=>true,
                            'show_ui' => true,
                            'show_in_tag_cloud' => false,
                            'query_var' => true,
                            'rewrite' => true,
                            'capabilities'=> $capabilities
                            )
                        );
                }

                function getFields($post_id){
			global $wpdb ;
			$sql = $wpdb->prepare("SELECT meta_key, meta_value from $wpdb->postmeta where post_id = %d",
				$post_id) ;
			return $wpdb->get_results($sql) ;
		}

                static function build(){
                            add_action('init', 'NC\Credenciamento::register_credenciamento') ;
                            add_action('init', 'NC\Credenciamento::add_termos_credenciamento',99);
                }

        }

?>