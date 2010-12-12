<?php 
/* SVN FILE: $Id$ */
/* Userclass Test cases generated on: 2010-12-07 02:49:20 : 1291690160*/
App::import('Model', 'Userclass');

class UserclassTestCase extends CakeTestCase {
	var $Userclass = null;
	var $fixtures = array('app.userclass');

	function startTest() {
		$this->Userclass =& ClassRegistry::init('Userclass');
	}

	function testUserclassInstance() {
		$this->assertTrue(is_a($this->Userclass, 'Userclass'));
	}

	function testUserclassFind() {
		$this->Userclass->recursive = -1;
		$results = $this->Userclass->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Userclass' => array(
			'id'  => 1,
			'cName'  => 'Lorem ipsum dolor ',
			'school'  => 'Lorem ipsum dolor ',
			'department'  => 'Lorem ipsum dolor ',
			'grade'  => 'Lorem ip',
			'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'user_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>