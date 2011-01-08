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
		//$results = $this->Administrator->read(null, 1);
		$this->assertTrue(!empty($results));

		$expected = array('Administrator' => array(
			'id'  => 1,
			'aName'  => 'fys ',
			'password'  => 'fys ',
			'type'  => 'fys '
		));
		$this->assertEqual($results, $expected);
	}
	
	function testAdministratorFind2() {
		$this->Administrator->recursive = -1;
		$results = $this->Administrator->read(null, 2);
		$this->assertTrue(!empty($results));

		$expected = array('Administrator' => array(
			'id'  => 2,
			'aName'  => 'quan ',
			'password'  => 'quan ',
			'type'  => 'quan '
		));
		debug($results);
		$this->assertEqual($results, $expected);
	}
	
	function testAdministratorFind3() {
		$this->Administrator->recursive = -1;
		//$results = $this->Administrator->find('first');
		$results = $this->Administrator->read(null, 3);
		$this->assertTrue(!empty($results));

		$expected = array('Administrator' => array(
			'id'  => 3,
			'aName'  => 'laitao ',
			'password'  => 'laitao ',
			'type'  => 'laitao '
		));
		$this->assertEqual($results, $expected);
	}
	function testAdministratorFind4() {
		$this->Administrator->recursive = -1;
		$results = $this->Administrator->find('first');
		//$results = $this->Administrator->read(null, 1);
		$this->assertTrue(!empty($results));

		$expected = array('Administrator' => array(
			'id'  => 3,
			'aName'  => 'laitao ',
			'password'  => 'laitao ',
			'type'  => 'laitao '
		));
		$this->assertEqual($results, $expected);
	}
}
?>