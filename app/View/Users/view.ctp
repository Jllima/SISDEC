<div class="panel-heading">Descrição</div>
<div class="panel-body">
    <div class="users view">
         <?php echo $this->Session->flash(); ?>
        <fieldset>
            <legend><?php echo __('Perfil do usuario'); ?></legend>
            <dl class="dl-horizontal">
                <dt><?php echo __('Nome'); ?></dt>
                <dd>
                    <?php echo h($user['User']['name']); ?>
                </dd> 
                
                <dt><?php echo __('Email'); ?></dt>
                <dd>
                    <?php echo h($user['User']['email']); ?>
                </dd> 
                
                <dt><?php echo __('Tipo de usuario'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($user['Role']['role'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>

                </dd>
                <dt><?php echo __('Nome de usuario'); ?></dt>
                <dd>
                    <?php echo h($user['User']['username']); ?>
                </dd>
                <dt><?php echo __('Status'); ?></dt>
                <dd>
                    <?php echo h($user['User']['status']); ?>
                </dd>
            </dl>
        </fieldset>
    </div>
    <div>
        <?php echo $this->Html->link('Editar perfil', array('action' => 'edit', $user['User']['id'])) ?>
    </div>
</div>



