
<div class="panel-heading">Editar ocorrência</div>
<div class="panel-body">
    <?php echo $this->Form->create('SisdecOccurrence'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sisdec Occurrence'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('protocolo', array('disabled'));
        echo $this->Form->input('sisdec_source_id');
        echo $this->Form->input('sisdec_situation_id');
        echo $this->Form->input('sisdec_tipology_id');
        echo $this->Form->input('data_abertura', array('disabled'));
        echo $this->Form->input('endereco_occurrence');
        echo $this->Form->input('sisdec_place_id');
        echo $this->Form->input('sisdec_neighborhood_id');
        echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <fieldset>
        <legend>Dados do solicitante</legend>

        <?php
        echo $this->Form->input('SisdecRequester.0.id');
        echo $this->Form->input('SisdecRequester.0.sisdec_occurrence_id', array('type' => 'hidden'));
        echo $this->Form->input('SisdecRequester.0.nome_requester');
        echo $this->Form->input('SisdecRequester.0.cpf');
        echo $this->Form->input('SisdecRequester.0.endereco_requester');
        echo $this->Form->input('SisdecRequester.0.sisdec_neighborhood_id');
        echo $this->Form->input('SisdecRequester.0.telefone');
        ?>

    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>


<?php echo $this->Html->script('views/SisdecOccurrences/listar_bairros.js'); ?>
<?php echo $this->Html->script('views/SisdecOccurrences/add.js'); ?>
