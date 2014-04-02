<div class="sisdecRequesters index">
	<h2><?php echo __('Sisdec Requesters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome_requester'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco_requester'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_occurrence_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_neighborhood_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sisdecRequesters as $sisdecRequester): ?>
	<tr>
		<td><?php echo h($sisdecRequester['SisdecRequester']['id']); ?>&nbsp;</td>
		<td><?php echo h($sisdecRequester['SisdecRequester']['nome_requester']); ?>&nbsp;</td>
		<td><?php echo h($sisdecRequester['SisdecRequester']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($sisdecRequester['SisdecRequester']['endereco_requester']); ?>&nbsp;</td>
		<td><?php echo h($sisdecRequester['SisdecRequester']['telefone']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sisdecRequester['SisdecOccurrence']['id'], array('controller' => 'sisdec_occurrences', 'action' => 'view', $sisdecRequester['SisdecOccurrence']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sisdecRequester['SisdecNeighborhood']['id'], array('controller' => 'sisdec_neighborhoods', 'action' => 'view', $sisdecRequester['SisdecNeighborhood']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sisdecRequester['SisdecRequester']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sisdecRequester['SisdecRequester']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sisdecRequester['SisdecRequester']['id']), null, __('Are you sure you want to delete # %s?', $sisdecRequester['SisdecRequester']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sisdec Requester'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Neighborhoods'), array('controller' => 'sisdec_neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Neighborhood'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?> </li>
	</ul>
</div>
