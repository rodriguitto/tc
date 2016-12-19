<?php
class Tienda extends AppModel {
	var $name = 'Tienda';
	var $primaryKey = 'id_tienda';
	var $displayField = 'nom_tienda';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Ciudad' => array(
			'className' => 'Ciudad',
			'foreignKey' => 'id_ciudad',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>