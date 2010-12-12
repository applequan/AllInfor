<?php
class Administrator extends AppModel {

	var $name = 'Administrator';
	var $validate = array(
		'aName' => array('notempty'),
		'password' => array('notempty'),
		'type' => array('notempty')
	);

}
?>