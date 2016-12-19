<?php 
if(isset($_GET['id'])){
session_start();
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
require_once('../db.php');
n623ad0b9();

$query="select * from tiendas t,region r,ciudad c where id_tienda='".$_GET['id']."' and c.id_ciudad=t.id_ciudad and c.id_region=r.id_region";
$result=mysql_query($query);
$query="select * from tags";
$result2=mysql_query($query);
if($row=mysql_fetch_array($result)){
}else{$row['nom_tienda']=$_GET['q'];
$row['tags']="";
$row["web_tienda"]="";
$row["id_ciudad"]=$_GET['ciu'];
$row["fon_tienda"]="";
$row["ll_tienda"]="";
$row["res_tienda"]="";
$row["face_tienda"]="";
$row["twit_tienda"]="";
$row["dir_tienda"]="";
$row["horario_tienda"]="";
$row["dir_anex_tienda"]="";
}
?>
var formu=document.createElement('form');formu.id='formu'
formu.method='post';
formu.action='grabar.php';
var tablas=document.createElement('table');tablas.id='tablas';
var rowt=document.createElement('tr');
rowt.vAlign='top';
var celli=document.createElement('td');
celli.id='izq';
var celld=document.createElement('td');
celld.id='der';
rowt.appendChild(celli);rowt.appendChild(celld);
tablas.appendChild(rowt);
var tabla=document.createElement('table');
tabla.id='cont';
tabla.cellSpacing='20';
tabla.width='500px';
var tcuerpo=document.createElement('tbody');
var row1=document.createElement('tr');
var cell1=document.createElement('td');
cell1.colSpan=2;
cell1.align='center';
<?php
$cont="Nombre <input type='text' value='".$row["nom_tienda"]."' name='nombre'>";
echo "cell1.innerHTML=\"".$cont."\";";?>
row1.appendChild(cell1);
tcuerpo.appendChild(row1);
var row2=document.createElement('tr');
var row3=document.createElement('tr');
var cell4=document.createElement('td');
<?php
echo "cell4.innerHTML=\"<textarea name='res'>".($row["res_tienda"])."</textarea>\";";
?>
row3.appendChild(cell4);
var row5=document.createElement('tr');
var cell7=document.createElement('td');
cell7.valign='top';
cell7.align='left';
<?php
$cont="";
$cont.="facebook<input type='text' value='".$row["face_tienda"]."' name='face'><br>";
$cont.="twitter<input type='text' value='".$row["twit_tienda"]."' name='twit'><br>";

$cont.="Direcci&oacute;n: <input type='text' value='".$row["dir_tienda"]."' name='dir'><br>anexa:<input type='text' value='".$row["dir_anex_tienda"]."' name='dir_anex'>";
$cont.="<br>Horario de Atenci&oacute;n:<br><input type='text' value='".$row["horario_tienda"]."' name='hor'>";
$cont.="<br>Web: <input type='text' value='".$row["web_tienda"]."' name='web'>";
$cont.="<br>Telefono: <input type='text' value='".$row["fon_tienda"]."' name='fon'>";
$cont.="<br>ll googlemaps: <input type='text' value='".$row["ll_tienda"]."' name='ll'>";
if (isset($row["id_tienda"])){$cont.="<input type='hidden' value='".$row["id_tienda"]."' name='tienda'>";}
$cont.="<input type='hidden' value='".$row["id_ciudad"]."' name='ciudad'>";
$cont.="<select name='tags[]' multiple>";
while($row2=mysql_fetch_array($result2)){
  $cont.="<option value='".$row2['id_tag']."'";
  if (strpos("-".$row['tags'],','.$row2['id_tag'].',')){$cont.=" selected";}
  $cont.=">".$row2['nom_tag']."</option>";
}
$cont.="</select><input type='submit' value='Grabar'>";
echo "cell7.innerHTML=\"".$cont."\";";


?>
row5.appendChild(cell7);
tcuerpo.appendChild(row3);
tcuerpo.appendChild(row5);
tabla.appendChild(tcuerpo);
formu.appendChild(tablas)
document.getElementById('home').appendChild(formu);
document.getElementById('izq').appendChild(tabla);<?php

}else{
?>
<style type='text/css'>
#cont{
text-align:justify;
	background: #DDFFDD;
	border: 10px solid #4E5EF1;

}

</style>
<script>
function cargar(ide,q,ciu)
{
   var head= document.getElementsByTagName('head')[0];
   var script= document.createElement('script');
   script.type= 'text/javascript';
   //script.onreadystatechange= function () {probar[indice]();}
   //script.onload= function () { probar[indice]();}
   script.src=  "home.php?id="+ide+"&q="+q+"&ciu="+ciu;
   head.appendChild(script);
var testi=document.getElementById('formu');
if (testi!=null){document.getElementById('home').removeChild(testi);}
}

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="galleria/galleria-1.2.8.js"></script>
<style>
    #galleria{ width: 400px; height: 300px; background: #000 }
.galleria-stage {
height:200;width:400;
}
</style>
<center id='home'></center>
<?php
}

