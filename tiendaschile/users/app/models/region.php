<?php
class Region extends AppModel {
	var $name = 'Region';
	var $useTable = 'region';
	var $primaryKey = 'id_region';
	var $displayField = 'nom_region';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ciudades' => array(
			'className' => 'Ciudad',
			'foreignKey' => 'id_region',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>