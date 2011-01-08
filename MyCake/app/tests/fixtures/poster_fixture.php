<?php 
/* SVN FILE: $Id$ */
/* Poster Fixture generated on: 2010-12-07 02:49:19 : 1291690159*/

class PosterFixture extends CakeTestFixture {
	var $name = 'Poster';
	var $fields = array(
		'theme' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 30),
		'pNum' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'pubDate' => array('type'=>'date', 'null' => false, 'default' => NULL),
		'discription' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'imageName' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 30),
		'userleague_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'pNum', 'unique' => 1))
	);
	var $records = array(
	array(
		'theme'  => 'Lorem ipsum dolor sit amet',
		'pNum'  => 1,
		'pubDate'  => '2010-12-07',
		'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'imageName'  => 'Lorem ipsum dolor sit ametliq',
		'userleague_id'  => 1
	),
	array(
		'theme'  => 'fys',
		'pNum'  => 2,
		'pubDate'  => '2010-12-25',
		'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'imageName'  => 'Lorem ipsum dolor sit ametliq',
		'userleague_id'  => 2
	)
	);
}
?>