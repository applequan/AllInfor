<?php
class PostersController extends AppController {

	var $name = 'Posters';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Poster->recursive = 0;
		$this->set('posters', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Poster.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('poster', $this->Poster->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Poster->create();
			if ($this->Poster->save($this->data)) {
				$this->Session->setFlash(__('The Poster has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Poster could not be saved. Please, try again.', true));
			}
		}
		$leagueUsers = $this->Poster->LeagueUser->find('list');
		$this->set(compact('leagueUsers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Poster', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Poster->save($this->data)) {
				$this->Session->setFlash(__('The Poster has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Poster could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Poster->read(null, $id);
		}
		$leagueUsers = $this->Poster->LeagueUser->find('list');
		$this->set(compact('leagueUsers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Poster', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Poster->del($id)) {
			$this->Session->setFlash(__('Poster deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>