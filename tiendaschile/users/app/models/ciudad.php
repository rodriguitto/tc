<?php
class Ciudad extends AppModel {
	var $name = 'Ciudad';
	var $useTable = 'ciudad';
	var $primaryKey = 'id_ciudad';
	var $displayField = 'nom_ciudad';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Region' => array(
			'className' => 'Region',
			'foreignKey' => 'id_region',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>