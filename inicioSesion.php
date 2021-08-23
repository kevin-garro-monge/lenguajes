<?php

$connetion = oci_connect('BANCO','SYSTEM123','ORCL');
 //echo '<script language="javascript">alert("BIENVENIDO ");
  //window.location.href="login.php"</script>';

if(isset($_POST['iLogin']))
{
 
 

try{
 $CORREO = $_POST['usuario'];
$PASS = $_POST['cont']; 
}catch(exeption $e){
  echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

echo '1'


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