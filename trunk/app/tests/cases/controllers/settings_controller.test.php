<?php 
/* SVN FILE: $Id$ */
/* SettingsController Test cases generated on: 2008-12-22 12:12:59 : 1229965499*/
App::import('Controller', 'Settings');

class TestSettings extends SettingsController {
	var $autoRender = false;
}

class SettingsControllerTest extends CakeTestCase {
	var $Settings = null;

	function setUp() {
		$this->Settings = new TestSettings();
		$this->Settings->constructClasses();
	}

	function testSettingsControllerInstance() {
		$this->assertTrue(is_a($this->Settings, 'SettingsController'));
	}

	function tearDown() {
		unset($this->Settings);
	}
}
?>