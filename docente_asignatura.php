<?php
session_start();
//error_reporting(0);
if(isset( $_SESSION['correo'])){
    $nombre=$_SESSION['correo'];
    $rol=$_SESSION['rol'];
    $c="Administrador";
}else{
echo 'usted no tiene autorizacion';
die();
}
if ($rol==$c){
    
}else{
    
    function popup($vMsg,$vDestination) {
        echo("<html>\n");
        echo("<head>\n");
        echo("<title>System Message</title>\n");
        echo("<meta http-equiv=\"Content-Type\" content=\"text/html;
        charset=iso-8859-1\">\n");
         
        echo("<script language=\"javascript\" type=\"text/javascript\">\n");
        echo("alert('$vMsg');\n");
        echo("window.location = ('$vDestination');\n");
        echo("</script>\n");
        echo("</head>\n");
        echo("<body>\n");
        echo("</body>\n");
        echo("</html>\n");
        exit;
        }      
    popup('El usuario no tiene permiso para entrar a esta página','opcion.php'.$qr);    
}

require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db, $port);

    if($conexion->connect_error) die("Error fatal");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section class="form-registro">
      <h5>INGENIERIA DE SISTEMAS UNAJMA</h5>
</br>
      <form name="sigup" action="designar_curso.php" method="POST">
     Codigo Asignatura:<input class="Rcontrols" type="text" name="codigoasignatura" value="" placeholder="IIAC53">
     <br>
     Codigo_Docente  :<input class="Rcontrols" type="text" name="codigodocente" value="" placeholder="2005520182">
     <br>
     Semestre  :<input class="Rcontrols" type="text" name="semestre" value="" placeholder="I,II">
     <br>
      <br>
      <center><input class="Rbuttons" type="submit" name="" value="Designar curso" ></center>
      <br>
      <a href ="vercursos.php" target="_blank">ver cursos</a></br>
      <a href ="verdocentes.php" target="_blank">ver docente</a>
      </form>
    
    </section>
    
  </body>
</html>