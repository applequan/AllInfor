<div class="posters form">
<?php echo $form->create('Poster');?>
	<fieldset>
 		<legend><?php __('Edit Poster');?></legend>
	<?php
		echo $form->input('theme');
		echo $form->input('pNum');
		echo $form->input('pubDate');
		echo $form->input('discription');
		echo $form->input('imageName');
		echo $form->input('league_user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Poster.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Poster.id'))); ?></li>
		<li><?php echo $html->link(__('List Posters', true), array('action' => 'index'));?></li>
	</ul>
</div>
