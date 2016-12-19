<?php
if (($_SERVER['REMOTE_ADDR']!='181.72.11.104')&&($_SERVER['REMOTE_ADDR']!='190.47.70.117')){exit();}
require_once('../db.php') ;
n623ad0b9();

$tag=',';
foreach ($_POST['tags'] as $tags){
  $tag.=$tags.',';}
if (isset($_POST['tienda'])){
$id=$_POST['tienda'];
}else{
$query="insert into tiendas(nom_tienda) values('nom')";
mysql_query($query);
$id=mysql_insert_id();
}

$query="update tiendas set tags='".$tag."',nom_tienda='".$_POST['nombre']."',res_tienda='".$_POST['res']."',face_tienda='".$_POST['face']."',twit_tienda='".$_POST['twit']."',";
$query.="dir_tienda='".$_POST['dir']."',dir_anex_tienda='".$_POST['dir_anex']."',horario_tienda='".$_POST['hor']."',web_tienda='".$_POST['web']."',fon_tienda='".$_POST['fon']."',";
$query.="ll_tienda='".$_POST['ll']."',id_ciudad='".$_POST['ciudad']."' where id_tienda='".$id."'";

mysql_query($query);
header("location: editor.php");
?>
