<?php 
/* SVN FILE: $Id$ */
/* User Test cases generated on: 2010-12-07 02:49:27 : 1291690167*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $User = null;
	var $fixtures = array('app.user');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function testUserInstance() {
		$this->assertTrue(is_a($this->User, 'User'));
	}

	function testUserFind() {
		$this->User->recursive = -1;
		$results = $this->User->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('User' => array(
			'name'  => 'Lorem ipsum dolor ',
			'password'  => 'Lorem ipsum dolor ',
			'role'  => 'Lorem ipsum dolor ',
			'id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>