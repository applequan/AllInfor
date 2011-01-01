<?php 
/* SVN FILE: $Id$ */
/* LeagueNotice Fixture generated on: 2010-12-07 02:49:17 : 1291690157*/

class LeagueNoticeFixture extends CakeTestFixture {
	var $name = 'LeagueNotice';
	var $fields = array(
		'nName' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'pubdate' => array('type'=>'date', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'content' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'discription' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'userleague_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('nName', 'pubdate'), 'unique' => 1))
	);
	var $records = array(array(
		'nName'  => 'Lorem ipsum dolor ',
		'pubdate'  => '2010-12-07',
		'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'userleague_id'  => 1
	));
}
?>