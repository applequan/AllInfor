<div class="administrators form">
<?php echo $form->create('Administrator');?>
	<fieldset>
 		<legend><?php __('Edit Administrator');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('aName');
		echo $form->input('password');
		echo $form->input('type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Administrator.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Administrator.id'))); ?></li>
		<li><?php echo $html->link(__('List Administrators', true), array('action' => 'index'));?></li>
	</ul>
</div>
