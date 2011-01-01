<div class="classMessages form">
<?php echo $form->create('ClassMessage');?>
	<fieldset>
 		<legend><?php __('Add ClassMessage');?></legend>
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
		<li><?php echo $html->link(__('List ClassMessages', true), array('action' => 'index'));?></li>
	</ul>
</div>
