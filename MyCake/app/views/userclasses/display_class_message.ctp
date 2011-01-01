<div class="userclasses DisplayClassMessage">
<h2><?php 
	echo $userclass['Userclass']['cName'];
?></h2>
	
<div class="related">
	<h3><?php __('Class Messages');?></h3>
	<?php if (!empty($userclass['ClassMessage'])):?>
	<table cellpadding = "0" cellspacing = "0"style="width:70%">
	<tr>
		<th><?php __('名称/标题'); ?></th>
		
		<th><?php __('发布日期'); ?></th>
		<th><?php __('内容概述/描述'); ?></th>
		<th><?php __('操作'); ?></th>
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
			<td><?php echo $classMessage['nName'];?></td>
			<td><?php echo $classMessage['pubdate'];?></td>
			<td><?php echo substr($classMessage['content'],0,20);?></td>
			<td class="actions">
				<?php echo "--".$html->link(__('查看详细', true),array('controller' => 'class_messages', 'action' => 'view', $classMessage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
