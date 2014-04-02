<h1>Departamentos</h1>

<table>
	<tr>
		   <td>Id</td>
		   <td>Nome</td>
		   <td>Cpf</td>
		   <td>Salario</td>
		   <td>Codigo do departamento</td>
		   <td>Ações</td>
	</tr>
	<?php  foreach ($employees as $employee):?>
		      <tr>
		          <td><?php echo $employee['Employee']['id'];?></td>
		          <td><?php echo $employee['Employee']['nome'];?></td>
		          <td><?php echo $employee['Employee']['cpf'];?></td>
		          <td><?php echo $employee['Employee']['salario'];?></td>
		          <td><?php echo $employee['Employee']['department_id'];?></td>
		          <td>
		          	<?php echo $this->html->link('Editar',array('action'=>'edit',$employee['Employee']['id']));?>
		          	<?php echo $this->html->link('Excluir',array('action'=>'delete',$employee['Employee']['id']),null,
		          	'Deseja Excluir o empregado:  '.$employee['Employee']['nome']);?>
		          	<?php echo $this->html->link('Visualizar',array('action'=>'view',$employee['Employee']['id']));?>
		          </td>
		      </tr>
  <?php endforeach;?>
</table>

</br><?php echo $this->html->link('Adicionar empregado', array('action' =>'add'));?>