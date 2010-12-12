<div class="classUsers form">
<?php echo $form->create('ClassUser');?>
	<fieldset>
 		<legend><?php __('Edit ClassUser');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('cName');
		echo $form->input('school');
		echo $form->input('department');
		echo $form->input('grade');
		echo $form->input('discription');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('ClassUser.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ClassUser.id'))); ?></li>
		<li><?php echo $html->link(__('List ClassUsers', true), array('action' => 'index'));?></li>
	</ul>
</div>
