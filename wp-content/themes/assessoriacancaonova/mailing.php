<?php
/*
Template Name: Mailing */
// css
wp_enqueue_style( 'jscrollbar', get_stylesheet_directory_uri() . '/library/styles/jScrollbar.jquery.css');
//Javascript de apoio
//wp_enqueue_script( 'validate', get_stylesheet_directory_uri() . '/library/js/jquery.validate.min.js', array( 'jquery' ));
wp_enqueue_script( 'class_registration', get_stylesheet_directory_uri() . '/library/js/class_registration.js', array( 'jquery' ));
wp_enqueue_script( 'jqueryui', get_stylesheet_directory_uri() . '/library/js/jquery-ui-1.8.19.min.js', array( 'jquery' ));
wp_enqueue_script( 'jquery-mousewheel', get_stylesheet_directory_uri() . '/library/js/jquery-mousewheel.js', array( 'jquery' ));
wp_enqueue_script( 'jScrollbar', get_stylesheet_directory_uri() . '/library/js/jScrollbar.jquery.js', array( 'jquery' ));
get_header(); ?>


	<div id="container-content" role="main">
		<div id="mailing">
			<h1>Credenciamento para Mailing</h1>
			<div id="form">
				<form action="" method="post">
					<div class="nome">
						<h2>Nome</h2>
						<input type="text" name="nome">
					</div>
					<div class="email">
						<h2>e-mail</h2>
						<input type="text" name="email">
					</div>
					<div class="midia">
						<h2>Midia de Comunica&ccedil;&atilde;o</h2>
						<input type="text" name="midia">
					</div>
					<div class="telefone1">
						<h2>Telefone 1</h2>
						<input type="text" name="midia">
					</div>
					<div class="telefone2">
						<h2>Telefone 2</h2>
						<input type="text" name="midia">
					</div>
					<div class="estado">
						<h2>Estado</h2>
						<select name="estado">
							<option value='AC'>Acre</option>
                                                        <option value='AL'>Alagoas</option>
                                                        <option value='AM'>Amazonas</option>
                                                        <option value='AP'>Amap&aacute;</option>
                                                        <option value='BH'>Bahia</option>
                                                        <option value='CE'>Cear&aacute;</option>
                                                        <option value='DF'>Distrito Federal</option>
                                                        <option value='ES'>Esp&iacute;rito Santo</option>
                                                        <option value='GO'>Goi&aacute;s</option>
                                                        <option value='MA'>Maranh&atilde;o</option>
                                                        <option value='MG'>Minas Gerais</option>
                                                        <option value='MS'>Mato Grosso do Sul</option>
                                                        <option value='MT'>Mato Grosso</option>
                                                        <option value='PA'>Par&aacute;</option>
                                                        <option value='PB'>Para&iacute;ba</option>
                                                        <option value='PE'>Pernambuco</option>
                                                        <option value='PI'>Piau&iacute;</option>
                                                        <option value='PR'>Paran&aacute;</option>
                                                        <option value='RJ'>Rio de Janeiro</option>
                                                        <option value='RN'>Rio Grande do Norte</option>
                                                        <option value='RO'>Rond&ocirc;nia</option>
                                                        <option value='RR'>Roraima</option>
                                                        <option value='RS'>Rio Grande do Sul</option>
                                                        <option value='SC'>Santa Catarina</option>
                                                        <option value='SE'>Sergipe</option>
                                                        <option value='SP'>S&atilde;o Paulo</option>
                                                        <option value='TO'>Tocantins</option>
						</select>
					</div>
					<div class="cidade">
						<h2>Cidade</h2>
						<input type="text" name="cidade">
					</div>
					<div class="validacao">
						<input type="checkbox" name="validacao">
						<span>Li e aceito os termos de cadastro</span>
					</div>
					<button type="button">Enviar</button> 
				</form>
			</div>

			<div id="termos">
				<h2>Termos de cadastro</h2>
                                <div class="jScrollbar1">
                                    <div class="jScrollbar_mask">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nunc lacus, ultrices non bibendum et, rutrum ac justo. Sed vitae turpis mauris, adipiscing lobortis lectus. Ut nec auctor turpis. Donec eleifend viverra massa sed pretium. Proin elit sem, gravida eu lacinia eu, semper non mauris. Proin id diam tellus, in venenatis est. Morbi iaculis tellus id velit iaculis pulvinar. Suspendisse egestas mollis sapien, ut eleifend nisi hendrerit non. Curabitur pharetra luctus augue quis elementum. Fusce dui nisi, hendrerit eu dictum ut, tempus ac enim. Donec nec turpis in quam aliquam convallis. Sed a auctor nunc. Etiam eget dignissim mauris. Nunc justo lectus, commodo quis vehicula eget, posuere et turpis.</p>

                                            <p>Maecenas adipiscing interdum ullamcorper. Fusce imperdiet orci eget eros volutpat faucibus. Nullam est risus, tristique vel dictum non, dapibus at nibh. Proin sit amet ultricies nibh. Duis in augue nisi. Sed dictum risus non est blandit lacinia. Nunc sit amet tempus nisl. Mauris vitae lacus odio, sit amet molestie erat. Mauris bibendum egestas faucibus. Pellentesque rutrum commodo posuere. Curabitur vel nisi ante, in malesuada felis. Pellentesque nulla justo, fermentum id vestibulum et, aliquet quis eros. Donec feugiat magna vitae purus pulvinar semper. Curabitur mi mauris, ultrices at sollicitudin quis, laoreet eu elit.<p>

                                            <p>Sed hendrerit volutpat quam, semper faucibus turpis scelerisque quis. Sed blandit, arcu eu molestie commodo, erat massa convallis purus, in tristique odio arcu nec leo. Duis commodo urna sit amet purus scelerisque ut elementum metus sodales. Nulla iaculis ligula sit amet diam tincidunt sed vestibulum velit placerat. Etiam gravida posuere mauris sed luctus. Aenean pretium enim vitae ipsum ullamcorper id tincidunt mauris vestibulum. Nulla facilisi. In tristique, libero ut laoreet scelerisque, justo libero vulputate odio, in iaculis turpis purus sit amet augue. Nam mi mi, bibendum ut posuere ac, rutrum interdum tellus. Integer et mi nec purus egestas consectetur at non risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>

                                            <p>Donec tempus feugiat dapibus. Nullam consectetur purus a metus dignissim sit amet ornare tortor mollis. Nunc fringilla consectetur nulla, id pharetra lacus elementum non. Sed hendrerit lacinia felis, ut sodales arcu iaculis nec. Donec aliquam eros eget orci tristique gravida. Sed suscipit pharetra convallis. Proin sodales bibendum molestie. Quisque vehicula leo condimentum risus dignissim nec suscipit nibh adipiscing. Ut pretium dictum risus, ac adipiscing arcu placerat id. Nunc at erat arcu, in mattis velit. Ut non nisi eu arcu commodo rhoncus non vitae tellus. Pellentesque fermentum suscipit eros aliquet pulvinar. Quisque non ipsum augue, mollis laoreet justo.</p>

                                            <p>Morbi rutrum imperdiet metus vitae dignissim. Aliquam aliquam sodales ante sed venenatis. Etiam tortor arcu, consectetur a lacinia malesuada, facilisis at nunc. Fusce accumsan tempor mauris convallis venenatis. Curabitur at nunc dolor. Mauris mollis erat quis purus malesuada quis vulputate ipsum hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                                    </div>
                                    <div class="jScrollbar_draggable"><a href="#" class="draggable"></a></div>
                                    <div class="clr"></div>
                                </div>
                                
			</div>
		</div>

	</div><!-- #main -->
	
<?php get_footer(); ?>