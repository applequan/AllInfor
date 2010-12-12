<div class="leagueNotices form">
<?php echo $form->create('LeagueNotice');?>
	<fieldset>
 		<legend><?php __('Edit LeagueNotice');?></legend>
	<?php
		echo $form->input('content');
		echo $form->input('discription');
		echo $form->input('userleague_id');
		echo $form->input('id');
		echo $form->input('nName');
		echo $form->input('pubDate');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('LeagueNotice.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('LeagueNotice.id'))); ?></li>
		<li><?php echo $html->link(__('List LeagueNotices', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>
