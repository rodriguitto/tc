<div class="tiendas form">
<?php echo $this->Form->create('Tienda');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Tienda', true)); ?></legend>
	<?php
		echo $this->Form->input('id_tienda');
		echo $this->Form->input('nom_tienda');
		echo $this->Form->input('res_tienda');
		echo $this->Form->input('res_mobile_tienda');
		echo $this->Form->input('dir_tienda');
		echo $this->Form->input('dir_anex_tienda');
		echo $this->Form->input('horario_tienda');
		echo $this->Form->input('face_tienda');
		echo $this->Form->input('twit_tienda');
		echo $this->Form->input('web_tienda');
		echo $this->Form->input('fon_tienda');
		echo $this->Form->input('id_ciudad');
		echo $this->Form->input('tags');
		echo $this->Form->input('ll_tienda');
		echo $this->Form->input('spn_tienda');
		echo $this->Form->input('vw_tienda');
		echo $this->Form->input('vm_tienda');
		echo $this->Form->input('premium');
		echo $this->Form->input('horario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tienda.id_tienda')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tienda.id_tienda'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tiendas', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>