<div class="leagueNotices view">
<h2><?php  __('社团通知');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('通知标题'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $leagueNotice['LeagueNotice']['nName']; ?>
				&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('内容'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('附带描述:'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['discription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('社团号：'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($leagueNotice['Userleague']['id'], array('controller' => 'userleagues', 'action' => 'view', $leagueNotice['Userleague']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('文章Id号：'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['id']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('日期:'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $leagueNotice['LeagueNotice']['pubDate']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions"style="margin-left:30px">
	<ul>
		<li><?php echo $html->link(__('编辑', true), array('action' => 'edit', $leagueNotice['LeagueNotice']['id'])); ?> </li>
		<li><?php echo $html->link(__('删除', true), array('action' => 'delete', $leagueNotice['LeagueNotice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $leagueNotice['LeagueNotice']['id'])); ?> </li>
		<li><?php echo $html->link(__('通知列表', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('发通知', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('列出社团', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('创建新社团', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
