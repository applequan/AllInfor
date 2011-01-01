<?php 
/* SVN FILE: $Id$ */
/* Userclass Fixture generated on: 2010-12-07 02:49:20 : 1291690160*/

class UserclassFixture extends CakeTestFixture {
	var $name = 'Userclass';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'cName' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'school' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'department' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'grade' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'discription' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'cName'  => 'Lorem ipsum dolor ',
		'school'  => 'Lorem ipsum dolor ',
		'department'  => 'Lorem ipsum dolor ',
		'grade'  => 'Lorem ip',
		'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'user_id'  => 1
	));
}
?>