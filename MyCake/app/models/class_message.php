<?php
class ClassMessage extends AppModel {

	var $name = 'ClassMessage';
	var $validate = array(
		'nName' => array('notempty'),
		'userclass_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Userclass' => array(
			'className' => 'Userclass',
			'foreignKey' => 'userclass_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>