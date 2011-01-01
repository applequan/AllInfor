<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
	</dl>
</div>


<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Userclasses', true), array('controller' => 'userclasses', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userclass', true), array('controller' => 'userclasses', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Userclasses');?></h3>
	<?php if (!empty($user['Userclass'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('CName'); ?></th>
		<th><?php __('School'); ?></th>
		<th><?php __('Department'); ?></th>
		<th><?php __('Grade'); ?></th>
		<th><?php __('Discription'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Userclass'] as $userclass):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userclass['id'];?></td>
			<td><?php echo $userclass['cName'];?></td>
			<td><?php echo $userclass['school'];?></td>
			<td><?php echo $userclass['department'];?></td>
			<td><?php echo $userclass['grade'];?></td>
			<td><?php echo $userclass['discription'];?></td>
			<td><?php echo $userclass['user_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'userclasses', 'action' => 'view', $userclass['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'userclasses', 'action' => 'edit', $userclass['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'userclasses', 'action' => 'delete', $userclass['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userclass['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Userclass', true), array('controller' => 'userclasses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Userleagues');?></h3>
	<?php if (!empty($user['Userleague'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('LName'); ?></th>
		<th><?php __('Discription'); ?></th>
		<th><?php __('PublicKey'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Userleague'] as $userleague):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userleague['id'];?></td>
			<td><?php echo $userleague['lName'];?></td>
			<td><?php echo $userleague['discription'];?></td>
			<td><?php echo $userleague['publicKey'];?></td>
			<td><?php echo $userleague['user_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'userleagues', 'action' => 'view', $userleague['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'userleagues', 'action' => 'edit', $userleague['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'userleagues', 'action' => 'delete', $userleague['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userleague['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
