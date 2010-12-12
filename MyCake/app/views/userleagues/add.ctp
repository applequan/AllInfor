<div class="userleagues form">
<?php echo $form->create('Userleague');?>
	<fieldset>
 		<legend><?php __('Add Userleague');?></legend>
	<?php
		echo $form->input('lName');
		echo $form->input('discription');
		echo $form->input('publicKey');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Userleagues', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List League Notices', true), array('controller' => 'league_notices', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League Notice', true), array('controller' => 'league_notices', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Posters', true), array('controller' => 'posters', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Poster', true), array('controller' => 'posters', 'action' => 'add')); ?> </li>
	</ul>
</div>
