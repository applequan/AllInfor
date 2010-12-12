<?php 
/* SVN FILE: $Id$ */
/* Userleague Fixture generated on: 2010-12-07 02:49:21 : 1291690161*/

class UserleagueFixture extends CakeTestFixture {
	var $name = 'Userleague';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'lName' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'discription' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'publicKey' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'lName'  => 'Lorem ipsum dolor ',
		'discription'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'publicKey'  => 'Lorem ipsum dolor ',
		'user_id'  => 1
	));
}
?>