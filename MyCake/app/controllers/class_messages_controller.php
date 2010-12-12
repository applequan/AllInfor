<?php
class ClassMessagesController extends AppController {

	var $name = 'ClassMessages';
	var $helpers = array('Html', 'Form');
	var $components = array('Cookie');

	function index() {
		$this->ClassMessage->recursive = 0;
		$this->set('classMessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ClassMessage.', true));
			$this->redirect('/userclasses/view'.'/'.$this->getCurrentOrganizationID());
		}
		$this->set('classMessage', $this->ClassMessage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ClassMessage->create();
			$this->data['ClassMessage']['userclass_id'] = $this->getCurrentOrganizationID();
			if ($this->ClassMessage->save($this->data) && !($this->data['ClassMessage']['userclass_id'] == null )) {
				$this->Session->setFlash(__('The ClassMessage has been saved', true));
				$this->redirect('/userclasses/view'.'/'.$this->getCurrentOrganizationID());
			} else {
				$this->Session->setFlash(__('The ClassMessage could not be saved. Please, try again.', true));
			}
		}
		$userclasses = $this->ClassMessage->Userclass->find('list');
		$this->set(compact('userclasses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ClassMessage', true));
			$this->redirect('/userclasses/view'.'/'.$this->getCurrentOrganizationID());
		}
		if (!empty($this->data)) {
			if ($this->ClassMessage->save($this->data)) {
				$this->Session->setFlash(__('The ClassMessage has been saved', true));
				$this->redirect('/userclasses/view'.'/'.$this->getCurrentOrganizationID());
			} else {
				$this->Session->setFlash(__('The ClassMessage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ClassMessage->read(null, $id);
		}
		$userclasses = $this->ClassMessage->Userclass->find('list');
		$this->set(compact('userclasses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ClassMessage', true));
			$this->redirect('/userclasses/view'.'/'.$this->getCurrentOrganizationID());
		}
		if ($this->ClassMessage->del($id)) {
			$this->Session->setFlash(__('ClassMessage deleted', true));
			$this->redirect('/userclasses/view'.'/'.$this->getCurrentOrganizationID());
		}
	}

}
?>