<div class="administrators view">
<h2><?php  __('Administrator');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $administrator['Administrator']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('AName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $administrator['Administrator']['aName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $administrator['Administrator']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $administrator['Administrator']['type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Administrator', true), array('action' => 'edit', $administrator['Administrator']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Administrator', true), array('action' => 'delete', $administrator['Administrator']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $administrator['Administrator']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Administrators', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Administrator', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
