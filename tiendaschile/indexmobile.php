<?php
session_start(); require_once('db.php'); n623ad0b9(); if (!isset($_SESSION['control'])){ $v1b1cc7f0="update visitas set vm=vm+1 where id=1"; mysql_query($v1b1cc7f0); $v1b1cc7f0="select (vw+vm) as visita from visitas where id=1"; $vb4a88417=mysql_query($v1b1cc7f0); $vf1965a85=mysql_fetch_array($vb4a88417); $_SESSION['control']=$vf1965a85['visita']; } ?><html>

<head>
<title>Tiendas Chile: tiendas de todo rubro en un solo lugar!</title>
</head>
<style type='text/css'>
html { 
	background: url(wall.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
leftmargin:0;
topmargin:0;
}
#cuerpo{

height:100%;
}
#search {
    width: 100%;
}
</style>
<body style="background-repeat: no-repeat;background-position:center;">

<div  id='cuerpo' style=''>
<?php
echo "<div style='height:80px'>"; ?><center><img src='logoportalmobile.png'><br><?php echo "<font style='font: 20pt Cooper Black, Regular;'>Visita N&deg;</font> <img style='position:relative; top:5px' src='imagen.php?text=".$_SESSION['control']."&fon=1'>"; ?></center><?php
echo "</div>"; echo "<div id='search' style='height:80px'>"; include("searchmobile.php"); echo "</div>"; echo "<div style='height:1000px'>"; include("homemobile.php"); echo "</div>"; ?></div>
</body>

</html>
