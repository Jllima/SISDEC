<?php echo $this->Session->flash('logout'); ?>


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
    <h6 class="text-center" data-dismiss="modal" aria-hidden="true"><?php echo $this->Html->image('logo_fa730.png'); ?>Sistemas de Informação  -  Estágio Supervisionado II</h6>
</div>


