<?php
class CiudadesController extends AppController {

	var $name = 'Ciudades';

	function index() {
		$this->Ciudad->recursive = 0;
		$this->set('ciudades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'ciudad'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ciudad', $this->Ciudad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'ciudad'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'ciudad'));
			}
		}
		$regiones = $this->Ciudad->Region->find('list');
		$this->set(compact('regiones'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'ciudad'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'ciudad'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'ciudad'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ciudad->read(null, $id);
		}
		$regiones = $this->Ciudad->Region->find('list');
		$this->set(compact('regiones'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'ciudad'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ciudad->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Ciudad'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Ciudad'));
		$this->redirect(array('action' => 'index'));
	}
}
?>