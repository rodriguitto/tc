<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Member', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Member.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Members', true)), array('action' => 'index'));?></li>
	</ul>
</div>