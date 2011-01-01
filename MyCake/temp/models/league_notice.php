<?php
class LeagueNotice extends AppModel {

	var $name = 'LeagueNotice';
	var $validate = array(
		'nName' => array('notempty'),
		'league_user_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'LeagueUser' => array(
			'className' => 'LeagueUser',
			'foreignKey' => 'league_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>