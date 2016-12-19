<div class="regiones form">
<?php echo $this->Form->create('Region');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Region', true)); ?></legend>
	<?php
		echo $this->Form->input('id_region');
		echo $this->Form->input('nom_region');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Region.id_region')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Region.id_region'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Regiones', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>