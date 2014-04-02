<div class="sisdecRequesters view">
<h2><?php echo __('Sisdec Requester'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sisdecRequester['SisdecRequester']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Requester'); ?></dt>
		<dd>
			<?php echo h($sisdecRequester['SisdecRequester']['nome_requester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($sisdecRequester['SisdecRequester']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco Requester'); ?></dt>
		<dd>
			<?php echo h($sisdecRequester['SisdecRequester']['endereco_requester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($sisdecRequester['SisdecRequester']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Occurrence'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecRequester['SisdecOccurrence']['id'], array('controller' => 'sisdec_occurrences', 'action' => 'view', $sisdecRequester['SisdecOccurrence']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Neighborhood'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecRequester['SisdecNeighborhood']['id'], array('controller' => 'sisdec_neighborhoods', 'action' => 'view', $sisdecRequester['SisdecNeighborhood']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sisdec Requester'), array('action' => 'edit', $sisdecRequester['SisdecRequester']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sisdec Requester'), array('action' => 'delete', $sisdecRequester['SisdecRequester']['id']), null, __('Are you sure you want to delete # %s?', $sisdecRequester['SisdecRequester']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Requesters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Requester'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Neighborhoods'), array('controller' => 'sisdec_neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Neighborhood'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?> </li>
	</ul>
</div>
