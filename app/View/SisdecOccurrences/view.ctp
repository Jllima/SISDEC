
<div class="panel-heading">Descrição</div>
<div class="panel-body">
    <?php echo $this->Session->flash(); ?>
    <fieldset>
        <legend><?php echo __('Dados da ocorrência'); ?></legend>
        <dl class="dl-horizontal">

            <dt><?php echo __('Protocolo'); ?></dt>
            <dd>
                <?php echo h($sisdecOccurrence['SisdecOccurrence']['protocolo']); ?>

            </dd>
            <dt><?php echo __('Data Abertura'); ?></dt>
            <dd>
                <?php echo h($sisdecOccurrence['SisdecOccurrence']['data_abertura']); ?>

            </dd>
            <dt><?php echo __('Descricao'); ?></dt>
            <dd>
                <?php echo h($sisdecOccurrence['SisdecOccurrence']['descricao']); ?>

            </dd>
            <dt><?php echo __('Tipologia'); ?></dt>
            <dd>
                <?php echo $this->Html->link($sisdecOccurrence['SisdecTipology']['tipo'], array('controller' => 'sisdec_tipologies', 'action' => 'view', $sisdecOccurrence['SisdecTipology']['id'])); ?>

            </dd>
            <dt><?php echo __('Regional'); ?></dt>
            <dd>
                <?php echo $this->Html->link($sisdecOccurrence['SisdecPlace']['area'], array('controller' => 'sisdec_places', 'action' => 'view', $sisdecOccurrence['SisdecPlace']['id'])); ?>

            </dd>
            <dt><?php echo __('status'); ?></dt>
            <dd>
                <?php echo $this->Html->link($sisdecOccurrence['SisdecSituation']['status'], array('controller' => 'sisdec_situations', 'action' => 'view', $sisdecOccurrence['SisdecSituation']['id'])); ?>

            </dd>
            <dt><?php echo __('Fonte da informação'); ?></dt>
            <dd>
                <?php echo $this->Html->link($sisdecOccurrence['SisdecSource']['nome_source'], array('controller' => 'sisdec_sources', 'action' => 'view', $sisdecOccurrence['SisdecSource']['id'])); ?>

            </dd>
            <dt><?php echo __('Bairro'); ?></dt>
            <dd>
                <?php echo $this->Html->link($sisdecOccurrence['SisdecNeighborhood']['nome_neighborhood'], array('controller' => 'sisdec_neighborhoods', 'action' => 'view', $sisdecOccurrence['SisdecNeighborhood']['id'])); ?>

            </dd>
            <dt><?php echo __('Endereço'); ?></dt>
            <dd>
                <?php echo h($sisdecOccurrence['SisdecOccurrence']['endereco_occurrence']); ?>

            </dd>
        </dl>
    </fieldset>

    <fieldset>
        <legend><?php echo __('Dados do solicitante'); ?></legend>
        <dl class="dl-horizontal">
            <?php if (!empty($sisdecOccurrence['SisdecRequester'])): ?>

                <dt><?php echo __('Nome'); ?></dt>
                <dd>
                    <?php echo $sisdecOccurrence['SisdecRequester'][0]['nome_requester']; ?>
                </dd>
                <dt><?php echo __('cpf'); ?></dt>
                <dd>
                    <?php echo $sisdecOccurrence['SisdecRequester'][0]['cpf']; ?>
                </dd>
                <dt><?php echo __('endereço'); ?></dt>
                <dd>
                    <?php echo $sisdecOccurrence['SisdecRequester'][0]['endereco_requester']; ?>
                </dd>
                <dt><?php echo __('Telefone'); ?></dt>
                <dd>
                    <?php echo $sisdecOccurrence['SisdecRequester'][0]['telefone']; ?>
                </dd>
                <dt><?php echo __('i d da ocorrência'); ?></dt>
                <dd>
                    <?php echo $sisdecOccurrence['SisdecRequester'][0]['sisdec_occurrence_id']; ?>
                </dd>
                <dt><?php echo __('id do bairro'); ?></dt>
                <dd>
                    <?php echo $sisdecOccurrence['SisdecRequester'][0]['sisdec_neighborhood_id']; ?>
                </dd>
            <?php endif; ?>
        </dl>
    </fieldset>
    <a href="javascript:history.go(-1);">Voltar</a>
    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $sisdecOccurrence['SisdecOccurrence']['id'])); ?>
</div>




