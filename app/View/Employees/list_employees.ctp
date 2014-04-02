<h1>Lista de empregados por setor</h1>
<table>
   <tr>
      <td>Nome do empregado</td>
      <td>Cpf do empregado</td>
   </tr>
   <?php foreach ($employees as $employee):?>
     <tr>
     	  <td><?php echo $employee['Employee']['nome'];?></td>
     	  <td><?php echo $employee['Employee']['cpf'];?></td>
     </tr>
   <?php endforeach;?>
</table>