<div class="userleagues view">
<h2><?php  __('Userleague');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userleague['Userleague']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userleague['Userleague']['lName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userleague['Userleague']['discription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PublicKey'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userleague['Userleague']['publicKey']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($userleague['User']['id'], array('controller' => 'users', 'action' => 'view', $userleague['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Userleague', true), array('action' => 'edit', $userleague['Userleague']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Userleague', true), array('action' => 'delete', $userleague['Userleague']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userleague['Userleague']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Userleagues', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List League Notices', true), array('controller' => 'league_notices', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League Notice', true), array('controller' => 'league_notices', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Posters', true), array('controller' => 'posters', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Poster', true), array('controller' => 'posters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related League Notices');?></h3>
	<?php if (!empty($userleague['LeagueNotice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Content'); ?></th>
		<th><?php __('Discription'); ?></th>
		<th><?php __('Userleague Id'); ?></th>
		<th><?php __('Id'); ?></th>
		<th><?php __('NName'); ?></th>
		<th><?php __('PubDate'); ?></th>
		<th><?php __('Auth');?></th>
		<th class="actions"><?php __('Actions');?></th>
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
			<td><?php echo $leagueNotice['content'];?></td>
			<td><?php echo $leagueNotice['discription'];?></td>
			<td><?php echo $leagueNotice['userleague_id'];?></td>
			<td><?php echo $leagueNotice['id'];?></td>
			<td><?php echo $leagueNotice['nName'];?></td>
			<td><?php echo $leagueNotice['pubDate'];?></td>
			<td><?php echo $leagueNotice['auth'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'league_notices', 'action' => 'view', $leagueNotice['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'league_notices', 'action' => 'edit', $leagueNotice['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'league_notices', 'action' => 'delete', $leagueNotice['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $leagueNotice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New League Notice', true), array('controller' => 'league_notices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Posters');?></h3>
	<?php if (!empty($userleague['Poster'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Theme'); ?></th>
		<th><?php __('PubDate'); ?></th>
		<th><?php __('Discription'); ?></th>
		<th><?php __('ImageName'); ?></th>
		<th><?php __('Userleague Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userleague['Poster'] as $poster):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $poster['id'];?></td>
			<td><?php echo $poster['theme'];?></td>
			<td><?php echo $poster['pubDate'];?></td>
			<td><?php echo $poster['discription'];?></td>
			<td><?php echo $poster['imageName'];?></td>
			<td><?php echo $poster['userleague_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'posters', 'action' => 'view', $poster['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'posters', 'action' => 'edit', $poster['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'posters', 'action' => 'delete', $poster['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $poster['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Poster', true), array('controller' => 'posters', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
