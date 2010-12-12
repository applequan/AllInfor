<div class="userclasses form">
<?php echo $form->create('Userclass');?>
	<fieldset>
 		<legend><?php __('Add Userclass');?></legend>
	<?php
		echo $form->input('cName');
		echo $form->input('school');
		echo $form->input('department');
		echo $form->input('grade');
		echo $form->input('discription');
		//echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Userclasses', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Class Messages', true), array('controller' => 'class_messages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Class Message', true), array('controller' => 'class_messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
