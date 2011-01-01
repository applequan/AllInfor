<?php 
/* SVN FILE: $Id$ */
/* UserclassesController Test cases generated on: 2010-12-08 08:58:23 : 1291798703*/
App::import('Controller', 'Userclasses');

class TestUserclasses extends UserclassesController {
	var $autoRender = false;
}

class UserclassesControllerTest extends CakeTestCase {
	var $Userclasses = null;

	function startTest() {
		$this->Userclasses = new TestUserclasses();
		$this->Userclasses->constructClasses();
	}

	function testUserclassesControllerInstance() {
		$this->assertTrue(is_a($this->Userclasses, 'UserclassesController'));
	}

	function endTest() {
		unset($this->Userclasses);
	}
}
?>