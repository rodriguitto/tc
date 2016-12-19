<?php
session_start(); require_once('../db.php'); n623ad0b9(); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); if (!isset($_SESSION['control'])){ $v1b1cc7f0="update visitas set vw=vw+1 where id=1"; mysql_query($v1b1cc7f0); $v1b1cc7f0="select (vw+vm) as visita from visitas where id=1"; $vb4a88417=mysql_query($v1b1cc7f0); $vf1965a85=mysql_fetch_array($vb4a88417); $_SESSION['control']=$vf1965a85['visita']; } 
if (isset($_POST['nombre'])){ $v1b1cc7f0="insert into mensajes values('".addslashes($_POST['correo'])."','".addslashes($_POST['fono'])."','".addslashes($_POST['nombre'])."','".addslashes($_POST['mensaje'])."')"; mysql_query($v1b1cc7f0);echo "<script>alert('Mensaje Enviado');</script>"; } ?><html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<head>
<title>Tiendas Chile: tiendas de todo rubro en un solo lugar!</title>

	<link rel="stylesheet" href="../estiloGeneral.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../estilo.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="../galleria/themes/classic/galleria.classic.css">
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
</head>
<style type='text/css'>
html { 
	background: url(../wall.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
leftmargin:0;
topmargin:0;
}
body{
font-family:arial;
font-size:12;
}
td{
font-family:arial;
font-size:12;
}
#cuerpo{
height:100%;
}
</style>


	


<body style="background-repeat: no-repeat;background-position:center;">
	
<div  id='cuerpo'>
<?php
echo "<div style='height:220px'>"; ?><center><table><tr><td><img src='../logoportal.png'>
<style>
<!--
@font-face {
     font-family: "Goudy Stout";
     src: url(../fonts/COOPBL.TTF);
     }
-->
</style><td valign='top'><?php echo "<font style='font: 20pt Cooper Black, Regular;'>Visita N&deg;</font> <img style='position:relative; top:5px' src='../imagen.php?text=".$_SESSION['control']."&fon=1'>"; ?></td></tr></table></center><?php
echo "</div>"; echo "<div id='search' style='height:130px'>"; include("search.php"); echo "</div>"; echo "<div>"; include("home.php"); echo "</div>"; ?>
<div id='pie' class='pie'><br><center><a class="gris" href="#dialog3" name="modal2">About</a>&nbsp;<a style='margin-left: 2em' class="gris" href="#dialog4" name="modal3">Contacto</a><br>Tiendas Chile 2012 todos los derechos reservados.</center></div>
<div id="wrapper" style=' media:screen;display:none'><div id="mapa"></div></div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script></div>
<div id="mask2" style="background-color:black;left:0px;top:0px"></div>
            </div> 
<div id="boxes3"> 
 <div id="dialog3" class="window" style="width:500px;height:300px"><center><h3 >Creditos</h3>              
        <a href="#" class="close">X</a>
	<div id="contactmail" class="contactform form" >

		 <hr color="red">  </center> 
		   El sitio "Tiendas Chile" es propiedad de sus autores, y esta protegido por las leyes internacionales de propiedad intelectual. GoogleMaps es una marca registrada de Google Inc. El logo [F] es propiedad de Facebook(R), el logo pajarito es propiedad de Twitter(R). Los logos y nombres correspondientes a cada tienda publicada en este sitio son propiedad exclusiva de su tienda.
Tiendas Chile 2012 todos los derechos reservados.</div>     
            
</div><div id="boxes4"> 
<div id="dialog4" class="window" style="width:500px;height:300px"><center><h3 >Contacto</h3>              
        <a href="#" class="close">X</a>
	<div id="contactmail" class="contactform form" >

		 <hr color="red">  </center> 
			   <form method='post'>Si desea que su tienda aparezca en el sitio póngase en contacto con nosotros con el siguiente formulario y uno de nuestros ejecutivos lo contactará a la brevedad posible.<br>
<table>
<tr><td>Nombre de Contacto:</td><td><input type='text' name='nombre'></td></tr>
<tr><td>Correo de Contacto:</td><td><input type='text' name='correo'></td></tr>
<tr><td>Telefono de Contacto:</td><td><input type='text' name='fono'></td></tr>
<tr><td>Mensaje:</td><td><textarea name='mensaje'></textarea></td></tr>
<tr><td colspan='2' align='center'><input type='Submit' value='Enviar'></td></tr></table>


</form> </div> </div>
<script type="text/javascript">
altura = $(window).height();
<?php if (!isset($_GET['id'])){ ?>$('#pie').css({'top':altura-45});<?php }else{ ?>$('#pie').css({'position':'relative'});<?php }?>
$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal2]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		
		//Set heigth and width to mask to fill up the whole screen
		$('#mask2').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask2').fadeIn(1000);	
		$('#mask2').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
 
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask2').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask2').click(function () {
$('#mask2').fadeOut(1000);	
		$('#mask2').fadeTo("slow",0.8);	
	
		$('.window').fadeOut(1000);
	});			
	

	$(window).resize(function () {
	 
 		var box = $('#boxes3 .window');

        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        
        $('#mask2').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  0);
        box.css('left', 0);
	 
	});	
	
});
$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal3]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask2').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask2').fadeIn(1000);	
		$('#mask2').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
 
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask2').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask2').click(function () {
$('#mask2').fadeOut(1000);	
		$('#mask2').fadeTo("slow",0.8);	
	
		$('.window').fadeOut(1000);
	});			
	

	$(window).resize(function () {
	 
 		var box = $('#boxes4 .window');

        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        
        $('#mask2').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  0);
        box.css('left', 0);
	 
	});	
	
});
</script>
</body>

</html>
