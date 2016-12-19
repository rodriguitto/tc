<?php
require_once("db.php"); n623ad0b9(); if (isset($_GET['q'])){ $v7694f4a6=str_replace(',',' ',$_GET['q']); $v5035d74e=explode(' ',$v7694f4a6); $vb068931c=""; $ve4d23e84=""; $v73600783=""; foreach ($v5035d74e as $v92eb5ffe){ if ($vb068931c!="")$vb068931c.=" or "; $vb068931c.="UPPER(nom_tienda) like UPPER('%".$v92eb5ffe."%')"; if ($v73600783!="")$v73600783.=" or "; $v73600783.="UPPER(dir_tienda) like UPPER('%".$v92eb5ffe."%')"; if ($ve4d23e84!="")$ve4d23e84.=" or "; $ve4d23e84.="UPPER(nom_tag) like UPPER('%".$v92eb5ffe."%')"; } $v1b1cc7f0="select * from tiendas where id_ciudad='".$_GET['ciudad']."' and ((".$vb068931c.") or (".$v73600783.")  or tags in (select '%'+id_tag+'%' from tags where (".$ve4d23e84."))) "; $vb4a88417=mysql_query($v1b1cc7f0); ?>
var tabla=document.createElement('table');
tabla.id='tablas';tabla.width='300px';
var row;
var cell;
var tex;


<?php
$v5e0bdcbd=0; $v3cbec8a1=""; while ($vf1965a85=mysql_fetch_array($vb4a88417)){ if ($v5e0bdcbd==0){$v3cbec8a1.="<tr>";} $v3cbec8a1.="<td width='150px'><button style='width:130px' onClick=cargar(".$vf1965a85["id_tienda"].")>".$vf1965a85["nom_tienda"]."</button></td>"; $v5e0bdcbd++; if ($v5e0bdcbd==2){$v3cbec8a1.="</tr>";$v5e0bdcbd=0;} } while ($v5e0bdcbd<2){ $v3cbec8a1.="<td width='150px'>&nbsp;</td>"; $v5e0bdcbd++; } echo "tabla.innerHTML='".addslashes($v3cbec8a1)."';"; ?>
document.getElementById('home').appendChild(tabla);
<?php }else{ ?>

<center>
<form method="post">
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
<input type="text" name='q' id='q'><input type='button' value='Buscar' onClick='cargar_tabla(this.form.ciudad.value);'>
</form></center>
<script>
function cargar_tabla(ciuda)
{
   var head= document.getElementsByTagName('head')[0];
   var script= document.createElement('script');
   script.type= 'text/javascript';
   //script.onreadystatechange= function () {probar[indice]();}
   //script.onload= function () { probar[indice]();}
   script.src=  "searchmobile.php?q="+document.getElementById('q').value+"&ciudad="+ciuda;
   head.appendChild(script);document.getElementById('home').removeChild(document.getElementById('tablas'));
}</script><center id='search'></center>
<?php } ?>