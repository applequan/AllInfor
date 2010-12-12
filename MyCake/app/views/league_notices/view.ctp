<div class="leagueNotices view">
<h2><?php  __('LeagueNotice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['discription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Userleague'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($leagueNotice['Userleague']['id'], array('controller' => 'userleagues', 'action' => 'view', $leagueNotice['Userleague']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['nName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PubDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['pubDate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit LeagueNotice', true), array('action' => 'edit', $leagueNotice['LeagueNotice']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete LeagueNotice', true), array('action' => 'delete', $leagueNotice['LeagueNotice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $leagueNotice['LeagueNotice']['id'])); ?> </li>
		<li><?php echo $html->link(__('List LeagueNotices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New LeagueNotice', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
