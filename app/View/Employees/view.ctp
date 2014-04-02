<h1>Exibindo departamento</h1>
 <h2>Empregado:  <?php echo $employee['Employee']['nome']?></h2>
   <p>Cpf:  <?php echo $employee['Employee']['cpf']?></p>
   <p><?php echo $this->html->link('Listar empregados',array('action'=>'index'))?></p>