<?php debug($teste); ?>
<h1>Add Post</h1>
<?php echo $this -> Form -> create('Employee');
echo $this -> Form -> input('department_id', array('options' => $departments, 'empty' => 'Selecione um departamento'));
echo $this -> Form -> input('nome');
echo $this -> Form -> input('cpf');
echo $this -> Form -> input('salario');
echo $this -> Form -> end('Salvar');
?>

