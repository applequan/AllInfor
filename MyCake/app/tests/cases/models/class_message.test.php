<?php 
/* SVN FILE: $Id$ */
/* ClassMessage Test cases generated on: 2010-12-07 02:49:15 : 1291690155*/
App::import('Model', 'ClassMessage');

class ClassMessageTestCase extends CakeTestCase {
	var $ClassMessage = null;
	var $fixtures = array('app.class_message');

	function startTest() {
		$this->ClassMessage =& ClassRegistry::init('ClassMessage');
	}

	function testClassMessageInstance() {
		$this->assertTrue(is_a($this->ClassMessage, 'ClassMessage'));
	}

	function testClassMessageFind() {
		$this->ClassMessage->recursive = -1;
		$results = $this->ClassMessage->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ClassMessage' => array(
			'nName'  => 'Lorem ipsum dolor ',
			'pubdate'  => '2010-12-07',
			'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'userclass_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>