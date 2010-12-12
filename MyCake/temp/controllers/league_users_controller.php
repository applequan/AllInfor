<?php
class LeagueUsersController extends AppController {

	var $name = 'LeagueUsers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->LeagueUser->recursive = 0;
		$this->set('leagueUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid LeagueUser.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('leagueUser', $this->LeagueUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LeagueUser->create();
			if ($this->LeagueUser->save($this->data)) {
				$this->Session->setFlash(__('The LeagueUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The LeagueUser could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid LeagueUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->LeagueUser->save($this->data)) {
				$this->Session->setFlash(__('The LeagueUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The LeagueUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LeagueUser->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for LeagueUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LeagueUser->del($id)) {
			$this->Session->setFlash(__('LeagueUser deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>