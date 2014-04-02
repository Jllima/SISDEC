<h1>Edit Post</h1>
<?php
echo $this -> Form -> create('Employee', array('action' => 'edit'));
echo $this -> Form -> input('department_id', array('options' => $departments));
echo $this -> Form -> input('nome');
echo $this -> Form -> input('cpf');
echo $this -> Form -> input('salario');
echo $this -> Form -> input('id', array('type' => 'hidden'));
echo $this -> Form -> end('Atualizar empregado');
?>