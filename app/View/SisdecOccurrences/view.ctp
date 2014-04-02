<div class="sisdecOccurrences view">
<h2><?php echo __('Sisdec Occurrence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sisdecOccurrence['SisdecOccurrence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Protocolo'); ?></dt>
		<dd>
			<?php echo h($sisdecOccurrence['SisdecOccurrence']['protocolo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Abertura'); ?></dt>
		<dd>
			<?php echo h($sisdecOccurrence['SisdecOccurrence']['data_abertura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($sisdecOccurrence['SisdecOccurrence']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Tipology'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecTipology']['id'], array('controller' => 'sisdec_tipologies', 'action' => 'view', $sisdecOccurrence['SisdecTipology']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Place'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecPlace']['id'], array('controller' => 'sisdec_places', 'action' => 'view', $sisdecOccurrence['SisdecPlace']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Situation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecSituation']['id'], array('controller' => 'sisdec_situations', 'action' => 'view', $sisdecOccurrence['SisdecSituation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Source'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecSource']['id'], array('controller' => 'sisdec_sources', 'action' => 'view', $sisdecOccurrence['SisdecSource']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sisdec Neighborhood'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sisdecOccurrence['SisdecNeighborhood']['id'], array('controller' => 'sisdec_neighborhoods', 'action' => 'view', $sisdecOccurrence['SisdecNeighborhood']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco Occurrence'); ?></dt>
		<dd>
			<?php echo h($sisdecOccurrence['SisdecOccurrence']['endereco_occurrence']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sisdec Occurrence'), array('action' => 'edit', $sisdecOccurrence['SisdecOccurrence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sisdec Occurrence'), array('action' => 'delete', $sisdecOccurrence['SisdecOccurrence']['id']), null, __('Are you sure you want to delete # %s?', $sisdecOccurrence['SisdecOccurrence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sisdec Occurrences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sisdec Occurrence'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Sisdec Requesters'); ?></h3>
	<?php if (!empty($sisdecOccurrence['SisdecRequester'])): ?>
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
	<?php foreach ($sisdecOccurrence['SisdecRequester'] as $sisdecRequester): ?>
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
