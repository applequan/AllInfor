<?php
class Userclass extends AppModel {

	var $name = 'Userclass';
	var $validate = array(
		'cName' => array('notempty'),
		'school' => array('notempty'),
		'department' => array('notempty'),
		'grade' => array('notempty'),
		'user_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ClassMessage' => array(
			'className' => 'ClassMessage',
			'foreignKey' => 'userclass_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>