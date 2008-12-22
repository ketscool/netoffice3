<?php
class EntriesController extends AppController {

	var $name = 'Entries';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Entry->recursive = 0;
		$this->set('entries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Entry.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('entry', $this->Entry->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Entry->create();
			if ($this->Entry->save($this->data)) {
				$this->Session->setFlash(__('The Entry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Entry could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Entry->Project->find('list');
		$this->set(compact('projects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Entry', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Entry->save($this->data)) {
				$this->Session->setFlash(__('The Entry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Entry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Entry->read(null, $id);
		}
		$projects = $this->Entry->Project->find('list');
		$this->set(compact('projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Entry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Entry->del($id)) {
			$this->Session->setFlash(__('Entry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>