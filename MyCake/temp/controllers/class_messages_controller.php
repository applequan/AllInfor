<?php
class ClassMessagesController extends AppController {

	var $name = 'ClassMessages';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ClassMessage->recursive = 0;
		$this->set('classMessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ClassMessage.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('classMessage', $this->ClassMessage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ClassMessage->create();
			if ($this->ClassMessage->save($this->data)) {
				$this->Session->setFlash(__('The ClassMessage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ClassMessage could not be saved. Please, try again.', true));
			}
		}
		$classUsers = $this->ClassMessage->ClassUser->find('list');
		$this->set(compact('classUsers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ClassMessage', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ClassMessage->save($this->data)) {
				$this->Session->setFlash(__('The ClassMessage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ClassMessage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ClassMessage->read(null, $id);
		}
		$classUsers = $this->ClassMessage->ClassUser->find('list');
		$this->set(compact('classUsers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ClassMessage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ClassMessage->del($id)) {
			$this->Session->setFlash(__('ClassMessage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>