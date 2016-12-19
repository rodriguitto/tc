<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
 		<legend><?php printf(__('Nuevo %s', true), __('Miembro', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirm');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear', true));?>
</div>
<div class="actions">
</div>