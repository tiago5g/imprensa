<?php
/*
	Plugin Name: New Contents
	Version: 0.0.1
	Plugin URI: http://localhost
	Description: Make any content types.
	Author: Tiago Rafael
	Author URI: http://tiago.rmsti.com
*/

	/**
	Copyright (c) 2012, Tiago Rafael

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
	*/

        class NewContents {
                public function initialize(){
                            add_action('admin_enqueue_scripts', array('NewContents','add_exclusive_category'), 99);
                }

                public function add_exclusive_category(){
                            wp_enqueue_script('exclusive-category', plugins_url('static/js/exclusive-category.js', __FILE__)) ;
                }
        }

        require_once 'Models/Artigo.php' ;                      NC\Artigo::build() ;
        require_once 'Models/Nota.php';                         NC\Nota::build();
        require_once 'Presenters/NotasPresenter.php';           NC\NotasPresenter::build();
        require_once 'Models/Pauta.php';                        NC\Pauta::build();
        require_once 'Presenters/PagesPresenter.php';           NC\PagesPresenter::build();
        require_once 'Models/Colaborador.php';                  NC\Colaborador::build();
        require_once 'Presenters/ColaboradoresPresenter.php';   NC\ColaboradoresPresenter::build();
        require_once 'Models/Mailing.php' ;                     NC\Mailing::build() ;
        require_once 'Presenters/MailingPresenter.php';         NC\MailingPresenter::build();
        require_once 'Models/Acampamento.php' ;                 NC\Acampamento::build() ;
        require_once 'Models/Credenciamento.php' ;              NC\Credenciamento::build() ;
        require_once 'Presenters/CredenciamentosPresenter.php'; NC\CredenciamentosPresenter::build();

        function backend_styles(){
		global $plugin_url ; $screen = get_current_screen() ;
                if($screen->post_type == 'mailing' || $screen->post_type == 'credenciamento'){
                    wp_enqueue_style('hide', plugins_url('static/css/admin_hide.css', __FILE__)) ;
                }
		if($screen->post_type == 'mailing'){
			wp_enqueue_style('mailing', plugins_url('static/css/mailing.css', __FILE__)) ;                        
		}
	}

        add_filter('init', array('NewContents','initialize'),0);
?>
