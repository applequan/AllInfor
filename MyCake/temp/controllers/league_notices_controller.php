<?php
class LeagueNoticesController extends AppController {

	var $name = 'LeagueNotices';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->LeagueNotice->recursive = 0;
		$this->set('leagueNotices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid LeagueNotice.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('leagueNotice', $this->LeagueNotice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LeagueNotice->create();
			if ($this->LeagueNotice->save($this->data)) {
				$this->Session->setFlash(__('The LeagueNotice has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The LeagueNotice could not be saved. Please, try again.', true));
			}
		}
		$leagueUsers = $this->LeagueNotice->LeagueUser->find('list');
		$this->set(compact('leagueUsers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid LeagueNotice', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->LeagueNotice->save($this->data)) {
				$this->Session->setFlash(__('The LeagueNotice has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The LeagueNotice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LeagueNotice->read(null, $id);
		}
		$leagueUsers = $this->LeagueNotice->LeagueUser->find('list');
		$this->set(compact('leagueUsers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for LeagueNotice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LeagueNotice->del($id)) {
			$this->Session->setFlash(__('LeagueNotice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>