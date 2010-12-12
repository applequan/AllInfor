<?php
class Poster extends AppModel {

	var $name = 'Poster';
	var $validate = array(
		'theme' => array('notempty'),
		'imageName' => array('notempty'),
		'userleague_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Userleague' => array(
			'className' => 'Userleague',
			'foreignKey' => 'userleague_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>