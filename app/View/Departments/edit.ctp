<h1>Editar departamento</h1>

<?php 
  echo $this->Form->create('Department',array('action' => 'edit')),
       $this->Form->input('id',array('type' => 'hidden')),
       $this->Form->input('nome'),
       $this->Form->input('end'),
       $this->Form->input('gerente'),
       $this->Form->end('Cadastrar');
?>
</br>
<?php echo $this->html->link('listar departamentos', array('action' =>'index'));?>