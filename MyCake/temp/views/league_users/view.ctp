<div class="leagueUsers view">
<h2><?php  __('LeagueUser');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueUser['LeagueUser']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueUser['LeagueUser']['usename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueUser['LeagueUser']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueUser['LeagueUser']['lName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueUser['LeagueUser']['discription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PublicKey'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueUser['LeagueUser']['publicKey']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit LeagueUser', true), array('action' => 'edit', $leagueUser['LeagueUser']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete LeagueUser', true), array('action' => 'delete', $leagueUser['LeagueUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $leagueUser['LeagueUser']['id'])); ?> </li>
		<li><?php echo $html->link(__('List LeagueUsers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New LeagueUser', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
