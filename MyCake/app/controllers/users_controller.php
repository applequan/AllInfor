<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');
	//var $components = array('Auth','Cookie');
	
	
	function index() {
		$this->checkSession(); 
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		$this->checkSession();
		$id = $this->getCurrentUserId();
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
		//$this->set('userclasses', $this->paginate('Userclass', array("User_id =" => $this->getCurrentUserId())));
		//$this->set('users', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->checkSession();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->checkSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function login() {  
        //Don't show the error message if no data has been submitted.  
        $this->set('error', false);  
 
        // If a user has submitted form data: 
        if (!empty($this->data)) 
        { 
            // First, let's see if there are any users in the database  
            // with the username supplied by the user using the form:  
  
            $someone = $this->User->findByUsername($this->data['User']['username']);
  
            // At this point, $someone is full of user data, or its empty.  
            // Let's compare the form-submitted password with the one in   
            // the database.  
  
            if(!empty($someone['User']['password']) && $someone['User']['password'] == $this->data['User']['password']) 
            { 
                // Note: hopefully your password in the DB is hashed,  
                // so your comparison might look more like: 
                // md5($this->data['User']['password']) == ... 
 
                // This means they were the same. We can now build some basic 
                // session information to remember this user as 'logged-in'. 
 
                $this->Session->write('User', $someone['User']); 
 
                // Now that we have them stored in a session, forward them on 
                // to a landing page for the application.  

                $this->redirect('/users/view');
            } 
            // Else, they supplied incorrect data: 
            else 
            { 
                // Remember the $error var in the view? Let's set that to true:  
                $this->set('error', true);  
            }  
        }  
    }  
  
    function logout()  
    {  
        // Redirect users to this action if they click on a Logout button.  
        // All we need to do here is trash the session information:  
		$this->checkSession();
        $this->Session->delete('User');  
  
        // And we should probably forward them somewhere, too...  
       
        $this->redirect('/');  
    }  

}
?>