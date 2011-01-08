<?php 
/* SVN FILE: $Id$ */
/* AdministratorsController Test cases generated on: 2010-12-07 02:49:14 : 1291690154*/
App::import('Controller', 'Administrators');

class TestAdministrators extends AdministratorsController {
	var $name = 'Administrators';
	var $autoRender = false;
	
	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdministratorsControllerTest extends CakeTestCase {
	var $Administrators = null;
	//var $fixtures = array('app.administrator');

	function startTest() {
		$this->Administrators = new TestAdministrators();
		$this->Administrators->constructClasses();
	}

	function testAdministratorsControllerInstance() {
	
		$this->assertTrue(is_a($this->Administrators, 'AdministratorsController'));
	}
	
	function testEdit() {
	    //$results = $this->Administrator->read(null, 1);
		//debug($result); 
		$this->Administrator->data=array('Administrator' => array(
			'id'  => 1,
			'aName'  => 'fys ',
			'password'  => 'fys ',
			'type'  => 'fys '
		));
		//$this->Administrators->edit();
		$results = $this->Administrators->Administrator->read(null, 1);
		$this->assertEqual($results['Administrator']['aName'], 'fys ');
		//$this->assertEqual($this->Administrators->redirectUrl, array('action' => 'index'));
		$this->assertTrue(is_a($this->Administrators, 'AdministratorsController'));
	} 
	
	function testDelete() {
	  //$this->Administrators->add();
	   //$this->assertTrue($this->GroupTypes->Session->check('The Administrator could not be saved. Please, try again.'));
	   $this->assertTrue(is_a($this->Administrators, 'AdministratorsController'));
	}

	function endTest() {
		unset($this->Administrators);
	}
}
?>