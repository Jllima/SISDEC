<h1>Add Novo departamento</h1
</br><?php echo $this->html->link('listar departamentos', array('action' =>'index'));?>
<?php 
  echo $this->Form->create('Department'),
       $this->Form->input('nome'),
       $this->Form->input('end'),
       $this->Form->input('gerente'),
       $this->Form->end('Cadastrar');
?>