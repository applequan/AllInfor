<?php
class ClassUser extends AppModel {

	var $name = 'ClassUser';
	var $validate = array(
		'username' => array('notempty'),
		'password' => array('notempty'),
		'cName' => array('notempty'),
		'school' => array('notempty'),
		'department' => array('notempty'),
		'grade' => array('notempty')
	);

}
?>