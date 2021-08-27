<?php




$conn = oci_connect('BANCO','SYSTEM123','ORCL');


$ced ='121212121';
$password ='123';
$nombre ='Jose';
$apellidoP ='Prado';
$apellidoS ='Orozco';
$telefonoo = 87654321;
$mailC= 'jPraOroz@rmail.com';
 
if (!$conn) {

    $e = oci_error();
}


$stid = oci_parse($conn, 'begin PR_REGISTRO(:ced, :CLAVE, :NAME, :app, :aps, :tel, :EMAIL); end;');
oci_bind_by_name($stid, ':ced', $ced);
oci_bind_by_name($stid, ':CLAVE', $password);
oci_bind_by_name($stid, ':NAME', $nombre);
oci_bind_by_name($stid, ':app', $apellidoP);
oci_bind_by_name($stid, ':aps', $apellidoS);
oci_bind_by_name($stid, ':tel', $telefonoo);
oci_bind_by_name($stid, ':EMAIL', $mailC);




oci_execute($stid);






 

   echo '<script language="javascript">
    window.location.href="mainPage.html"</script>';

 

  


?>