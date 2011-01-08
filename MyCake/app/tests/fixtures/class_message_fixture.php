<?php 
/* SVN FILE: $Id$ */
/* ClassMessage Fixture generated on: 2010-12-07 02:49:15 : 1291690155*/

class ClassMessageFixture extends CakeTestFixture {
	var $name = 'ClassMessage';
	var $fields = array(
		'nName' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'pubdate' => array('type'=>'date', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'content' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'userclass_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('nName', 'pubdate'), 'unique' => 1))
	);
	var $records = array(
	array(
		'nName'  => 'Lorem ipsum dolor ',
		'pubdate'  => '2010-12-07',
		'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'userclass_id'  => 1
	),
	array(
		'nName'  => 'abc ',
		'pubdate'  => 'abc',
		'content'  => 'abcd',
		'userclass_id'  => 2
	),
	array(
		'nName'  => 'efg ',
		'pubdate'  => 'egf',
		'content'  => 'lum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'userclass_id'  => 3
	)
	);
	
}
?>