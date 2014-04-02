<div class="sisdecOccurrences form">
<?php echo $this->Form->create('SisdecOccurrence'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sisdec Occurrence'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('protocolo');
		echo $this->Form->input('data_abertura');
		echo $this->Form->input('descricao');
		echo $this->Form->input('sisdec_tipology_id');
		echo $this->Form->input('sisdec_place_id');
		echo $this->Form->input('sisdec_situation_id');
		echo $this->Form->input('sisdec_source_id');
		echo $this->Form->input('sisdec_neighborhood_id');
		echo $this->Form->input('endereco_occurrence');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SisdecOccurrence.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SisdecOccurrence.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sisdec Tipologies'), array('controller' => 'sisdec_tipologies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Tipology'), array('controller' => 'sisdec_tipologies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Places'), array('controller' => 'sisdec_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Place'), array('controller' => 'sisdec_places', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Situations'), array('controller' => 'sisdec_situations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Situation'), array('controller' => 'sisdec_situations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Sources'), array('controller' => 'sisdec_sources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Source'), array('controller' => 'sisdec_sources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Neighborhoods'), array('controller' => 'sisdec_neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Neighborhood'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Requesters'), array('controller' => 'sisdec_requesters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Requester'), array('controller' => 'sisdec_requesters', 'action' => 'add')); ?> </li>
	</ul>
</div>
