<?php 
/* SVN FILE: $Id$ */
/* Poster Test cases generated on: 2010-12-07 02:49:19 : 1291690159*/
App::import('Model', 'Poster');

class PosterTestCase extends CakeTestCase {
	var $Poster = null;
	var $fixtures = array('app.poster','app.user','app.userclass','app.class_message','app.userleague','app.league_notice');

	function startTest() {
		$this->Poster =& ClassRegistry::init('Poster');
	}

	function testPosterInstance() {
		$this->assertTrue(is_a($this->Poster, 'Poster'));
	}

	/*function testPosterFind() {
		$this->Poster->recursive = -1;
		$results = $this->Poster->find('first'+1);
		//$results = $this->Administrator->read(null, 2);
		$this->assertTrue(!empty($results));

		$expected = array('Poster' => array(
			'theme'  => 'fys',
		'pNum'  => 2,
		'pubDate'  => '2010-12-25',
		'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'imageName'  => 'Lorem ipsum dolor sit ametliquet',
		'userleague_id'  => 2
		));
		$this->assertEqual($results, $expected);
	} */
	function testPosterNameLength() {
		$this->Poster->recursive = -1;
		$results = $this->Poster->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Poster' => array(
			'theme'  => 'Lorem ipsum dolor sit amet',
			'pNum'  => 1,
			'pubDate'  => '2010-12-07',
			'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'imageName'  => 'Lorem ipsum dolor sit ametliq',
			'userleague_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
	
}
?>