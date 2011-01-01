<?php
class PostersController extends AppController {

	var $name = 'Posters';
	var $helpers = array('Html', 'Form');
	var $components = array('Cookie');

	function index() {
		$this->Poster->recursive = 0;
		$this->set('posters', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Poster.', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
		$this->set('poster', $this->Poster->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Poster->create();
			$this->data['Poster']['userleague_id'] = $this->getCurrentOrganizationID();
			if ($this->Poster->save($this->data)) {
				$this->Session->setFlash(__('The Poster has been saved', true));
				$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
			} else {
				$this->Session->setFlash(__('The Poster could not be saved. Please, try again.', true));
			}
		}
		$userleagues = $this->Poster->Userleague->find('list');
		$this->set(compact('userleagues'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Poster', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
		if (!empty($this->data)) {
			if ($this->Poster->save($this->data)) {
				$this->Session->setFlash(__('The Poster has been saved', true));
				$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
			} else {
				$this->Session->setFlash(__('The Poster could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Poster->read(null, $id);
		}
		$userleagues = $this->Poster->Userleague->find('list');
		$this->set(compact('userleagues'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Poster', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
		if ($this->Poster->del($id)) {
			$this->Session->setFlash(__('Poster deleted', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
	}

}
?>