<div class="ciudades form">
<?php echo $this->Form->create('Ciudad');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Ciudad', true)); ?></legend>
	<?php
		echo $this->Form->input('id_ciudad');
		echo $this->Form->input('id_region');
		echo $this->Form->input('nom_ciudad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ciudad.y')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ciudad.y'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ciudades', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Regiones', true)), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Regiones', true)), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>