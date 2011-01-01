<?php 
/* SVN FILE: $Id$ */
/* ClassMessagesController Test cases generated on: 2010-12-08 08:57:37 : 1291798657*/
App::import('Controller', 'ClassMessages');

class TestClassMessages extends ClassMessagesController {
	var $autoRender = false;
}

class ClassMessagesControllerTest extends CakeTestCase {
	var $ClassMessages = null;

	function startTest() {
		$this->ClassMessages = new TestClassMessages();
		$this->ClassMessages->constructClasses();
	}

	function testClassMessagesControllerInstance() {
		$this->assertTrue(is_a($this->ClassMessages, 'ClassMessagesController'));
	}

	function endTest() {
		unset($this->ClassMessages);
	}
}
?>