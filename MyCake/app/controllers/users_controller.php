<?php
class UsersController extends AppController {
	var $name = 'Users';
	var $helpers = array('Html', 'Form');

	
	function saveUserToDataBase() {
		if ($this->User->save($this->data)) {
			$this->Session->setFlash(__('The User has been saved', true));
			$this->redirect('/users/login');
		}
	}
	
	function saveUserToDataBaseIfNotEmpty() {
		if (!empty($this->data)) {
			$this->User->create();
			$this->saveUserToDataBase();
			
			//如果成功保存，则会直接跳转，不执行下面一句话
			$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
		}
	}
	
	function deleteUserIfExist($id = null) {
		if ($this->User->del($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect('/');
		}
	}
	
	function checkUserValid($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect('/');
		}
	}
	
		
	function writeUserToSessionIfUserExist() {
		if (!empty($this->data)) { 
            $someone = $this->User->findByUsername($this->data['User']['username']);
			$this->writeUserToSessionIfNotEmpty($someone);
            $this->set('error', true);    
        }  
	}
	
	function writeUserToSessionIfNotEmpty($someone) {
	    if(!empty($someone['User']['password']) && 
			$someone['User']['password'] == $this->data['User']['password']) 
		{
			   
            $this->Session->write('User', $someone['User']); 
            $this->redirect('/users/view');
        }
	}
	
	function index() {
		$this->checkSession(); 
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	//显示用户管理页面
	function view($id = null) {
		$this->checkSession();
		$id = $this->getCurrentUserId();
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect('/');
		}
		$this->set('user', $this->User->read(null, $id));
	}
	
	//添加新用户
	function add() {
		$this->saveUserToDataBaseIfNotEmpty();
	}
	
	//修改用户信息
	function edit($id = null) {
		$this->checkSession();
		$this->checkUserValid($id);
		$this->saveUserToDataBaseIfNotEmpty();
		
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	//删除用户
	function delete($id = null) {
		$this->checkSession();
		$this->checkUserValid($id);
		$this->deleteUserIfExist($id);
	}
	
	
	function login() {  
        $this->set('error', false);  
		$this->writeUserToSessionIfUserExist();
    }  
 
    function logout() {  
		$this->checkSession();
        $this->Session->delete('User');    
        $this->redirect('/');  
    }  
}
?>