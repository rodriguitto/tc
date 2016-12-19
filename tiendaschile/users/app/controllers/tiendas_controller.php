<?php
class TiendasController extends AppController {

	var $name = 'Tiendas';

	function index() {
		$this->Tienda->recursive = 0;
		$this->set('tiendas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tienda'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tienda', $this->Tienda->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tienda->create();
			if ($this->Tienda->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'tienda'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'tienda'));
			}
		}
		$ciudades = $this->Tienda->Ciudad->find('list');
		$this->set(compact('ciudades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'tienda'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tienda->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'tienda'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'tienda'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tienda->read(null, $id);
		}
		$ciudades = $this->Tienda->Ciudad->find('list');
		$this->set(compact('ciudades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'tienda'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tienda->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Tienda'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Tienda'));
		$this->redirect(array('action' => 'index'));
	}
}
?>