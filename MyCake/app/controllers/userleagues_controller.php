<?php
class UserleaguesController extends AppController {

	var $name = 'Userleagues';
	var $helpers = array('Html', 'Form');
	var $components    = array('Cookie');
	
	function leagueIndex() {
		$this->Userclass->recursive = 0;
		$this->set('userleagues', $this->paginate());
	}
	
	function displayLeaguesNotice($id) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid League.', true));
			$this->redirect('/posters/index');
		}
		$this->set('userleague', $this->Userleague->read(null, $id));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Userleague.', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
		$this->set('userleague', $this->Userleague->read(null, $id));
		$this->Cookie->write('OrganizationId', $id, false, '1 hour');
	}

	function add() {
		if (!empty($this->data)) {
			$this->Userleague->create();
			$this->data['Userleague']['user_id'] = $this->getCurrentUserId();
			if ($this->Userleague->save($this->data)) {
				$this->Session->setFlash(__('The Userleague has been saved', true));
				$this->redirect('/users/view/'.$this->getCurrentUserId());
			} else {
				$this->Session->setFlash(__('The Userleague could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Userleague->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Userleague', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
		if (!empty($this->data)) {
			if ($this->Userleague->save($this->data)) {
				$this->Session->setFlash(__('The Userleague has been saved', true));
				$this->redirect('/users/view/'.$this->getCurrentUserId());
			} else {
				$this->Session->setFlash(__('The Userleague could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Userleague->read(null, $id);
		}
		$users = $this->Userleague->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Userleague', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
		if ($this->Userleague->del($id)) {
			$this->Session->setFlash(__('Userleague deleted', true));
			$this->redirect('/users/view/'.$this->getCurrentUserId());
		}
	}

}
?>