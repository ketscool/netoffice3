<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Project.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The Project has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Project could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Project->User->find('list');
		$notes = $this->Project->Note->find('list');
		$uploads = $this->Project->Upload->find('list');
		$entries = $this->Project->Entry->find('list');
		$clients = $this->Project->Client->find('list');
		$services = $this->Project->Service->find('list');
		$this->set(compact('users', 'notes', 'uploads', 'entries', 'clients', 'services'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Project', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The Project has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Project could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$users = $this->Project->User->find('list');
		$notes = $this->Project->Note->find('list');
		$uploads = $this->Project->Upload->find('list');
		$entries = $this->Project->Entry->find('list');
		$clients = $this->Project->Client->find('list');
		$services = $this->Project->Service->find('list');
		$this->set(compact('users','notes','uploads','entries','clients','services'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Project', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Project->del($id)) {
			$this->Session->setFlash(__('Project deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>