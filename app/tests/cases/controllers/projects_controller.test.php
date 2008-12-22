<?php 
/* SVN FILE: $Id$ */
/* ProjectsController Test cases generated on: 2008-12-22 12:12:39 : 1229966019*/
App::import('Controller', 'Projects');

class TestProjects extends ProjectsController {
	var $autoRender = false;
}

class ProjectsControllerTest extends CakeTestCase {
	var $Projects = null;

	function setUp() {
		$this->Projects = new TestProjects();
		$this->Projects->constructClasses();
	}

	function testProjectsControllerInstance() {
		$this->assertTrue(is_a($this->Projects, 'ProjectsController'));
	}

	function tearDown() {
		unset($this->Projects);
	}
}
?>