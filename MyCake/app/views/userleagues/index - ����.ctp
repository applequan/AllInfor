<div class="userleagues index">
<h2><?php __('Userleagues');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('lName');?></th>
	<th><?php echo $paginator->sort('discription');?></th>
	<th><?php echo $paginator->sort('publicKey');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($userleagues as $userleague):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $userleague['Userleague']['id']; ?>
		</td>
		<td>
			<?php echo $userleague['Userleague']['lName']; ?>
		</td>
		<td>
			<?php echo $userleague['Userleague']['discription']; ?>
		</td>
		<td>
			<?php echo $userleague['Userleague']['publicKey']; ?>
		</td>
		<td>
			<?php echo $html->link($userleague['User']['id'], array('controller' => 'users', 'action' => 'view', $userleague['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $userleague['Userleague']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $userleague['Userleague']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $userleague['Userleague']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userleague['Userleague']['id'])); ?>
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
		<li><?php echo $html->link(__('New Userleague', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List League Notices', true), array('controller' => 'league_notices', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League Notice', true), array('controller' => 'league_notices', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Posters', true), array('controller' => 'posters', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Poster', true), array('controller' => 'posters', 'action' => 'add')); ?> </li>
	</ul>
</div>
