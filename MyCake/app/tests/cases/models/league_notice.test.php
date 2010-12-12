<?php 
/* SVN FILE: $Id$ */
/* LeagueNotice Test cases generated on: 2010-12-07 02:49:17 : 1291690157*/
App::import('Model', 'LeagueNotice');

class LeagueNoticeTestCase extends CakeTestCase {
	var $LeagueNotice = null;
	var $fixtures = array('app.league_notice');

	function startTest() {
		$this->LeagueNotice =& ClassRegistry::init('LeagueNotice');
	}

	function testLeagueNoticeInstance() {
		$this->assertTrue(is_a($this->LeagueNotice, 'LeagueNotice'));
	}

	function testLeagueNoticeFind() {
		$this->LeagueNotice->recursive = -1;
		$results = $this->LeagueNotice->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('LeagueNotice' => array(
			'nName'  => 'Lorem ipsum dolor ',
			'pubdate'  => '2010-12-07',
			'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'userleague_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>