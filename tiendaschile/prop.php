var prop=document.createElement('div');
<?php
function n71d4fa13($vb4a88417,$v1b1cc7f0){ 
if ($vf1965a85=mysql_fetch_array($vb4a88417)){ $v23a5b8ab=$vf1965a85['id_tienda']; 
if (($_SESSION['a1']==$v23a5b8ab)||($_SESSION['a2']==$v23a5b8ab)||($_SESSION['a3']==$v23a5b8ab)){ 
return(n71d4fa13($vb4a88417,$v1b1cc7f0)); } 
else {$_SESSION['a1']=$v23a5b8ab;
return("<img height=\'206px\' width=\'163px\' onClick=\'cargar(".$v23a5b8ab.");\' src=\'./prop/".$v23a5b8ab.".PNG\'><br>");} } 
else{$vb4a88417=mysql_query($v1b1cc7f0);return(n71d4fa13($vb4a88417,$v1b1cc7f0));} } 
function n2b7b1077($vb4a88417,$v1b1cc7f0){ 
if ($vf1965a85=mysql_fetch_array($vb4a88417)){ $v23a5b8ab=$vf1965a85['id_tienda']; 
if (($_SESSION['a1']==$v23a5b8ab)||($_SESSION['a2']==$v23a5b8ab)||($_SESSION['a3']==$v23a5b8ab)){ 
return(n2b7b1077($vb4a88417,$v1b1cc7f0)); } 
else {$_SESSION['a2']=$v23a5b8ab;
return("<img height=\'206px\' width=\'163px\' onClick=\'cargar(".$v23a5b8ab.");\' src=\'./prop/".$v23a5b8ab.".PNG\'><br>");} }
else{$vb4a88417=mysql_query($v1b1cc7f0);return(n2b7b1077($vb4a88417,$v1b1cc7f0));} } 
function nf8d7ceb1($vb4a88417,$v1b1cc7f0){ 
if ($vf1965a85=mysql_fetch_array($vb4a88417)){ $v23a5b8ab=$vf1965a85['id_tienda']; 
if (($_SESSION['a1']==$v23a5b8ab)||($_SESSION['a2']==$v23a5b8ab)||($_SESSION['a3']==$v23a5b8ab)){ 
return(nf8d7ceb1($vb4a88417,$v1b1cc7f0)); } else {$_SESSION['a3']=$v23a5b8ab;
return("<img height=\'206px\' width=\'163px\' onClick=\'cargar(".$v23a5b8ab.");\' src=\'./prop/".$v23a5b8ab.".PNG\'><br>");} }
else{$vb4a88417=mysql_query($v1b1cc7f0);return(nf8d7ceb1($vb4a88417,$v1b1cc7f0));}} 
$v1b1cc7f0="select id_tienda from tiendas where premium='1' and id_ciudad='".$vf0c1a84f."' and id_tienda!='".$v1a07afe7."'"; $vb4a88417=mysql_query($v1b1cc7f0); 
if (mysql_num_rows($vb4a88417)>3){ if (!isset($_SESSION['a1'])){$_SESSION['a1']=0;$_SESSION['a2']=0;$_SESSION['a3']=0;} 
$va55cf7e3=n71d4fa13($vb4a88417,$v1b1cc7f0); $va55cf7e3.=n2b7b1077($vb4a88417,$v1b1cc7f0); $va55cf7e3.=nf8d7ceb1($vb4a88417,$v1b1cc7f0); } 
else{ if ($vf1965a85=mysql_fetch_array($vb4a88417)){ $v23a5b8ab=$vf1965a85['id_tienda']; 
$va55cf7e3="<img height=\'206px\' width=\'163px\' onClick=\'cargar(".$v23a5b8ab.");\' src=\'./prop/".$v23a5b8ab.".PNG\'><br>";
 $_SESSION['a1']=$v23a5b8ab; } if ($vf1965a85=mysql_fetch_array($vb4a88417)){ 
$v23a5b8ab=$vf1965a85['id_tienda']; 
$va55cf7e3.="<img height=\'206px\' width=\'163px\' onClick=\'cargar(".$v23a5b8ab.");\' src=\'./prop/".$v23a5b8ab.".PNG\'><br>"; $_SESSION['a2']=$v23a5b8ab; } 
if ($vf1965a85=mysql_fetch_array($vb4a88417)){ $v23a5b8ab=$vf1965a85['id_tienda']; 
$va55cf7e3.="<img height=\'206px\' width=\'163px\' onClick=\'cargar(".$v23a5b8ab.");\' src=\'./prop/".$v23a5b8ab.".PNG\'><br>"; $_SESSION['a3']=$v23a5b8ab; } } echo "prop.innerHTML='".$va55cf7e3."';" ?>document.getElementById('der').appendChild(prop);