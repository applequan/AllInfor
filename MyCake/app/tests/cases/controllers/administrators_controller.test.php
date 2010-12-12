<?php 
/* SVN FILE: $Id$ */
/* AdministratorsController Test cases generated on: 2010-12-07 02:49:14 : 1291690154*/
App::import('Controller', 'Administrators');

class TestAdministrators extends AdministratorsController {
	var $autoRender = false;
}

class AdministratorsControllerTest extends CakeTestCase {
	var $Administrators = null;

	function startTest() {
		$this->Administrators = new TestAdministrators();
		$this->Administrators->constructClasses();
	}

	function testAdministratorsControllerInstance() {
		$this->assertTrue(is_a($this->Administrators, 'AdministratorsController'));
	}

	function endTest() {
		unset($this->Administrators);
	}
}
?>