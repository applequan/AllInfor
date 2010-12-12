<?php 
/* SVN FILE: $Id$ */
/* Administrator Test cases generated on: 2010-12-07 02:49:14 : 1291690154*/
App::import('Model', 'Administrator');

class AdministratorTestCase extends CakeTestCase {
	var $Administrator = null;
	var $fixtures = array('app.administrator');

	function startTest() {
		$this->Administrator =& ClassRegistry::init('Administrator');
	}

	function testAdministratorInstance() {
		$this->assertTrue(is_a($this->Administrator, 'Administrator'));
	}

	function testAdministratorFind() {
		$this->Administrator->recursive = -1;
		$results = $this->Administrator->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Administrator' => array(
			'id'  => 1,
			'aName'  => 'Lorem ipsum dolor ',
			'password'  => 'Lorem ipsum dolor ',
			'type'  => 'Lorem ipsum dolor '
		));
		$this->assertEqual($results, $expected);
	}
}
?>