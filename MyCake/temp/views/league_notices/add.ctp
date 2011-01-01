<div class="leagueNotices form">
<?php echo $form->create('LeagueNotice');?>
	<fieldset>
 		<legend><?php __('Add LeagueNotice');?></legend>
	<?php
		echo $form->input('nName');
		echo $form->input('pubdate');
		echo $form->input('content');
		echo $form->input('league_user_id');
		echo $form->input('discription');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List LeagueNotices', true), array('action' => 'index'));?></li>
	</ul>
</div>
