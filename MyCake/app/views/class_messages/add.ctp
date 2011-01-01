<div class="classMessages form">
<?php echo $form->create('ClassMessage');?>
	<fieldset>
 		<legend><?php __('Add ClassMessage');?></legend>
	<?php
		echo $form->input('nName');
		echo $form->input('pubdate');
		echo $form->input('content');
		//echo $form->input('userclass_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List ClassMessages', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Userclasses', true), array('controller' => 'userclasses', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userclass', true), array('controller' => 'userclasses', 'action' => 'add')); ?> </li>
	</ul>
</div>
