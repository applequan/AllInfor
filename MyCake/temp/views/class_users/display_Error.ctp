<div class="classUsers display_Error">
<h2><?php  __('Error');?></h2>
	<dl><?php 
		if ($type == 1)
			__('This user does not exist!');
		if ($type == 2)
			__('The password of this user is not correct! Please return and input again.');
		?>
	</dl>

