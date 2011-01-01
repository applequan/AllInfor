<div class="classMessages index">
<h2><?php __('ClassMessages');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nName');?></th>
	<th><?php echo $paginator->sort('pubdate');?></th>
	<th><?php echo $paginator->sort('class_users_id');?></th>
	<th><?php echo $paginator->sort('content');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($classMessages as $classMessage):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $classMessage['ClassMessage']['nName']; ?>
		</td>
		<td>
			<?php echo $classMessage['ClassMessage']['pubdate']; ?>
		</td>
		<td>
			<?php echo $classMessage['ClassMessage']['class_users_id']; ?>
		</td>
		<td>
			<?php echo $classMessage['ClassMessage']['content']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $classMessage['ClassMessage']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $classMessage['ClassMessage']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $classMessage['ClassMessage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classMessage['ClassMessage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New ClassMessage', true), array('action' => 'add')); ?></li>
	</ul>
</div>
