<div class="posters view">
<h2><?php  __('Poster');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Theme'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $poster['Poster']['theme']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PNum'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $poster['Poster']['pNum']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('PubDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $poster['Poster']['pubDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discription'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $poster['Poster']['discription']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ImageName'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $poster['Poster']['imageName']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('League User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $poster['Poster']['league_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Poster', true), array('action' => 'edit', $poster['Poster']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Poster', true), array('action' => 'delete', $poster['Poster']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $poster['Poster']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Posters', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Poster', true), array('action' => 'add')); ?> </li>
	</ul>
</div>