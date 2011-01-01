<?php 
/* SVN FILE: $Id$ */
/* UserleaguesController Test cases generated on: 2010-12-08 12:49:01 : 1291812541*/
App::import('Controller', 'Userleagues');

class TestUserleagues extends UserleaguesController {
	var $autoRender = false;
}

class UserleaguesControllerTest extends CakeTestCase {
	var $Userleagues = null;

	function startTest() {
		$this->Userleagues = new TestUserleagues();
		$this->Userleagues->constructClasses();
	}

	function testUserleaguesControllerInstance() {
		$this->assertTrue(is_a($this->Userleagues, 'UserleaguesController'));
	}

	function endTest() {
		unset($this->Userleagues);
	}
}
?>