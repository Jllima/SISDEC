   


<div class="panel-heading">Cadastrar ocorrência</div>
<div class="panel-body">

    <?php echo $this->Form->create('SisdecOccurrence'); ?>
            <fieldset>
                <legend><?php  echo __('Protocolo de ocorrência'); ?></legend>

                <div class='row'>
                    <div class='col-sm-2'>
                        <div class='form-group'>
                            <label>Protocolo</label>
                    <?php
                    $nProtocolo = date("YdHis");
                    echo $this->Form->input('protocolo', array('label' =>  false, 'value' => $nProtocolo, 'disabled', 'class'  =>  'form-control', 'required'));
                            echo $this->Form->input('protocolo', array ( 'label' => false, 'value' => $nProtocolo, 'type' => 'hidden'));
                             
                            ?>
                        </div> 
                    </div>
                </div>

                <div class='row'>
                    <div class='col-sm-2'>
                        <div class='form-group'>
                            <label>Fonte</label>
        <?php echo $this->Form->input('sisdec_source_id', array ('label' => false, 'empty' => 'Informe', 'class' => 'form-control')); ?>
                        </div> 
                    </div>

                    <div class='col-sm-2'>
                        <div class='form-group'>
                            <label>Situação</label>
        <?php echo $this->Form->input('sisdec_situation_id', array ('label' => false, 'class' => 'form-control', 'required')); ?>
                        </div> 
                    </div>

                    <div class='col-sm-2'>
                        <div class='form-group'>
                            <label>Tipologia</label>
        <?php echo $this->Form->input('sisdec_tipology_id', array ('label' => false, 'empty' => 'Informe', 'class' => 'form-control', 'required')); ?>
                        </div> 
                    </div>

                    <div class='col-sm-2'>
                        <div class='form-group'>
                            <label>Data de abertura</label>

                            <?php
                            $data_show = date("d/m/Y");
                            $data_hide = date("Y/m/d");
                            echo $this->Form->input('data_abertura', array ('label' => false, 'value' => $data_show, 'disabled', 'class' => 'form-control', 'type' => 'text', 'required'));
                            echo $this->Form->input('data_abertura', array('label' => false, 'value' => $data_hide, 'type' => 'hidden'));
                            ?>
                        </div> 
                    </div>
                </div>

                <div class='row'>
                    <div class='col-sm-4'>
                        <div class='form-group'>
                            <label>Endereço da ocorrência</label>
        <?php echo $this->Form->input('endereco_occurrence', array   ('label' => false, 'placeholder' => 'informe', 'class' => 'form-control', 'required')); ?>
                                </div> 
                            </div>
                            <div class='col-sm-2'>
                                <div class='form-group'>
                                    <label>Regional</label>
                <?php echo $this->Form->input('sisdec_place_id', array ('label' => false, 'id' => 'place', 'empty' => 'Informe', 'class' => 'form-control', 'required')); ?>
                        </div> 
                    </div>
                    <div class='col-sm-4'>
                        <div class='form-group'>
                            <label>Bairro</label>
        <?php echo $this->Form->input('sisdec_neighborhood_id', array ('label' => false, 'id' => 'neighborhood', 'empty' => 'Informe a regional', 'disabled', 'class' => 'form-control', 'required')); ?>
                        </div> 
                    </div>
                </div>

                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='form-group'>
                            <label>Descrição da ocorrência</label>
        <?php echo $this->Form->input('descricao', array ('label' => false, 'class' => 'form-control', 'required')); ?>
                        </div> 
                    </div>
                </div>

            </fieldset>
            <fieldset>

                <legend>Dados do solicitante</legend>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class='form-group'>
                            <label>Nome</label>
        <?php echo $this->Form->input('SisdecRequester.0.nome_requester', array ('label' => false, 'class' => 'form-control', 'required')); ?>
                </div> 
            </div>       

            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>CPF</label>
<?php echo $this->Form->input('SisdecRequester.0.cpf', array('label' => false, 'class' => 'form-control cpf', 'required')); ?>             
                        </div>            
                    </div>


                    <div class='col-sm-2' id="cpfaviso" style="display:none;">
                        <div class='form-group'>
                            <label>&nbsp;</label>		    
        <?php echo $this->Form->input('avisocpf', array ('label' => false, 'class' => 'form-control_', 'value' => 'CPF inválido', 'style' => 'color:#b94a48; border-color:#ffffff')); ?>                  
                        </div>            
                    </div>

                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class='form-group'>
                            <label>Endereço do solicitante</label>
        <?php echo $this->Form->input('SisdecRequester.0.endereco_requester', array   ('label' => false, 'class' => 'form-control', 'required')); ?>
                </div> 
            </div>
            <div class='col-sm-2'>
                <div class='form-group'>
                    <label>Bairro</label>
<?php echo $this->Form->input('SisdecRequester.0.sisdec_neighborhood_id', array('label' => false, 'class' => 'form-control', 'required')); ?>
                        </div> 
                    </div>
                    <div class='col-sm-2'>
                        <div class='form-group'>
                            <label>Telefone</label>
        <?php echo $this->Form->input('SisdecRequester.0.telefone', array ('label' => false, 'class' => 'form-control phone', 'required', 'title' => 'somente numeros', 'id' => 'phone')); ?> 
                        </div> 
                    </div>
                </div>
            </fieldset>

            <?php echo $this->Form->button('<i class="fa fa-save"></i> Cadastrar', array ('class' => 'btn btn-success')); ?>
<?php echo $this->Form->end(); ?>


</div>





<?php echo $this->Html->script('views/SisdecOccurrences/listar_bairros.js'); ?>
<?php echo $this->Html->script( 'views/SisdecOccurrences/add.js'); ?>
  