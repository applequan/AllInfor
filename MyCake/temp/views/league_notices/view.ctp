<div class="leagueNotices view">
<h2><?php  __('LeagueNotice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['nName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pubdate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['pubdate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('League User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['league_user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['discription']; ?>
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
	</ul>
</div>
