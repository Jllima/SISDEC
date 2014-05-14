
<div class="panel-heading">Adicionar usuários</div>
<div class="panel-body">


    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Adicionar Usuário'); ?></legend>

        <div class='row'>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Nome</label>
                    <?php echo $this->Form->input('name', array('label' => false, 'placeholder' => 'Informe', 'class' => 'form-control', 'required')); ?>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Função</label>
                    <?php echo $this->Form->input('role_id', array('label' => false, 'empty' => 'Informe', 'class' => 'form-control', 'required')); ?>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Usuário</label>

                    <?php echo $this->Form->input('username', array('label' => false, 'placeholder' => 'informe', 'class' => 'form-control', 'required')); ?>        


                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Senha</label>
                    <?php echo $this->Form->input('password', array('value' => '', 'label' => false, 'placeholder' => 'informe', 'class' => 'form-control', 'required')); ?>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Confirma senha</label>
                    <?php echo $this->Form->input('password_confirm', array('value' => '', 'label' => false, 'placeholder' => 'informe', 'type' => 'password', 'class' => 'form-control', 'required')); ?>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Email</label>

                    <?php echo $this->Form->input('email', array('label' => false, 'placeholder' => 'informe', 'class' => 'form-control', 'required')); ?>


                </div>
            </div>
        </div>
        <?php
        echo $this->Form->input('status');
        ?>
    </fieldset>
    <?php echo $this->Form->button('<i class="fa fa-save"></i> Cadastrar', array('class' => 'btn btn-success')); ?>
    <?php echo $this->Form->end(); ?>
</div>


<!--<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Html->link(__('Verificar usuario'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
        </ul>
</div>//-->
