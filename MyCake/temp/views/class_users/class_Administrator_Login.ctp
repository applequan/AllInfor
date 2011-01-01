<div class="classUsers form">
<?php echo $form->create('ClassUsers');?>
	<fieldset>
 		<legend><?php __('Adminstrar');?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end('OK');?>
	
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('OK', true), array('action' => 'classAdminstratorLogin'));?></li>
	</ul>
</div>
