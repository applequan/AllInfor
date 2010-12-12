<?php 
/* SVN FILE: $Id$ */
/* LeagueNoticesController Test cases generated on: 2010-12-08 08:58:15 : 1291798695*/
App::import('Controller', 'LeagueNotices');

class TestLeagueNotices extends LeagueNoticesController {
	var $autoRender = false;
}

class LeagueNoticesControllerTest extends CakeTestCase {
	var $LeagueNotices = null;

	function startTest() {
		$this->LeagueNotices = new TestLeagueNotices();
		$this->LeagueNotices->constructClasses();
	}

	function testLeagueNoticesControllerInstance() {
		$this->assertTrue(is_a($this->LeagueNotices, 'LeagueNoticesController'));
	}

	function endTest() {
		unset($this->LeagueNotices);
	}
}
?>