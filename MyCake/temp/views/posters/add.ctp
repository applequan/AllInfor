<div class="posters form">
<?php echo $form->create('Poster');?>
	<fieldset>
 		<legend><?php __('Add Poster');?></legend>
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
		<li><?php echo $html->link(__('List Posters', true), array('action' => 'index'));?></li>
	</ul>
</div>
