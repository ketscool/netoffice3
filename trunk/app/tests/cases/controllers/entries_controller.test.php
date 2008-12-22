<?php 
/* SVN FILE: $Id$ */
/* EntriesController Test cases generated on: 2008-12-22 12:12:01 : 1229965921*/
App::import('Controller', 'Entries');

class TestEntries extends EntriesController {
	var $autoRender = false;
}

class EntriesControllerTest extends CakeTestCase {
	var $Entries = null;

	function setUp() {
		$this->Entries = new TestEntries();
		$this->Entries->constructClasses();
	}

	function testEntriesControllerInstance() {
		$this->assertTrue(is_a($this->Entries, 'EntriesController'));
	}

	function tearDown() {
		unset($this->Entries);
	}
}
?>