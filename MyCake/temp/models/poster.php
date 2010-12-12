<?php
class Poster extends AppModel {

	var $name = 'Poster';
	var $validate = array(
		'theme' => array('notempty'),
		'pNum' => array('numeric'),
		'imageName' => array('notempty'),
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