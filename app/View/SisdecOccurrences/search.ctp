

<div class="panel-heading">Ocorrências</div>
<div class="panel-body">

    <div class='row'>
        <div class='col-sm-2'>
            <div class='form-group'>
                <label>Situação:</label>
                <?php echo $this->Form->input('sisdec_situation_id', array('type' => 'select', 'options' => $situations, 'label' => false, 'class' => 'form-control', 'required', 'empty' => 'Informe')); ?>
            </div> 
        </div>
    </div>

    <div id="teste" class="table-responsive " >
    </div>
</div>


<?php echo $this->Html->script('views/SisdecOccurrences/search.js'); ?>



