<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header text-center">
                <?php echo $this->Html->image('df5_70.png'); ?>
            </div>

            <div class="modal-body">
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $this->Form->create('User'); ?>


                <div class="form-group input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <?php echo $this->Form->input('username', array("label" => false, 'class' => 'form-control', 'required', "placeholder" => "Login")); ?>
                </div>

                <div class="form-group input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                    <?php echo $this->Form->input('password', array("label" => false, 'class' => 'form-control', 'required', "placeholder" => "Senha")); ?>
                </div>

                <div class="form-group">
                    <?php echo $this->Form->button('logar   <i class="fa fa-sign-in"></i>', array('class' => 'btn btn-success  form-control ')); ?>
                    <?php echo $this->Form->end(); ?>
                    <h6 class="text-center" data-dismiss="modal" aria-hidden="true"><?php echo $this->Html->image('logo_fa730.png'); ?>Sistema de informação - Estagio supervisionado 2</h6>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
echo $this->Html->css('login/bootstrap.css');
echo $this->Html->css('plugins/font-awesome/css/font-awesome.min.css');
?>