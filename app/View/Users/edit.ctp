
<div class="panel-heading">Usuários</div>
<div class="panel-body">

    <div class="users form">


        <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo __('Editar'); ?></legend>
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

                        <?php echo $this->Form->input('password', array('label' => false, 'placeholder' => 'informe', 'class' => 'form-control', 'required')); ?>


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
        <?php echo $this->Form->button('<i class="fa fa-save"></i> Salvar', array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>

    </div>

</div>
