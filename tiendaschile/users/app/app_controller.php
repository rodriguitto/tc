<?php
class AppController extends Controller {
	
	var $components = array('Session', 'RequestHandler', 'Email','Auth');
	var $helpers	= array('Javascript','Html','Session','Form');
	
	function beforeFilter() {
		
		$this->Auth->allow(array('login','logout','nuevo'));
		$this->Auth->loginAction = array('controller' => 'members', 'action' => 'login');
		$this->Auth->authenticate = ClassRegistry::init('Member');		
		$this->Auth->loginError = "El usuario y/o la clave ingresados son inválidos.";
		$this->Auth->authError = "No tiene autorización para acceder";
		$this->Auth->userModel = 'Member';
		$this->Auth->fields = array('username'=>'email','password'=>'password');
		$this->Auth->userScope = array('Member.estado' => 1);
		
		//$this->Auth->loginRedirect = array('controller' => 'members', 'action' => 'inicio');
		
		//$this->Auth->loginRedirect = '/';
		
		
		if($this->RequestHandler->isAjax()) {
			$this->layout = null;
		}
		
		parent::beforeFilter();
		
	}
	public function validarAdmin(){
		$member=$this->Session->read('Auth.Member');
		if ($member['premium']!=3){
		  $this->Session->setFlash('No tienes permisos para hacer esto');
		
		  $this->redirect('/');
		}
	  
	}
}
