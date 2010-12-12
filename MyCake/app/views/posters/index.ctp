<div class="posters index">
<h2><?php __('Posters');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>

<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('theme');?></th>
	<th><?php echo $paginator->sort('pubDate');?></th>
	<th><?php echo $paginator->sort('discription');?></th>
	<th><?php echo $paginator->sort('imageName');?></th>
	<th><?php echo $paginator->sort('userleague_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($posters as $poster):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $poster['Poster']['id']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['theme']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['pubDate']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['discription']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['imageName']; ?>
		</td>
		<td>
			<?php echo $html->link($poster['Userleague']['id'], array('controller' => 'userleagues', 'action' => 'view', $poster['Userleague']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $poster['Poster']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $poster['Poster']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $poster['Poster']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $poster['Poster']['id'])); ?>
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
		<li><?php echo $html->link(__('New Poster', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
