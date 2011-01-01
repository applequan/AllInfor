<?php
class LeagueNotice extends AppModel {

	var $name = 'LeagueNotice';
	var $validate = array(
		'userleague_id' => array('numeric'),
		'nName' => array('notempty')
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