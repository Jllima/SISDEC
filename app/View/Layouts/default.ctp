<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title> sisdec </title>
		<?php
		echo $this -> Html -> meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this -> Html -> css('bootstrap.css');
		echo $this -> Html -> css('dt/DT_bootstrap.css');
		
                echo $this -> Html -> css('plugins/font-awesome/css/font-awesome.min.css');
		echo $this -> Html -> css('bootstrap.css.map');
		echo $this -> Html -> css('jquery.ui.theme');
		echo $this -> Html -> css('jquery.ui.tooltip');
		//echo $this -> Html -> css('demo_table.css');

		echo $this -> Html -> script('jquery-1.11.0');
		echo $this -> Html -> script('jquery-ui-1.10.4.custom.min');
		echo $this -> Html -> script('jquery.maskedinput-1.3');
		echo $this -> Html -> script('jquery.ui.tooltip');
		echo $this -> Html -> script('jquery.ui.position');
		echo $this -> Html -> script('jquery.ui.widget');
		echo $this -> Html -> script('jquery.validate');
		echo $this -> Html -> script('bootstrap.min');
		echo $this -> Html -> script('jquery.dataTables.min');

		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
		?>
	</head>
	<body>
		<div id="container">
			<div class="col-occurrence">
                            <h1><?php echo $this->Html->image('df70.png');?> SISDEC</h1>
			</div>
            <nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/estagio/start/"><i class="fa fa-home"></i> Home</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							    <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder-open"></i> Ocorrência<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<?php echo $this -> Html -> link(__('<i class="fa fa-pencil"></i> Cadastrar'), array('controller'=>'sisdec_occurrences','action' => 'add'),array('escape' => false)); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('<i class="fa fa-search"></i> Pesquisar'), array('controller'=>'sisdec_occurrences','action' => 'index'),array('escape' => false)); ?>
										</li>
								    </ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<?php echo $this -> Html -> link(__('Listar tipologias'), array('controller' => 'sisdec_tipologies', 'action' => 'index')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Nova tipologia'), array('controller' => 'sisdec_tipologies', 'action' => 'add')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Listar regionais'), array('controller' => 'sisdec_places', 'action' => 'index')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Adicionar regional'), array('controller' => 'sisdec_places', 'action' => 'add')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Listar situações'), array('controller' => 'sisdec_situations', 'action' => 'index')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Nova situação'), array('controller' => 'sisdec_situations', 'action' => 'add')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Listar fontes'), array('controller' => 'sisdec_sources', 'action' => 'index')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Nova fonte'), array('controller' => 'sisdec_sources', 'action' => 'add')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Listar bairros'), array('controller' => 'sisdec_neighborhoods', 'action' => 'index')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Novo bairro'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Listar solicitante'), array('controller' => 'sisdec_requesters', 'action' => 'index')); ?>
										</li>
										<li>
											<?php echo $this -> Html -> link(__('Novo solicitante'), array('controller' => 'sisdec_requesters', 'action' => 'add')); ?>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuario <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

			<div id="content">				
				<?php echo $this -> Session -> flash(); ?>

				<?php echo $this -> fetch('content'); ?>
			</div>

			<div id="footer">

			</div>
		</div>
		<?php echo $this -> element('sql_dump'); ?>
	</body>
</html>
