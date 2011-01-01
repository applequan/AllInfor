<div class="classUsers form">
<?php echo $form->create('ClassUser');?>
	<fieldset>
 		<legend><?php __('Add ClassUser');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List ClassUsers', true), array('action' => 'index'));?></li>
	</ul>
</div>
