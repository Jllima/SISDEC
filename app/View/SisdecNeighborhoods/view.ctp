<div class="sisdecNeighborhoods view">
<h2><?php echo __('Sisdec Neighborhood'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sisdecNeighborhood['SisdecNeighborhood']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Neighborhood'); ?></dt>
		<dd>
			<?php echo h($sisdecNeighborhood['SisdecNeighborhood']['nome_neighborhood']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Place'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecNeighborhood['SisdecPlace']['id'], array('controller' => 'sisdec_places', 'action' => 'view', $sisdecNeighborhood['SisdecPlace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($sisdecNeighborhood['SisdecNeighborhood']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($sisdecNeighborhood['SisdecNeighborhood']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sisdec Neighborhood'), array('action' => 'edit', $sisdecNeighborhood['SisdecNeighborhood']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sisdec Neighborhood'), array('action' => 'delete', $sisdecNeighborhood['SisdecNeighborhood']['id']), null, __('Are you sure you want to delete # %s?', $sisdecNeighborhood['SisdecNeighborhood']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Neighborhoods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Neighborhood'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Places'), array('controller' => 'sisdec_places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Place'), array('controller' => 'sisdec_places', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Requesters'), array('controller' => 'sisdec_requesters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Requester'), array('controller' => 'sisdec_requesters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sisdec Occurrences'); ?></h3>
	<?php if (!empty($sisdecNeighborhood['SisdecOccurrence'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Protocolo'); ?></th>
		<th><?php echo __('Data Abertura'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Sisdec Tipology Id'); ?></th>
		<th><?php echo __('Sisdec Place Id'); ?></th>
		<th><?php echo __('Sisdec Situation Id'); ?></th>
		<th><?php echo __('Sisdec Source Id'); ?></th>
		<th><?php echo __('Sisdec Neighborhood Id'); ?></th>
		<th><?php echo __('Endereco Occurrence'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sisdecNeighborhood['SisdecOccurrence'] as $sisdecOccurrence): ?>
		<tr>
			<td><?php echo $sisdecOccurrence['id']; ?></td>
			<td><?php echo $sisdecOccurrence['protocolo']; ?></td>
			<td><?php echo $sisdecOccurrence['data_abertura']; ?></td>
			<td><?php echo $sisdecOccurrence['descricao']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_tipology_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_place_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_situation_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_source_id']; ?></td>
			<td><?php echo $sisdecOccurrence['sisdec_neighborhood_id']; ?></td>
			<td><?php echo $sisdecOccurrence['endereco_occurrence']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sisdec_occurrences', 'action' => 'view', $sisdecOccurrence['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sisdec_occurrences', 'action' => 'edit', $sisdecOccurrence['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sisdec_occurrences', 'action' => 'delete', $sisdecOccurrence['id']), null, __('Are you sure you want to delete # %s?', $sisdecOccurrence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sisdec Requesters'); ?></h3>
	<?php if (!empty($sisdecNeighborhood['SisdecRequester'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome Requester'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Endereco Requester'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Sisdec Occurrence Id'); ?></th>
		<th><?php echo __('Sisdec Neighborhood Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sisdecNeighborhood['SisdecRequester'] as $sisdecRequester): ?>
		<tr>
			<td><?php echo $sisdecRequester['id']; ?></td>
			<td><?php echo $sisdecRequester['nome_requester']; ?></td>
			<td><?php echo $sisdecRequester['cpf']; ?></td>
			<td><?php echo $sisdecRequester['endereco_requester']; ?></td>
			<td><?php echo $sisdecRequester['telefone']; ?></td>
			<td><?php echo $sisdecRequester['sisdec_occurrence_id']; ?></td>
			<td><?php echo $sisdecRequester['sisdec_neighborhood_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sisdec_requesters', 'action' => 'view', $sisdecRequester['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sisdec_requesters', 'action' => 'edit', $sisdecRequester['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sisdec_requesters', 'action' => 'delete', $sisdecRequester['id']), null, __('Are you sure you want to delete # %s?', $sisdecRequester['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sisdec Requester'), array('controller' => 'sisdec_requesters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
