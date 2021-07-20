<?php

$connetion = oci_connect('HR','123','orcl');
 //echo '<script language="javascript">alert("BIENVENIDO ");
  //window.location.href="login.php"</script>';

if(isset($_POST['IniciarSecion']))
{
 echo
 
$variableCualquera

$CORREO = $_POST['iCorreo'];
$PASS = $_POST['iPass'];


$stid = oci_parse($conn, 'begin :r := LOGIN(:CORREO, :PASS); end;');
oci_bind_by_name($stid, ':CORREO', $CORREO);
oci_bind_by_name($stid, ':PASS', $PASS);
oci_bind_by_name($stid, ':r', $r, 40);


oci_execute($stid);



if ($r!=0) {

 

  echo '<script language="javascript">alert("BIENVENIDO ");
  window.location.href="login.php"</script>';

 
}
}

?>