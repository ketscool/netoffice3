<?php 
/* SVN FILE: $Id$ */
/* HoursController Test cases generated on: 2008-12-22 12:12:55 : 1229965975*/
App::import('Controller', 'Hours');

class TestHours extends HoursController {
	var $autoRender = false;
}

class HoursControllerTest extends CakeTestCase {
	var $Hours = null;

	function setUp() {
		$this->Hours = new TestHours();
		$this->Hours->constructClasses();
	}

	function testHoursControllerInstance() {
		$this->assertTrue(is_a($this->Hours, 'HoursController'));
	}

	function tearDown() {
		unset($this->Hours);
	}
}
?>