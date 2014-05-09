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
        <?php echo $this->Html->charset(); ?>
        <title> sisdec </title>
        <?php
        echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap.css');
        echo $this->Html->css('dt/DT_bootstrap.css');

        echo $this->Html->css('plugins/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('bootstrap.css.map');
        echo $this->Html->css('jquery.ui.theme');
        echo $this->Html->css('jquery.ui.tooltip');
        //echo $this -> Html -> css('demo_table.css');

        echo $this->Html->script('jquery-1.11.0');
        echo $this->Html->script('jquery-ui-1.10.4.custom.min');
        echo $this->Html->script('jquery.maskedinput-1.3');
        echo $this->Html->script('jquery.ui.tooltip');
        echo $this->Html->script('jquery.ui.position');
        echo $this->Html->script('jquery.ui.widget');
        echo $this->Html->script('jquery.validate');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('jquery.dataTables.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div class="col-occurrence">
                <h1><?php echo $this->Html->image('df5_70.png'); ?></h1>
            </div>
            <?php
            if ($this->Session->read('Auth.User.id') == 17) {
                echo $this->element('nav/nav_admin');
            } else {
                echo $this->element('nav/nav_user');
            }
            ?>

            <div class="col-occurrence">
                <div class="panel panel-default ">				
                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>

                </div>
            </div>

            <div id="footer">

            </div>
        </div>
        <?php /* echo $this -> element('sql_dump'); */ ?>
    </body>
</html>
