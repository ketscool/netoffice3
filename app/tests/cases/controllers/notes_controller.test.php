<?php 
/* SVN FILE: $Id$ */
/* NotesController Test cases generated on: 2008-12-22 12:12:16 : 1229965996*/
App::import('Controller', 'Notes');

class TestNotes extends NotesController {
	var $autoRender = false;
}

class NotesControllerTest extends CakeTestCase {
	var $Notes = null;

	function setUp() {
		$this->Notes = new TestNotes();
		$this->Notes->constructClasses();
	}

	function testNotesControllerInstance() {
		$this->assertTrue(is_a($this->Notes, 'NotesController'));
	}

	function tearDown() {
		unset($this->Notes);
	}
}
?>