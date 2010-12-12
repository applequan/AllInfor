<?php 
	if ($error)
	echo 'The login credentials you supplied could not be recognized. Please try again.'; 
?> 

<div id="content" class="narrowcolumn">
<div><h2>User Login</h2></div>
<div class="post">
<?php
	
    echo $form->create('User', array('action' => 'login'));
    echo "<fieldset class=\"login\">";
	echo $form->input('username', array('label' => 'UserName: '));
	echo $form->input('password', array('label' => 'Password: '));
    echo $form->submit(__('Login', true), array('class' => 'comment-button', 'div' => false));
    echo "</fieldset>";
?>
</div>
</div>

</div>