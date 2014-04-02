<div class="sisdecNeighborhoods form">
<?php echo $this->Form->create('SisdecNeighborhood'); ?>
	<fieldset>
		<legend><?php echo __('Add Sisdec Neighborhood'); ?></legend>
	<?php
		echo $this->Form->input('nome_neighborhood');
		echo $this->Form->input('sisdec_place_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sisdec Neighborhoods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sisdec Places'), array('controller' => 'sisdec_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Place'), array('controller' => 'sisdec_places', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Requesters'), array('controller' => 'sisdec_requesters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Requester'), array('controller' => 'sisdec_requesters', 'action' => 'add')); ?> </li>
	</ul>
</div>
