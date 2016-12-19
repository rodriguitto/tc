<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); require_once("db.php"); n623ad0b9(); if (isset($_GET['q'])){ $v7694f4a6=str_replace(',',' ',$_GET['q']); $v5035d74e=explode(' ',addslashes($v7694f4a6)); $vb068931c=""; $ve4d23e84=""; $v73600783=""; foreach ($v5035d74e as $v92eb5ffe){ if ($vb068931c!="")$vb068931c.=" or "; $vb068931c.="UPPER(nom_tienda) like UPPER('%".$v92eb5ffe."%')"; if ($v73600783!="")$v73600783.=" or "; $v73600783.="UPPER(dir_tienda) like UPPER('%".$v92eb5ffe."%')"; if ($ve4d23e84!="")$ve4d23e84.=" or "; $ve4d23e84.="UPPER(nom_tag) like UPPER('%".$v92eb5ffe."%')"; } $v1b1cc7f0="select * from tiendas where id_ciudad='".$_GET['ciudad']."' and ((".$vb068931c.") or (".$v73600783.")  or tags in (select '%'+id_tag+'%' from tags where (".$ve4d23e84."))) "; $vb4a88417=mysql_query($v1b1cc7f0); ?>

if (document.getElementById('tabla')){document.getElementById('searc').removeChild(document.getElementById('tabla'));}
var tabla=document.createElement('table');
tabla.id='tabla';tabla.width='900px';
var tcuerpo=document.createElement('tbody');
<?php
if (mysql_num_rows($vb4a88417)>0){ $v5e0bdcbd=0; $v3cbec8a1="<tbody>";$v865c0c0b=0;$v363b122c=0; 
while ($vf1965a85=mysql_fetch_array($vb4a88417)){
if ($v5e0bdcbd==0){echo "var row".$v363b122c."=document.createElement('tr');\n";}
echo "var cell".$v865c0c0b."=document.createElement('td');
cell".$v865c0c0b.".width='150px';
cell".$v865c0c0b.".innerHTML=\"<button style='width:130px' onClick='cargar(".$vf1965a85["id_tienda"].");'>".$vf1965a85["nom_tienda"]."</button>\";";

$v5e0bdcbd++;echo "row".$v363b122c.".appendChild(cell".$v865c0c0b.");";$v865c0c0b++; 
if ($v5e0bdcbd==7){echo "tcuerpo.appendChild(row".$v363b122c.");";$v5e0bdcbd=0;$v363b122c++;} 
} 
if (($v5e0bdcbd<7)&&($v5e0bdcbd!=0)){ while ($v5e0bdcbd<7){ echo "var cell".$v865c0c0b."=document.createElement('td');";echo "row".$v363b122c.".appendChild(cell".$v865c0c0b.");"; $v5e0bdcbd++;$v865c0c0b++; }echo "tcuerpo.appendChild(row".$v363b122c.");";} echo "tabla.appendChild(tcuerpo);"; ?>

document.getElementById('searc').appendChild(tabla);
var salto=document.createElement('p');
salto.height='100px';salto.innerHTML='&nbsp;<br><br>';
document.getElementById('searc').appendChild(salto);
<?php
} }else{ ?>

<center>
<form>
Regi&oacute;n <select name="reg" onchange="desplegar(this.value)">
<option value="0">---Seleccione Regi&oacute;n---</option>
<?php
$v1b1cc7f0="select * from region where id_region in (select distinct(id_region) from ciudad)"; $vb4a88417=mysql_query($v1b1cc7f0);$vfcd42d83="<b id='0'>&nbsp;</b>"; while ($vf1965a85=mysql_fetch_array($vb4a88417)){ echo "<option value='".$vf1965a85['id_region']."'>".$vf1965a85['nom_region']."</option>"; $v1b1cc7f0="select * from ciudad where id_region='".$vf1965a85['id_region']."'"; $v486a9bbc=mysql_query($v1b1cc7f0); if (mysql_num_rows($v486a9bbc)>0){ $vfcd42d83.="<select style='display:none' id='".$vf1965a85['id_region']."' name='ciudad'>"; while ($vcb08a1ef=mysql_fetch_array($v486a9bbc)){ $vfcd42d83.="<option value='".$vcb08a1ef['id_ciudad']."'>".$vcb08a1ef['nom_ciudad']."</option>"; } $vfcd42d83.="</select>";}else{$vfcd42d83.="<b style='display:none' id='".$vf1965a85['id_region']."'>No Disponible</b>";} } ?>
</select>
<script>
activo=0;
function desplegar(val){
document.getElementById(activo).style.display='none';
document.getElementById(val).style.display='';
document.getElementById(activo).disabled=true;
document.getElementById(val).disabled=false;
activo=val;
}
</script>
<?php
echo $vfcd42d83; ?>
<input type="text" name='q' id='q' onkeypress="return(validar(event));" onkeydown="enter(event,this);"><input type='button' value='Buscar' onClick='return(comprobar(this.form));'>
</form></center>
<script>
function comprobar(formu){

if (formu.reg.value==0){alert('Debe seleccionar Region y Ciudadnantes de buscar');return false;}
cargar_tabla(formu.ciudad.value);
}
function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla===13){return false;}
}
function enter(e,este) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla===13){cargar_tabla(este.form.ciudad.value);}
}
function cargar_tabla(ciuda)
{
   var heade= document.getElementsByTagName('head')[0];
   var script= document.createElement('script');
   script.type= 'text/javascript';
   //script.onreadystatechange= function () {probar[indice]();}
   //script.onload= function () { probar[indice]();}
   script.src=  "search.php?q="+document.getElementById('q').value+"&ciudad="+ciuda;
   heade.appendChild(script);
var testi=document.getElementById('tabla');
if (testi){document.getElementById('searc').removeChild(testi);}
}</script><center id='searc'></center>
<?php } ?>