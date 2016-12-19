<div class="regiones view">
<h2><?php  __('Region');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Region'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['id_region']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom Region'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['nom_region']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Region', true)), array('action' => 'edit', $region['Region']['id_region'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Region', true)), array('action' => 'delete', $region['Region']['id_region']), null, sprintf(__('Are you sure you want to delete # %s?', true), $region['Region']['id_region'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Regiones', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Region', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Ciudades', true));?></h3>
	<?php if (!empty($region['ciudades'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id Ciudad'); ?></th>
		<th><?php __('Id Region'); ?></th>
		<th><?php __('Nom Ciudad'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($region['ciudades'] as $ciudades):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ciudades['id_ciudad'];?></td>
			<td><?php echo $ciudades['id_region'];?></td>
			<td><?php echo $ciudades['nom_ciudad'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ciudades', 'action' => 'view', $ciudades['y'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ciudades', 'action' => 'edit', $ciudades['y'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ciudades', 'action' => 'delete', $ciudades['y']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciudades['y'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
