<?php
class NotesController extends AppController {

	var $name = 'Notes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Note->recursive = 0;
		$this->set('notes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Note.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('note', $this->Note->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Note->create();
			if ($this->Note->save($this->data)) {
				$this->Session->setFlash(__('The Note has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Note could not be saved. Please, try again.', true));
			}
		}
		$clients = $this->Note->Client->find('list');
		$projects = $this->Note->Project->find('list');
		$tasks = $this->Note->Task->find('list');
		$users = $this->Note->User->find('list');
		$this->set(compact('clients', 'projects', 'tasks', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Note', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Note->save($this->data)) {
				$this->Session->setFlash(__('The Note has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Note could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Note->read(null, $id);
		}
		$clients = $this->Note->Client->find('list');
		$projects = $this->Note->Project->find('list');
		$tasks = $this->Note->Task->find('list');
		$users = $this->Note->User->find('list');
		$this->set(compact('clients','projects','tasks','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Note', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Note->del($id)) {
			$this->Session->setFlash(__('Note deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>