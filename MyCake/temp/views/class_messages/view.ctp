<div class="classMessages view">
<h2><?php  __('ClassMessage');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('NName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classMessage['ClassMessage']['nName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pubdate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classMessage['ClassMessage']['pubdate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Class Users Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classMessage['ClassMessage']['class_users_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $classMessage['ClassMessage']['content']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ClassMessage', true), array('action' => 'edit', $classMessage['ClassMessage']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ClassMessage', true), array('action' => 'delete', $classMessage['ClassMessage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classMessage['ClassMessage']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ClassMessages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New ClassMessage', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
