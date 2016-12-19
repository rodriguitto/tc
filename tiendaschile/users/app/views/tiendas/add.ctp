<div class="tiendas form">
<?php echo $this->Form->create('Tienda');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Tienda', true)); ?></legend>
	<?php
		echo $this->Form->input('nom_tienda',array('label'=>'Nombre de la Tienda'));
		echo $this->Form->input('res_tienda',array('label'=>'Reseña'));
		echo $this->Form->input('res_mobile_tienda',array('label'=>'Resumen de la Reseña'));
		echo $this->Form->input('dir_tienda',array('label'=>'Dirección'));
		echo $this->Form->input('dir_anex_tienda',array('label'=>'Detalle Dirección (piso, numero de local, etc)'));
		echo $this->Form->input('horario_tienda',array('label'=>'Horario'));
		echo $this->Form->input('face_tienda',array('label'=>'Dirección de Facebook'));
		echo $this->Form->input('twit_tienda',array('label'=>'Dirección de Twitter'));
		echo $this->Form->input('web_tienda',array('label'=>'Pagina Web'));
		echo $this->Form->input('fon_tienda',array('label'=>'Teléfono'));
		echo $this->Form->input('id_ciudad',array('options'=>$ciudades,'type'=>'select'));
		echo $this->Form->input('tags',array('label'=>'Etiquetas de Busqueda'));
		//echo $this->Form->input('ll_tienda');
		//echo $this->Form->input('spn_tienda');
		//echo $this->Form->input('horario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tiendas', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>