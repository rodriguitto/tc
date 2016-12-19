<?php
	function n623ad0b9(){ 
		$vcf1e8c14="localhost"; 
		$va85f64b5="root"; 
		$v9c874001=""; 
		$v24e8d177 = "tiendas"; 
		$vd412d52e = mysql_connect($vcf1e8c14, $va85f64b5, $v9c874001); 
		if ($vd412d52e){ 
			if(mysql_select_db($v24e8d177, $vd412d52e)){ 
			return($vd412d52e); } echo "error al conectar a la DB"; 
			} else echo "error al establecer la conexion"; 
		} 
?>