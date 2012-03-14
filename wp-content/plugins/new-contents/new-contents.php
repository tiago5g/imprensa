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

        require_once 'Models/Artigo.php' ;              NC\Artigo::build() ;
        require_once 'Models/Nota.php';                 NC\Nota::build();
        require_once 'Presenters/NotaPresenter.php';    NC\NotaPresenter::build();
        require_once 'Models/Pauta.php';                NC\Pauta::build();

        add_filter('init', array('NewContents','initialize'),0);
?>
