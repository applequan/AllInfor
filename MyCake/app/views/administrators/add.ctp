<div class="administrators form">
<?php echo $form->create('Administrator');?>
	<fieldset>
 		<legend><?php __('Add Administrator');?></legend>
	<?php
		echo $form->input('aName');
		echo $form->input('password');
		echo $form->input('type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Administrators', true), array('action' => 'index'));?></li>
	</ul>
</div>
