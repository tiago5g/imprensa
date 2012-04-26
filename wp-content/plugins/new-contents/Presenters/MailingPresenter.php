<?php
        namespace NC ;

        class MailingPresenter{

            static function metabox_Mailing(){
                    add_meta_box(
                                'Mailings',
                                'Informações de Cadastro',
                                'NC\MailingPresenter::view',
                                'mailing',
                                'normal',
                                'core'
                    );
            }

            static function view($Mailing){
                require_once (dirname(__FILE__) . '/../Views/Mailing/view.php');
                $screen = get_current_screen() ;
            }

            static function collumn_headers($collumns){
			//var_dump($collumns);
                        $collumns['title'] = 'Nome';
                        if(! isset($collumns['email'])) $collumns['email'] = 'Email' ;
			return $collumns ;
            }
            static function collumn_info($collumn_name, $post_id){
                $Mailing = new Mailing();
                $Mailing = $Mailing->getFields($post_id);
                $email;
                foreach($Mailing as $d){
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
                add_filter( 'manage_edit-mailing_columns', 'NC\MailingPresenter::collumn_headers', 10, 1);
		add_action( 'manage_posts_custom_column', 'NC\MailingPresenter::collumn_info', 10, 2);
                add_action('add_meta_boxes', 'NC\MailingPresenter::metabox_Mailing');
                add_action('admin_print_styles', 'backend_styles') ;
            }
        }

?>
