<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Member', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('estado');
		echo $this->Form->input('premium');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Members', true)), array('action' => 'index'));?></li>
	</ul>
</div>