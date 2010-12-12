<?php
class UserclassesController extends AppController {

	var $name = 'Userclasses';
	var $helpers = array('Html', 'Form');
	var $components    = array('Cookie');

	function index() {
		$this->Userclass->recursive = 0;
		$this->set('userclasses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Userclass.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('userclass', $this->Userclass->read(null, $id));
		$this->Cookie->write('OrganizationId', $id, false, '1 hour');
	}

	function add() {
		if (!empty($this->data)) {
			$this->Userclass->create();
			$this->data['Userclass']['user_id'] = $this->getCurrentUserId();
			if ($this->Userclass->save($this->data)) {
				$this->Session->setFlash(__('The Userclass has been saved', true));
				$this->redirect('/users/view/'.$this->getCurrentUserId());
			} else {
				$this->Session->setFlash(__('The Userclass could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Userclass->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Userclass', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
		if (!empty($this->data)) {
			if ($this->Userclass->save($this->data)) {
				$this->Session->setFlash(__('The Userclass has been saved', true));
				$this->redirect('/users/view/'.$this->getCurrentUserId());
			} else {
				$this->Session->setFlash(__('The Userclass could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Userclass->read(null, $id);
		}
		$users = $this->Userclass->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Userclass', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
		if ($this->Userclass->del($id)) {
			$this->Session->setFlash(__('Userclass deleted', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
	}

}
?>