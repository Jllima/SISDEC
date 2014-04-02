x<h1>Departamentos</h1>
<p><?php echo $this->html->link('Adicionar departamento', array('action' =>'add'));?></p>
<p><?php echo $this->html->link('Listar empregados', array('controller'=>'employees','action' =>'index'));?></p>
<table>
<table>
	<tr>
		   <td>Id</td>
		   <td>Nome</td>
		   <td>End</td>
		   <td>Gerente</td>
		   <td>Ações</td>
		   <td>listar empregados do setor</td>
	</tr>
	<?php  foreach ($departments as $department):?>
		      <tr>
		          <td><?php echo $department['Department']['id'];?></td>
		          <td><?php echo $department['Department']['nome'];?></td>
		          <td><?php echo $department['Department']['end'];?></td>
		          <td><?php echo $department['Department']['gerente'];?></td>
		          <td>
		          	<?php echo $this->html->link('Editar',array('action'=>'edit',$department['Department']['id']));?>
		          	<?php echo $this->html->link('Excluir',array('action'=>'delete',$department['Department']['id']),null,'Deseja Excluir o departamento:  '.$department['Department']['nome']);?>
		          	<?php echo $this->html->link('Visualizar',array('action'=>'view',$department['Department']['id']));?>
		          </td>
		          <td>
		          	<?php echo $this->html->link('Empregados',array('controller'=>'employees', 'action'=>'listEmployees',
		          	$department['Department']['id']));?>
		          </td>
		      </tr>
  <?php endforeach;?>
</table>

