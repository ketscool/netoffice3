<?php 
/* SVN FILE: $Id$ */
/* TasksController Test cases generated on: 2008-12-22 12:12:05 : 1229966045*/
App::import('Controller', 'Tasks');

class TestTasks extends TasksController {
	var $autoRender = false;
}

class TasksControllerTest extends CakeTestCase {
	var $Tasks = null;

	function setUp() {
		$this->Tasks = new TestTasks();
		$this->Tasks->constructClasses();
	}

	function testTasksControllerInstance() {
		$this->assertTrue(is_a($this->Tasks, 'TasksController'));
	}

	function tearDown() {
		unset($this->Tasks);
	}
}
?>