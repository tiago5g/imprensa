<?php
        namespace NC ;

        class CredenciamentosPresenter{

            static function metabox_Mailing(){
                    add_meta_box(
                                'Credenciamentos',
                                'Informações de Cadastro',
                                'NC\CredenciamentosPresenter::view',
                                'credenciamento',
                                'normal',
                                'core'
                    );
            }

            static function view($Credenciamento){
                require_once (dirname(__FILE__) . '/../Views/Credenciamentos/view.php');
                $screen = get_current_screen() ;
            }

            static function collumn_headers($collumns){
                        $collumns['title'] = 'Nome';
                        if(! isset($collumns['email'])) $collumns['email'] = 'Email' ;
			return $collumns ;
            }
            static function collumn_info($collumn_name, $post_id){
                $Credenciamentos = new Credenciamento();
                $Credenciamentos = $Credenciamentos->getFields($post_id);
                $email;
                foreach($Credenciamentos as $d){
                    if($d->meta_key=='email'){
                        $email = $d->meta_value;
                    }
                }
                switch ($collumn_name) {
                    case 'email':
                        echo $email;
                        break;
                }
            }

            static function build(){
                add_filter( 'manage_edit-mailing_columns', 'NC\CredenciamentosPresenter::collumn_headers', 10, 1);
		add_action( 'manage_posts_custom_column', 'NC\CredenciamentosPresenter::collumn_info', 10, 2);
                add_action('add_meta_boxes', 'NC\CredenciamentosPresenter::metabox_Mailing');
                add_action('admin_print_styles', 'backend_styles') ;
            }
        }

?>
