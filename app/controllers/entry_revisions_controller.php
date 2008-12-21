<?php
class EntryRevisionsController extends AppController {

	var $name = 'EntryRevisions';
	var $helpers = array('Html', 'Form' );

	function index() {
		$this->EntryRevision->recursive = 0;
		$this->set('entryRevisions', $this->EntryRevision->findAll());
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Entry Revision.');
			$this->redirect('/entry_revision/index');
		}
		$this->set('entryRevision', $this->EntryRevision->read(null, $id));
	}

	function add() {
		if(empty($this->data)) {
			$this->render();
		} else {
			$this->cleanUpFields();
			if($this->EntryRevision->save($this->data)) {
				$this->Session->setFlash('The Entry Revision has been saved');
				$this->redirect('/entry_revision/index');
			} else {
				$this->Session->setFlash('Please correct errors below.');
			}
		}
	}

	function edit($id = null) {
		if(empty($this->data)) {
			if(!$id) {
				$this->Session->setFlash('Invalid id for Entry Revision');
				$this->redirect('/entry_revision/index');
			}
			$this->data = $this->EntryRevision->read(null, $id);
		} else {
			$this->cleanUpFields();
			if($this->EntryRevision->save($this->data)) {
				$this->Session->setFlash('The EntryRevision has been saved');
				$this->redirect('/entry_revision/index');
			} else {
				$this->Session->setFlash('Please correct errors below.');
			}
		}
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Entry Revision');
			$this->redirect('/entry_revision/index');
		}
		if($this->EntryRevision->del($id)) {
			$this->Session->setFlash('The Entry Revision deleted: id '.$id.'');
			$this->redirect('/entry_revision/index');
		}
	}

}
?>