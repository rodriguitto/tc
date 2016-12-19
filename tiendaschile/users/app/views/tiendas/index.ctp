<div class="tiendas index">
	<h2><?php __('Tiendas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_tienda');?></th>
			<th><?php echo $this->Paginator->sort('nom_tienda');?></th>
			<th><?php echo $this->Paginator->sort('res_tienda');?></th>
			<th><?php echo $this->Paginator->sort('res_mobile_tienda');?></th>
			<th><?php echo $this->Paginator->sort('dir_tienda');?></th>
			<th><?php echo $this->Paginator->sort('dir_anex_tienda');?></th>
			<th><?php echo $this->Paginator->sort('horario_tienda');?></th>
			<th><?php echo $this->Paginator->sort('face_tienda');?></th>
			<th><?php echo $this->Paginator->sort('twit_tienda');?></th>
			<th><?php echo $this->Paginator->sort('web_tienda');?></th>
			<th><?php echo $this->Paginator->sort('fon_tienda');?></th>
			<th><?php echo $this->Paginator->sort('id_ciudad');?></th>
			<th><?php echo $this->Paginator->sort('tags');?></th>
			<th><?php echo $this->Paginator->sort('ll_tienda');?></th>
			<th><?php echo $this->Paginator->sort('spn_tienda');?></th>
			<th><?php echo $this->Paginator->sort('vw_tienda');?></th>
			<th><?php echo $this->Paginator->sort('vm_tienda');?></th>
			<th><?php echo $this->Paginator->sort('premium');?></th>
			<th><?php echo $this->Paginator->sort('horario');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tiendas as $tienda):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tienda['Tienda']['id_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['nom_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['res_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['res_mobile_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['dir_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['dir_anex_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['horario_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['face_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['twit_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['web_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['fon_tienda']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tienda['ciudades']['nom_ciudad'], array('controller' => 'ciudades', 'action' => 'view', $tienda['ciudades']['y'])); ?>
		</td>
		<td><?php echo $tienda['Tienda']['tags']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['ll_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['spn_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['vw_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['vm_tienda']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['premium']; ?>&nbsp;</td>
		<td><?php echo $tienda['Tienda']['horario']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tienda['Tienda']['id_tienda'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tienda['Tienda']['id_tienda'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tienda['Tienda']['id_tienda']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tienda['Tienda']['id_tienda'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tienda', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ciudades', true)), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>