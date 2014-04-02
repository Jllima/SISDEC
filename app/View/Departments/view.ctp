<h1>Exibindo departamento</h1>
 <h2>Departamento:  <?php echo $department['Department']['nome']?></h2>
   <p>Gerente:  <?php echo $department['Department']['gerente']?></p>
   <p><?php echo $this->html->link('Listar departamentos',array('action'=>'index'))?></p>