<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
 		<legend>Iniciar Sesion</legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div><div class="actions">
<ul>
	<li><?php echo $this->Html->link('Registrese aca',array('controller' => 'members', 'action' => 'nuevo'));?></li>	
</ul>
</div>