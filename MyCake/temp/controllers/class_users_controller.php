<?php
class ClassUsersController extends AppController {

	var $name = 'ClassUsers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ClassUser->recursive = 0;
		$this->set('classUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ClassUser.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('classUser', $this->ClassUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ClassUser->create();
			if ($this->ClassUser->save($this->data)) {
				$this->Session->setFlash(__('The ClassUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ClassUser could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ClassUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ClassUser->save($this->data)) {
				$this->Session->setFlash(__('The ClassUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ClassUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ClassUser->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ClassUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ClassUser->del($id)) {
			$this->Session->setFlash(__('ClassUser deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function classAdministratorLogin($id = null) {
		if (!empty($this->data))
			$this->redirect(array('action'=>'displayError', 1));
	}
	
	function displayError($type) {
		$this->set('type', $type);
	}
	
	
}		
?>