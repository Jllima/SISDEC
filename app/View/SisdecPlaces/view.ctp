<div class="sisdecPlaces view">
<h2><?php echo __('Sisdec Place'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sisdecPlace['SisdecPlace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($sisdecPlace['SisdecPlace']['area']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sisdec Place'), array('action' => 'edit', $sisdecPlace['SisdecPlace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sisdec Place'), array('action' => 'delete', $sisdecPlace['SisdecPlace']['id']), null, __('Are you sure you want to delete # %s?', $sisdecPlace['SisdecPlace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Places'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Place'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Neighborhoods'), array('controller' => 'sisdec_neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Neighborhood'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('controller' => 'sisdec_occurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('controller' => 'sisdec_occurrences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sisdec Neighborhoods'); ?></h3>
	<?php if (!empty($sisdecPlace['SisdecNeighborhood'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome Neighborhood'); ?></th>
		<th><?php echo __('Sisdec Place Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sisdecPlace['SisdecNeighborhood'] as $sisdecNeighborhood): ?>
		<tr>
			<td><?php echo $sisdecNeighborhood['id']; ?></td>
			<td><?php echo $sisdecNeighborhood['nome_neighborhood']; ?></td>
			<td><?php echo $sisdecNeighborhood['sisdec_place_id']; ?></td>
			<td><?php echo $sisdecNeighborhood['created']; ?></td>
			<td><?php echo $sisdecNeighborhood['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sisdec_neighborhoods', 'action' => 'view', $sisdecNeighborhood['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sisdec_neighborhoods', 'action' => 'edit', $sisdecNeighborhood['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sisdec_neighborhoods', 'action' => 'delete', $sisdecNeighborhood['id']), null, __('Are you sure you want to delete # %s?', $sisdecNeighborhood['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sisdec Neighborhood'), array('controller' => 'sisdec_neighborhoods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sisdec Occurrences'); ?></h3>
	<?php if (!empty($sisdecPlace['SisdecOccurrence'])): ?>
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
	<?php foreach ($sisdecPlace['SisdecOccurrence'] as $sisdecOccurrence): ?>
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
