<?php if(isset($_GET['id'])){ if (!isset($_SESSION['t'.$_GET['id']])){ $v1b1cc7f0="update tiendas set vw_tienda=vw_tienda+1 where id_tienda='".$_GET['id']."'"; mysql_query($v1b1cc7f0); $v1b1cc7f0="select (vw_tienda+vm_tienda)as visitas from tiendas where id_tienda='".$_GET['id']."'"; $vb4a88417=mysql_query($v1b1cc7f0); $vf1965a85=mysql_fetch_array($vb4a88417); $_SESSION['t'.$_GET['id']]=$vf1965a85['visitas']; } $v1b1cc7f0="select * from tiendas t,region r,ciudad c where id_tienda='".$_GET['id']."' and c.id_ciudad=t.id_ciudad and c.id_region=r.id_region"; $vb4a88417=mysql_query($v1b1cc7f0); if($vf1965a85=mysql_fetch_array($vb4a88417)){ ?>
<style type='text/css'>
#cont{
text-align:justify;
	background: #DDFFDD;
	border: 10px solid #4E5EF1;

}</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="../galleria/galleria-1.2.8.js"></script>
<style>
    #galleria{ width: 400px; height: 300px; background: #000 }
.galleria-stage {
height:200;width:400;
}
</style>
				
<?php } ?>


</style>
<script>

function volver(){
if (posicion==0)posicion=cantidad;else posicion--;
document.getElementById('foto').src='../front/'+iden+'/'+arreglo[posicion]+'.jpg';

}
function adelante(){
if (posicion==cantidad)posicion=0;else posicion++;
document.getElementById('foto').src='../front/'+iden+'/'+arreglo[posicion]+'.jpg';

}
</script><center id='home'><table><tr valign='top'><td id='izq'><table id='cont' cellSpacing='20' width='500px'>
<tr><td colspan='2' align='center'>
<?php
if (file_exists("../logo/".$_GET['id'].".PNG")){echo "<img src='../logo/".$_GET['id'].".PNG'>"; } else{echo "<h1>".$vf1965a85["nom_tienda"]."</h1><br>";}echo "</td></tr>"; echo "<tr><td><font style='font: 20pt Cooper Black, Regular;'>Esta tienda ha sido vista <img style='position:relative; top:5px' src='../imagen.php?text=".$_SESSION['t'.$_GET['id']]."&fon=2'> veces </font></td></tr><tr>"; echo "<td><div id='galleria'>"; for ($v865c0c0b=1;$v865c0c0b<=10;$v865c0c0b++){ if (file_exists("../front/".$_GET['id']."/".$v865c0c0b.".jpg")){echo "<img src='../front/".$_GET['id']."/".$v865c0c0b.".jpg'>";} } echo '</div></td>'; echo "<td>".addslashes($vf1965a85["res_tienda"])."</td></tr><tr><th colspan='2'>Direcci&oacute;n y Contacto</th></tr>"; echo "<tr>"; $v73600783=$vf1965a85['dir_tienda'].', '.$vf1965a85['nom_ciudad'].', '.$vf1965a85['nom_region']; ?>
<td id='mapi'>

		<div id="mapa"></div>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script></div>
</td>
<?php
echo "<td valign='top' align='left'><div align='right'>"; if ($vf1965a85["face_tienda"]!=''){echo "<a href='".$vf1965a85["face_tienda"]."'><img src='../facebook_logo.png'></a>";} if ($vf1965a85["twit_tienda"]!=''){echo "<a href='".$vf1965a85["twit_tienda"]."'><img src='../Twitter-Logo.png'></a>";} echo "</div><br>Direcci&oacute;n: ".$vf1965a85["dir_tienda"]." ".$vf1965a85["dir_anex_tienda"]; if ($vf1965a85["horario_tienda"]!=''){echo "<br>Horario de Atenci&oacute;n:<br>".$vf1965a85["horario_tienda"]."'";} if ($vf1965a85["web_tienda"]!=''){echo "<br>Web: <a href='".$vf1965a85["web_tienda"]."'>".$vf1965a85["web_tienda"]."</a>";} if ($vf1965a85["fon_tienda"]!=''){echo "<br>Telefono: ".$vf1965a85["fon_tienda"];} echo "</td>"; echo "</tr>"; ?>
</table></td><td id='der'><?php $v1a07afe7=$vf1965a85['id_tienda'];$vf0c1a84f=$vf1965a85['id_ciudad']; include('prop.php');?></td></tr></table></center>
<script>
<?php
if (file_exists("../front/".$_GET['id']."/1.jpg")){ echo "var arreglo=new Array();"; $v363b122c=0; for ($v865c0c0b=1;$v865c0c0b<=10;$v865c0c0b++){ if (file_exists("../front/".$_GET['id']."/".$v865c0c0b.".jpg")){echo "arreglo[".$v363b122c."]=".$v865c0c0b.";";$v363b122c++;} } echo "var posicion=0;cantidad=".($v363b122c-1).";iden=".$_GET['id'].";"; }?>
window.onload = function() {
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
}
Galleria.loadTheme('../galleria/themes/classic/galleria.classic.min.js');

            Galleria.run('#galleria');
Galleria.configure({
    debug: false, // debug is now off for deployment
imageCrop: false,
    transition: 'fade'
});

</script>
<?php
} 