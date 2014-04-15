
<table id="dt_official" class="table table-striped table-bordered table-hover datatable"> 
    <thead>
        <tr>
            <th>Protocolo</th>
            <th>Endereço da ocorrência</th>
            <th>Bairro</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ocurrences as $ocurrence): ?>
            <tr>
                <td><?php echo $ocurrence['SisdecOccurrence']['protocolo']; ?></td>
                <td><?php echo $ocurrence['SisdecOccurrence']['endereco_occurrence']; ?></td>
                <td><?php echo $ocurrence['SisdecNeighborhood']['nome_neighborhood']; ?></td>
                <td><?php echo $ocurrence['SisdecSituation']['status']; ?></td>
                <td>
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $ocurrence['SisdecOccurrence']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ocurrence['SisdecOccurrence']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ocurrence['SisdecOccurrence']['id']), null, __('Are you sure you want to delete # %s?', $ocurrence['SisdecOccurrence']['id'])); ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->Html->script('views/SisdecOccurrences/data_table.js'); ?>


