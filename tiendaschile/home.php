<?php if(isset($_GET['id'])){ session_start(); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); require_once('db.php'); n623ad0b9(); if (!isset($_SESSION['t'.$_GET['id']])){ $v1b1cc7f0="update tiendas set vw_tienda=vw_tienda+1 where id_tienda='".$_GET['id']."'"; mysql_query($v1b1cc7f0); $v1b1cc7f0="select (vw_tienda+vm_tienda)as visitas from tiendas where id_tienda='".$_GET['id']."'"; $vb4a88417=mysql_query($v1b1cc7f0); $vf1965a85=mysql_fetch_array($vb4a88417); $_SESSION['t'.$_GET['id']]=$vf1965a85['visitas']; } $v1b1cc7f0="select * from tiendas t,region r,ciudad c where id_tienda='".$_GET['id']."' and c.id_ciudad=t.id_ciudad and c.id_region=r.id_region"; $vb4a88417=mysql_query($v1b1cc7f0); if($vf1965a85=mysql_fetch_array($vb4a88417)){
?>
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
if (file_exists("./logo/".$_GET['id'].".PNG")){$v568d8e07="<img src='./logo/".$_GET['id'].".PNG'>"; }else{$v568d8e07="<h1>".$vf1965a85["nom_tienda"]."</h1>";} echo "cell1.innerHTML=\"".$v568d8e07."\";";?>
row1.appendChild(cell1);
tcuerpo.appendChild(row1);
var row2=document.createElement('tr');
var cell2=document.createElement('td');
<?php
echo "cell2.innerHTML=\"<font style='font: 20pt Cooper Black, Regular;'>Esta tienda ha sido vista <img style='position:relative; top:5px' src='imagen.php?text=".$_SESSION['t'.$_GET['id']]."&fon=2'> veces </font>\";";
?>
row2.appendChild(cell2);
tcuerpo.appendChild(row2);
var row3=document.createElement('tr');
var cell3=document.createElement('td');
<?php
$v568d8e07="<div id='galleria'>"; for ($v865c0c0b=1;$v865c0c0b<=10;$v865c0c0b++){ if (file_exists("./front/".$_GET['id']."/".$v865c0c0b.".jpg")){$v568d8e07.="<img src='./front/".$_GET['id']."/".$v865c0c0b.".jpg'>";} } $v568d8e07.='</div>'; echo "cell3.innerHTML=\"".$v568d8e07."\";";?>
row3.appendChild(cell3);
tcuerpo.appendChild(row3);
var cell4=document.createElement('td');
<?php
echo "cell4.innerHTML=\"".($vf1965a85["res_tienda"])."\";"; ?>
row3.appendChild(cell4);
var row4=document.createElement('tr');
var cell5=document.createElement('th');
cell5.colSpan='2';
<?php
echo "cell5.innerHTML=\"Direcci&oacute;n y Contacto\";";
?>
row4.appendChild(cell5);
tcuerpo.appendChild(row4);
var row5=document.createElement('tr');
var cell6=document.createElement('td');
cell6.id='mapi';
row5.appendChild(cell6);
var cell7=document.createElement('td');
cell7.valign='top';
cell7.align='left';
<?php
$v73600783=$vf1965a85['dir_tienda'].', '.$vf1965a85['nom_ciudad'].', '.$vf1965a85['nom_region']; $v73600783=str_replace("'","%27",$v73600783); $v568d8e07="<div align='right'>"; if ($vf1965a85["face_tienda"]!=''){$v568d8e07.="<a href='".$vf1965a85["face_tienda"]."'><img src='facebook_logo.png'></a>";} if ($vf1965a85["twit_tienda"]!=''){$v568d8e07.="<a href='".$vf1965a85["twit_tienda"]."'><img src='Twitter-Logo.png'></a>";} $v568d8e07.="</div><br>Direcci&oacute;n: ".$vf1965a85["dir_tienda"]." ".$vf1965a85["dir_anex_tienda"]; if ($vf1965a85["horario_tienda"]!=''){$v568d8e07.="<br>Horario de Atenci&oacute;n:<br>".$vf1965a85["horario_tienda"]."'";} if ($vf1965a85["web_tienda"]!=''){$v568d8e07.="<br>Web: <a href='".$vf1965a85["web_tienda"]."'>".$vf1965a85["web_tienda"]."</a>";} if ($vf1965a85["fon_tienda"]!=''){$v568d8e07.="<br>Telefono: ".$vf1965a85["fon_tienda"];} 
echo "cell7.innerHTML=\"".$v568d8e07."\";";


?>
row5.appendChild(cell7);
tcuerpo.appendChild(row5);
tabla.appendChild(tcuerpo);
document.getElementById('home').appendChild(tablas);
document.getElementById('izq').appendChild(tabla);

				var tienda = new google.maps.LatLng(<?php echo $vf1965a85["ll_tienda"];?>);
				var opciones = {
					zoom : 18,
					center: tienda,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var div = document.getElementById('mapa');				
				var map = new google.maps.Map(div, opciones);	
				var marcador = new google.maps.Marker({
				  position: new google.maps.LatLng(<?php echo $vf1965a85["ll_tienda"];?>),
				  map: map,
				  title: '<?php echo addslashes($vf1965a85["nom_tienda"]);?>',
				  icon: 'http://181.72.11.104/tiendaschile/icons/flag_red.png'
				});
document.getElementById('mapi').appendChild(document.getElementById('mapa'));
Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');

            Galleria.run('#galleria');
Galleria.configure({
    debug: false, // debug is now off for deployment
imageCrop: false,
    transition: 'fade'
});
<?php
$v1a07afe7=$vf1965a85['id_tienda']; $vf0c1a84f=$vf1965a85['id_ciudad']; include('prop.php'); } }else{
?>
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
   script.src=  "home.php?id="+ide;
document.getElementById('wrapper').style.display='';
document.getElementById('wrapper').appendChild(document.getElementById('mapa'));
   head.appendChild(script);
var testi=document.getElementById('tablas');
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

