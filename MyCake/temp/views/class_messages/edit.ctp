<div class="classMessages form">
<?php echo $form->create('ClassMessage');?>
	<fieldset>
 		<legend><?php __('Edit ClassMessage');?></legend>
	<?php
		echo $form->input('nName');
		echo $form->input('pubdate');
		echo $form->input('class_users_id');
		echo $form->input('content');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('ClassMessage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ClassMessage.id'))); ?></li>
		<li><?php echo $html->link(__('List ClassMessages', true), array('action' => 'index'));?></li>
	</ul>
</div>
