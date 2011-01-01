<div class="classUsers index">
<h2><?php __('ClassUsers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('password');?></th>
	<th><?php echo $paginator->sort('cName');?></th>
	<th><?php echo $paginator->sort('school');?></th>
	<th><?php echo $paginator->sort('department');?></th>
	<th><?php echo $paginator->sort('grade');?></th>
	<th><?php echo $paginator->sort('discription');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($classUsers as $classUser):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $classUser['ClassUser']['id']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['username']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['password']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['cName']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['school']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['department']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['grade']; ?>
		</td>
		<td>
			<?php echo $classUser['ClassUser']['discription']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $classUser['ClassUser']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $classUser['ClassUser']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $classUser['ClassUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classUser['ClassUser']['id'])); ?>
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
		<li><?php echo $html->link(__('New ClassUser', true), array('action' => 'add')); ?></li>
	</ul>
</div>
