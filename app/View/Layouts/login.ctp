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

        echo $this->Html->css('login/bootstrap.css');
        echo $this->Html->css('plugins/font-awesome/css/font-awesome.min.css');

        echo $this->Html->script('jquery-1.11.0');
        echo $this->Html->script('bootstrap.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div class="col-occurrence">

            </div>

            <div id="content">
                <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header text-center">
                                <?php echo $this->Html->image('df5_70.png'); ?>
                            </div>

                            <div class="modal-body">
                                <?php echo $this->Session->flash(); ?>

                                <?php echo $this->fetch('content'); ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

                <div id="footer">

                </div>
            </div>

    </body>
</html>
