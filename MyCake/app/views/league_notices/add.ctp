<div class="leagueNotices form">
<?php echo $form->create('LeagueNotice');?>
	<fieldset>
 		<legend><?php __('Add LeagueNotice');?></legend>
	<?php
		echo $form->input('content');
		echo $form->input('discription');
		echo $form->input('userleague_id');
		echo $form->input('nName');
		echo $form->input('pubDate');
		echo $form->input('auth');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List LeagueNotices', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
