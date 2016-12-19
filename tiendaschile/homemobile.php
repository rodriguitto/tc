<?php if(isset($_GET['id'])){ session_start(); require_once('db.php'); n623ad0b9(); if (!isset($_SESSION['t'.$_GET['id']])){ $v1b1cc7f0="update tiendas set vm_tienda=vm_tienda+1 where id_tienda='".$_GET['id']."'"; mysql_query($v1b1cc7f0); $v1b1cc7f0="select (vw_tienda+vm_tienda) as visitas from tiendas where id_tienda='".$_GET['id']."'"; $vb4a88417=mysql_query($v1b1cc7f0); $vf1965a85=mysql_fetch_array($vb4a88417); $_SESSION['t'.$_GET['id']]=$vf1965a85['visitas']; } $v1b1cc7f0="select * from tiendas where id_tienda='".$_GET['id']."'"; $vb4a88417=mysql_query($v1b1cc7f0); if($vf1965a85=mysql_fetch_array($vb4a88417)){ ?>
var tabla=document.createElement('table');
tabla.id='tablas';
tabla.cellSpacing='20';
<?php
$v568d8e07="<tr><td colspan='2' align='center'>"; $v568d8e07.="<h1>".$vf1965a85["nom_tienda"]."</h1><br></td><td id='uno' rowspan='3'></td></tr>"; $v568d8e07.="<tr><td><font style='font: 20pt Cooper Black, Regular;'>Esta tienda ha sido vista <img style='position:relative; top:5px' src='imagen.php?text=".$_SESSION['t'.$_GET['id']]."&fon=2'> veces </font></td></tr><tr>"; $v568d8e07.="<td>".$vf1965a85["res_mobile_tienda"]."</td></tr><tr><td id='dos'><table id='comollegar'><tr><th>Como llegar</th></tr><tr><td>".$vf1965a85["dir_tienda"]."</td></tr>"; if (file_exists("./map/".$_GET['id'].".jpg")){$v568d8e07.="<tr><td><img src='./map/".$_GET['id'].".jpg'></td></tr>"; } $v568d8e07.="</table></td></tr>"; echo "tabla.innerHTML='".addslashes($v568d8e07)."';"; ?>
document.getElementById('home').appendChild(tabla);
function mapeo(){

if (window.innerWidth>window.innerHeight) document.getElementById('uno').appendChild(document.getElementById('comollegar'));
else document.getElementById('dos').appendChild(document.getElementById('comollegar'));
}
window.setInterval("mapeo()",1000);
<?php
} }else{ ?>
<style type='text/css'>
#cont{
text-align:justify;
	background: #DDFFDD;
	border: 10px solid #4E5EF1;

}

</style>
<script>
function cargar(ide)
{
   var head= document.getElementsByTagName('head')[0];
   var script= document.createElement('script');
   script.type= 'text/javascript';
   //script.onreadystatechange= function () {probar[indice]();}
   //script.onload= function () { probar[indice]();}
   script.src=  "homemobile.php?id="+ide;
   head.appendChild(script);document.getElementById('home').removeChild(document.getElementById('tablas'));
}


</script><center id='home'></center>
<?php
} 