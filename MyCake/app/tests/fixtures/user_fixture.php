<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2010-12-07 02:49:27 : 1291690167*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $fields = array(
		'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'role' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => array('name', 'id'), 'unique' => 1))
	);
	var $records = array(array(
		'name'  => 'Lorem ipsum dolor ',
		'password'  => 'Lorem ipsum dolor ',
		'role'  => 'Lorem ipsum dolor ',
		'id'  => 1
	));
}
?>