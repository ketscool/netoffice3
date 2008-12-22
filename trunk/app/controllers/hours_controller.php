<?php
class HoursController extends AppController {

	var $name = 'Hours';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Hour->recursive = 0;
		$this->set('hours', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Hour.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('hour', $this->Hour->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Hour->create();
			if ($this->Hour->save($this->data)) {
				$this->Session->setFlash(__('The Hour has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Hour could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Hour->Project->find('list');
		$users = $this->Hour->User->find('list');
		$this->set(compact('projects', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Hour', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Hour->save($this->data)) {
				$this->Session->setFlash(__('The Hour has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Hour could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Hour->read(null, $id);
		}
		$projects = $this->Hour->Project->find('list');
		$users = $this->Hour->User->find('list');
		$this->set(compact('projects','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Hour', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Hour->del($id)) {
			$this->Session->setFlash(__('Hour deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>