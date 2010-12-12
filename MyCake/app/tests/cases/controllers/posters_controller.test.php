<?php 
/* SVN FILE: $Id$ */
/* PostersController Test cases generated on: 2010-12-08 12:48:45 : 1291812525*/
App::import('Controller', 'Posters');

class TestPosters extends PostersController {
	var $autoRender = false;
}

class PostersControllerTest extends CakeTestCase {
	var $Posters = null;

	function startTest() {
		$this->Posters = new TestPosters();
		$this->Posters->constructClasses();
	}

	function testPostersControllerInstance() {
		$this->assertTrue(is_a($this->Posters, 'PostersController'));
	}

	function endTest() {
		unset($this->Posters);
	}
}
?>