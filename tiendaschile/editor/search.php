<?php
require_once("../db.php");
n623ad0b9();
if (isset($_GET['q'])){
$q=str_replace(',',' ',$_GET['q']);
$buscar=explode(' ',addslashes($q));
$name="";
$tag="";
$dir="";
foreach ($buscar as $b){
  if ($name!="")$name.=" or ";
  $name.="UPPER(nom_tienda) like UPPER('%".$b."%')";
  if ($dir!="")$dir.=" or ";
  $dir.="UPPER(dir_tienda) like UPPER('%".$b."%')";
  if ($tag!="")$tag.=" or ";
  $tag.="UPPER(nom_tag) like UPPER('%".$b."%')";
}
$querytag="select id_tag from tags where (".$tag.")";
$result=mysql_query($querytag);$tag="";
while ($row=mysql_fetch_array($result)){
if ($tag!="")$tag.=" or ";
$tag.="tags like '%".$row["id_tag"]."%'";
}
if ($tag!=""){$tag=" or (".$tag.")";}
$query="select * from tiendas where id_ciudad='".$_GET['ciudad']."' and ((".$name.") or (".$dir.")  ".$tag.") ";
$result=mysql_query($query);
?>

if (document.getElementById('tabla')){document.getElementById('searc').removeChild(document.getElementById('tabla'));}
var tabla=document.createElement('table');
tabla.id='tabla';tabla.width='900px';
var tcuerpo=document.createElement('tbody');
<?php
if (mysql_num_rows($result)>0){
$pos=0;
$tabla="<tbody>";$i=0;$j=0;
while ($row=mysql_fetch_array($result)){
if ($pos==0){echo "var row".$j."=document.createElement('tr');\n";}
echo "var cell".$i."=document.createElement('td');
cell".$i.".width='150px';
cell".$i.".innerHTML=\"<button style='width:130px' onClick='cargar(".$row["id_tienda"].");'>".$row["nom_tienda"]."</button>\";";
$pos++;echo "row".$j.".appendChild(cell".$i.");";$i++;
if ($pos==7){echo "tcuerpo.appendChild(row".$j.");";$pos=0;$j++;}
}
if (($pos<7)&&($pos!=0)){
while ($pos<7){
echo "var cell".$i."=document.createElement('td');";echo "row".$j.".appendChild(cell".$i.");";
$pos++;$i++;
}echo "tcuerpo.appendChild(row".$j.");";}
echo "tabla.appendChild(tcuerpo);";
?>
document.getElementById('searc').appendChild(tabla);
<?php
}
}else{

?>

<center>
<form>
Regi&oacute;n <select name="reg" onchange="desplegar(this.value)">
<option value="0">---Seleccione Regi&oacute;n---</option>
<?php
$query="select * from region where id_region in (select distinct(id_region) from ciudad)";
$result=mysql_query($query);$ciudades="<b id='0'>&nbsp;</b>";
while ($row=mysql_fetch_array($result)){
  echo "<option value='".$row['id_region']."'>".$row['nom_region']."</option>";
  $query="select * from ciudad where id_region='".$row['id_region']."'";
  $result2=mysql_query($query);
  if (mysql_num_rows($result2)>0){
  $ciudades.="<select style='display:none' id='".$row['id_region']."' name='ciudad'>";
  while ($row2=mysql_fetch_array($result2)){
    $ciudades.="<option value='".$row2['id_ciudad']."'>".$row2['nom_ciudad']."</option>";
  }
  $ciudades.="</select>";}else{$ciudades.="<b style='display:none' id='".$row['id_region']."'>No Disponible</b>";}
}

?>
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
echo $ciudades;
?>
<input type="text" name='q' id='q' onkeypress="return(validar(event));" onkeydown="enter(event,this);"><input type='button' value='Buscar' onClick='return(comprobar(this.form));'>
<input type='button' name='nuevo' value='Nuevo' onClick='cargar("x",this.form.q.value,this.form.ciudad.value)' disabled>
</form></center>
<script>
function comprobar(formu){

if (formu.reg.value==0){alert('Debe seleccionar Region y Ciudad \nantes de buscar');return false;}
formu.nuevo.disabled=false;
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