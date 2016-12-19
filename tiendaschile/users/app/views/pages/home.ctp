 <?php
$member=($this->Session->read('Auth.Member'));

?>
<div class="actions">
<h2 align=center>Funciones</h2>
<ul>
	<li><?php echo $this->Html->link('Mis Tiendas',array('controller' => 'tiendas', 'action' => 'mindex'));?></li>
	<li><?php //echo $this->Html->link('Solicitar Servicio Premium',array('controller' => 'tiendas', 'action' => 'index'));?></li>
</ul>
</div>
<?php if ($member['premium']==3){?>
<div class="actions">
<h2 align=center>Administracion</h2>
<ul>
	<li><?php echo $this->Html->link('Miembros',array('controller' => 'members', 'action' => 'index'));?></li>	
	<li><?php echo $this->Html->link('Tiendas',  array('controller' => 'tiendas', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Ciudades', array('controller' => 'ciudades', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link('Regiones',array('controller' => 'regiones', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Etiquetas', array('controller' => 'tags', 'action' => 'index')); ?></li>
</ul>
</div>

<?php }?>