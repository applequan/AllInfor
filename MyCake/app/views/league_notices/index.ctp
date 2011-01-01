<div class="leagueNotices index">
<h2><?php __('社团通知');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('content');?></th>
	<th><?php echo $paginator->sort('discription');?></th>
	<th><?php echo $paginator->sort('userleague_id');?></th>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nName');?></th>
	<th><?php echo $paginator->sort('pubDate');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($leagueNotices as $leagueNotice):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $leagueNotice['LeagueNotice']['content']; ?>
		</td>
		<td>
			<?php echo $leagueNotice['LeagueNotice']['discription']; ?>
		</td>
		<td>
			<?php echo $html->link($leagueNotice['Userleague']['id'], array('controller' => 'userleagues', 'action' => 'view', $leagueNotice['Userleague']['id'])); ?>
		</td>
		<td>
			<?php echo $leagueNotice['LeagueNotice']['id']; ?>
		</td>
		<td>
			<?php echo $leagueNotice['LeagueNotice']['nName']; ?>
		</td>
		<td>
			<?php echo $leagueNotice['LeagueNotice']['pubDate']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $leagueNotice['LeagueNotice']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $leagueNotice['LeagueNotice']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $leagueNotice['LeagueNotice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $leagueNotice['LeagueNotice']['id'])); ?>
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
		<li><?php echo $html->link(__('New LeagueNotice', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
