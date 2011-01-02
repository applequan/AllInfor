<?php 
/* SVN FILE: $Id$ */
/* Administrator Fixture generated on: 2010-12-07 02:49:14 : 1291690154*/

class AdministratorFixture extends CakeTestFixture {
	var $name = 'Administrator';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'aName' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index'),
		'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'type' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'aName' => array('column' => 'aName', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'aName'  => 'Lorem ipsum dolo ',
		'password'  => 'Lorem ipsum dolor ',
		'type'  => 'Lorem ipsum dolor '
	));
}
?>