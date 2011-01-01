<?php
class LeagueNoticesController extends AppController {

	var $name = 'LeagueNotices';
	var $helpers = array('Html', 'Form');
	var $components = array('Cookie');

	function index() {
		$this->LeagueNotice->recursive = 0;
		$this->set('leagueNotices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid LeagueNotice.', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
		$this->set('leagueNotice', $this->LeagueNotice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LeagueNotice->create();
			$this->data['LeagueNotice']['userleague_id'] = $this->getCurrentOrganizationID();
			if ($this->LeagueNotice->save($this->data)) {
				$this->Session->setFlash(__('The LeagueNotice has been saved', true));
				//$this->redirect(array('action'=>'index'));
				$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
			} else {
				$this->Session->setFlash(__('The LeagueNotice could not be saved. Please, try again.', true));
			}
		}
		$userleagues = $this->LeagueNotice->Userleague->find('list');
		$this->set(compact('userleagues'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid LeagueNotice', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
		if (!empty($this->data)) {
			if ($this->LeagueNotice->save($this->data)) {
				$this->Session->setFlash(__('The LeagueNotice has been saved', true));
				$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
			} else {
				$this->Session->setFlash(__('The LeagueNotice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LeagueNotice->read(null, $id);
		}
		$userleagues = $this->LeagueNotice->Userleague->find('list');
		$this->set(compact('userleagues'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for LeagueNotice', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
		if ($this->LeagueNotice->del($id)) {
			$this->Session->setFlash(__('LeagueNotice deleted', true));
			$this->redirect('/userleagues/view'.'/'.$this->getCurrentOrganizationID());
		}
	}

}
?>