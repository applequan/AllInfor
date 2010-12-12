<div class="leagueUsers form">
<?php echo $form->create('LeagueUser');?>
	<fieldset>
 		<legend><?php __('Edit LeagueUser');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('usename');
		echo $form->input('password');
		echo $form->input('lName');
		echo $form->input('discription');
		echo $form->input('publicKey');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('LeagueUser.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('LeagueUser.id'))); ?></li>
		<li><?php echo $html->link(__('List LeagueUsers', true), array('action' => 'index'));?></li>
	</ul>
</div>
