<?php
class AdministratorsController extends AppController {

	var $name = 'Administrators';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Administrator->recursive = 0;
		$this->set('administrators', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Administrator.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('administrator', $this->Administrator->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Administrator->create();
			if ($this->Administrator->save($this->data)) {
				$this->Session->setFlash(__('The Administrator has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Administrator could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Administrator', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Administrator->save($this->data)) {
				$this->Session->setFlash(__('The Administrator has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Administrator could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Administrator->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Administrator', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Administrator->del($id)) {
			$this->Session->setFlash(__('Administrator deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>