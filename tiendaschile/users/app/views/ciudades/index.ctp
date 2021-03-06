<div class="ciudades index">
	<h2><?php __('Ciudades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_ciudad');?></th>
			<th><?php echo $this->Paginator->sort('id_region');?></th>
			<th><?php echo $this->Paginator->sort('nom_ciudad');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ciudades as $ciudad):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ciudad['Ciudad']['id_ciudad']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ciudad['regiones']['nom_region'], array('controller' => 'regiones', 'action' => 'view', $ciudad['regiones']['id_region'])); ?>
		</td>
		<td><?php echo $ciudad['Ciudad']['nom_ciudad']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ciudad['Ciudad']['y'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ciudad['Ciudad']['y'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ciudad['Ciudad']['y']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciudad['Ciudad']['y'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudad', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Regiones', true)), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Regiones', true)), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>