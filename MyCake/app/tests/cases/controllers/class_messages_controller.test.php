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
	
	/*function testEdit() {
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
	} */

	function endTest() {
		unset($this->ClassMessages);
	}
}
?>