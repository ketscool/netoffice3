<?php 
/* SVN FILE: $Id$ */
/* UploadsController Test cases generated on: 2008-12-22 12:12:27 : 1229966067*/
App::import('Controller', 'Uploads');

class TestUploads extends UploadsController {
	var $autoRender = false;
}

class UploadsControllerTest extends CakeTestCase {
	var $Uploads = null;

	function setUp() {
		$this->Uploads = new TestUploads();
		$this->Uploads->constructClasses();
	}

	function testUploadsControllerInstance() {
		$this->assertTrue(is_a($this->Uploads, 'UploadsController'));
	}

	function tearDown() {
		unset($this->Uploads);
	}
}
?>