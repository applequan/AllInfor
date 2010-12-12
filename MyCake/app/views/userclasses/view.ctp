<div class="userclasses view">
<h2><?php  __('Userclass');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userclass['Userclass']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userclass['Userclass']['cName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('School'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userclass['Userclass']['school']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Department'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userclass['Userclass']['department']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userclass['Userclass']['grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userclass['Userclass']['discription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($userclass['User']['id'], array('controller' => 'users', 'action' => 'view', $userclass['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Userclass', true), array('action' => 'edit', $userclass['Userclass']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Userclass', true), array('action' => 'delete', $userclass['Userclass']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userclass['Userclass']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Userclasses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userclass', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Class Messages', true), array('controller' => 'class_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Class Message', true), array('controller' => 'class_messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Class Messages');?></h3>
	<?php if (!empty($userclass['ClassMessage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('NName'); ?></th>
		<th><?php __('Pubdate'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Userclass Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userclass['ClassMessage'] as $classMessage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $classMessage['id'];?></td>
			<td><?php echo $classMessage['nName'];?></td>
			<td><?php echo $classMessage['pubdate'];?></td>
			<td><?php echo $classMessage['content'];?></td>
			<td><?php echo $classMessage['userclass_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'class_messages', 'action' => 'view', $classMessage['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'class_messages', 'action' => 'edit', $classMessage['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'class_messages', 'action' => 'delete', $classMessage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $classMessage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Class Message', true), array('controller' => 'class_messages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
