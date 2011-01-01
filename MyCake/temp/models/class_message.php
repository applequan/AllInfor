<?php
class ClassMessage extends AppModel {

	var $name = 'ClassMessage';
	var $validate = array(
		'nName' => array('notempty'),
		'class_users_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'ClassUsers' => array(
			'className' => 'ClassUsers',
			'foreignKey' => 'class_users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>