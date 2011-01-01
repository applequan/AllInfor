<div class="userleagues displayLeaguesNotice">
<h2><?php 
	echo $userleague['Userleague']['lName'];
	echo "<br/>";
	echo $userleague['Userleague']['discription'];
?></h2>
<div class="related">
	<h3><?php __('社团通知：');?></h3>
	<?php if (!empty($userleague['LeagueNotice'])):?>
	<table cellpadding = "0" cellspacing = "0" style="width:70%">
	<tr>
		<th><?php __('名称/标题'); ?></th>
		
		<th><?php __('发布日期'); ?></th>
		<th><?php __('内容概述/描述'); ?></th>
		<th><?php __('操作'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userleague['LeagueNotice'] as $leagueNotice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		
		<tr<?php echo $class;?>>
			
			<td ><?php echo $leagueNotice['nName'];?></td>			
			<td><?php echo $leagueNotice['pubDate'];?></td>
			
			<td><?php echo $leagueNotice['discription'];?></td>
			<td class="actions">
				<?php echo "--".$html->link(__('查看详细', true), array('controller' => 'league_notices', 'action' => 'view', $leagueNotice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

