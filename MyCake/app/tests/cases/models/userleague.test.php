<?php 
/* SVN FILE: $Id$ */
/* Userleague Test cases generated on: 2010-12-07 02:49:21 : 1291690161*/
App::import('Model', 'Userleague');

class UserleagueTestCase extends CakeTestCase {
	var $Userleague = null;
	var $fixtures = array('app.userleague');

	function startTest() {
		$this->Userleague =& ClassRegistry::init('Userleague');
	}

	function testUserleagueInstance() {
		$this->assertTrue(is_a($this->Userleague, 'Userleague'));
	}

	function testUserleagueFind() {
		$this->Userleague->recursive = -1;
		$results = $this->Userleague->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Userleague' => array(
			'id'  => 1,
			'lName'  => 'Lorem ipsum dolor ',
			'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'publicKey'  => 'Lorem ipsum dolor ',
			'user_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>