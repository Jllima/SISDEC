<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('protocolo'); ?></th>
			<th><?php echo $this->Paginator->sort('data_abertura'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_tipology_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_place_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_situation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_source_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sisdec_neighborhood_id'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco_occurrence'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sisdecOccurrences as $sisdecOccurrence): ?>
	<tr>
		<td><?php echo h($sisdecOccurrence['SisdecOccurrence']['id']); ?>&nbsp;</td>
		<td><?php echo h($sisdecOccurrence['SisdecOccurrence']['protocolo']); ?>&nbsp;</td>
		<td><?php echo h($sisdecOccurrence['SisdecOccurrence']['data_abertura']); ?>&nbsp;</td>
		<td><?php echo h($sisdecOccurrence['SisdecOccurrence']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecTipology']['id'], array('controller' => 'sisdec_tipologies', 'action' => 'view', $sisdecOccurrence['SisdecTipology']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecPlace']['id'], array('controller' => 'sisdec_places', 'action' => 'view', $sisdecOccurrence['SisdecPlace']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecSituation']['id'], array('controller' => 'sisdec_situations', 'action' => 'view', $sisdecOccurrence['SisdecSituation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecSource']['id'], array('controller' => 'sisdec_sources', 'action' => 'view', $sisdecOccurrence['SisdecSource']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecNeighborhood']['id'], array('controller' => 'sisdec_neighborhoods', 'action' => 'view', $sisdecOccurrence['SisdecNeighborhood']['id'])); ?>
		</td>
		<td><?php echo h($sisdecOccurrence['SisdecOccurrence']['endereco_occurrence']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sisdecOccurrence['SisdecOccurrence']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sisdecOccurrence['SisdecOccurrence']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sisdecOccurrence['SisdecOccurrence']['id']), null, __('Are you sure you want to delete # %s?', $sisdecOccurrence['SisdecOccurrence']['id'])); ?>
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