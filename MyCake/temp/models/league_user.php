<?php
class LeagueUser extends AppModel {

	var $name = 'LeagueUser';
	var $validate = array(
		'usename' => array('notempty'),
		'password' => array('notempty'),
		'lName' => array('notempty'),
		'publicKey' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'LeagueNotice' => array(
			'className' => 'LeagueNotice',
			'foreignKey' => 'league_user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Poster' => array(
			'className' => 'Poster',
			'foreignKey' => 'league_user_id',
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