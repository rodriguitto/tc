<?php
require_once("../db.php"); n623ad0b9(); ?>

<center>
<form method='get'>
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
function comprobar(formu){

if (formu.reg.value==0){alert('Debe seleccionar Region y Ciudadnantes de buscar');return false;}
return true;
}
</script>
<?php
echo $vfcd42d83; ?>
<input type="text" name='q' id='q' onkeypress="validar(event)"><input type='submit' value='Buscar' onClick='return(comprobar(this.form));'>
</form></center>
<center id='searc'>

<?php
if (isset($_GET['q'])){ $v7694f4a6=str_replace(',',' ',$_GET['q']); $v5035d74e=explode(' ',$v7694f4a6); $vb068931c=""; $ve4d23e84=""; $v73600783=""; $v572d4e42 = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; if (isset($_GET['id'])){$v572d4e42=str_replace('&id='.$_GET['id'],'',$v572d4e42);} foreach ($v5035d74e as $v92eb5ffe){ if ($vb068931c!="")$vb068931c.=" or "; $vb068931c.="UPPER(nom_tienda) like UPPER('%".$v92eb5ffe."%')"; if ($v73600783!="")$v73600783.=" or "; $v73600783.="UPPER(dir_tienda) like UPPER('%".$v92eb5ffe."%')"; if ($ve4d23e84!="")$ve4d23e84.=" or "; $ve4d23e84.="UPPER(nom_tag) like UPPER('%".$v92eb5ffe."%')"; } $v1b1cc7f0="select * from tiendas where id_ciudad='".$_GET['ciudad']."' and ((".$vb068931c.") or (".$v73600783.")  or tags in (select '%'+id_tag+'%' from tags where (".$ve4d23e84."))) "; $vb4a88417=mysql_query($v1b1cc7f0); ?>
<table width='900px' id='tabla'>
<?php
$v5e0bdcbd=0; $v3cbec8a1=""; while ($vf1965a85=mysql_fetch_array($vb4a88417)){ if ($v5e0bdcbd==0){echo "<tr>";} echo "<td width='150px'><button style='width:130px' onClick=\"window.location.href='".$v572d4e42 ."&id=".$vf1965a85["id_tienda"]."'\">".$vf1965a85["nom_tienda"]."</button></td>"; $v5e0bdcbd++; if ($v5e0bdcbd==7){echo "</tr>";$v5e0bdcbd=0;} } if ($v5e0bdcbd<7){ while ($v5e0bdcbd<7){ echo "<td width='150px'>&nbsp;</td>"; $v5e0bdcbd++; }echo "</tr>";} ?>

</table>
<?php } ?>

</center>
