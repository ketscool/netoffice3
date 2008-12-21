<?php
class UploadRevisionsController extends AppController {

	var $name = 'UploadRevisions';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->UploadRevision->recursive = 0;
		$this->set('uploadRevisions', $this->UploadRevision->findAll());
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Upload Revision.');
			$this->redirect('/upload_revision/index');
		}
		$this->set('uploadRevision', $this->UploadRevision->read(null, $id));
	}

	function add() {
		if(empty($this->data)) {
			$this->render();
		} else {
			$this->cleanUpFields();
			if($this->UploadRevision->save($this->data)) {
				$this->Session->setFlash('The Upload Revision has been saved');
				$this->redirect('/upload_revision/index');
			} else {
				$this->Session->setFlash('Please correct errors below.');
			}
		}
	}

	function edit($id = null) {
		if(empty($this->data)) {
			if(!$id) {
				$this->Session->setFlash('Invalid id for Upload Revision');
				$this->redirect('/upload_revision/index');
			}
			$this->data = $this->UploadRevision->read(null, $id);
		} else {
			$this->cleanUpFields();
			if($this->UploadRevision->save($this->data)) {
				$this->Session->setFlash('The UploadRevision has been saved');
				$this->redirect('/upload_revision/index');
			} else {
				$this->Session->setFlash('Please correct errors below.');
			}
		}
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Upload Revision');
			$this->redirect('/upload_revision/index');
		}
		if($this->UploadRevision->del($id)) {
			$this->Session->setFlash('The Upload Revision deleted: id '.$id.'');
			$this->redirect('/upload_revision/index');
		}
	}

}
?>