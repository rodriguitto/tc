<?php
class MembersController extends AppController {

	var $name = 'Members';
	function index() {
		$this->validarAdmin();
		$this->Member->recursive = 0;
		$this->set('members', $this->paginate());
	}

	function view($id = null) {
		$this->validarAdmin();
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'member'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('member', $this->Member->read(null, $id));
	}
	function login(){
		if (!empty($this->data)) {
			$members= $this->Member->find('first',array('conditions'=>array('Member.estado'=>1,'Member.email'=>$this->data['Member']['email'],'Member.password'=>$this->Auth->data['Member']['password'])));
			
			if ($members) {
				$this->Session->write($members);
				$this->Auth->login($members);
				$this->redirect('/');
			}else{
				//$this->Session->setFlash(__('Usuario o Clave incorrecta', true));
				//$this->redirect(array());
			}
		}
	}
	function logout(){
		$this->Auth->logout();
		$this->redirect('../../');
	}
	function add() {
		$this->validarAdmin();
		if (!empty($this->data)) {
			$this->Member->create();
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'member'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'member'));
			}
		}
	}

	function nuevo() {
		$this->validarAdmin();
		if (!empty($this->data)) {
			$this->Member->create();
			$this->data['Member']['estado']=0;
			$this->data['Member']['premium']=1;
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'member'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('No se pudo guardar verifique los datos');
			}
		}
	}
	function edit($id = null) {
		$this->validarAdmin();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'member'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'member'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'member'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Member->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'member'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Member->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Member'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Member'));
		$this->redirect(array('action' => 'index'));
	}
}
?>