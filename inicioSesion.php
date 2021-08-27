<?php




$conn = oci_connect('BANCO','SYSTEM123','ORCL');


$mailC ='jwalker12@gmail.com';
$password ='PW12345PW';

if (!$conn) {

    $e = oci_error();
}


$stid = oci_parse($conn, 'begin :r := LOGIN(:EMAIL, :CLAVE); end;');
oci_bind_by_name($stid, ':EMAIL', $mailC);
oci_bind_by_name($stid, ':CLAVE', $password);
oci_bind_by_name($stid, ':r', $r, 40);


oci_execute($stid);




if ($r!=0) {

 

   echo '<script language="javascript">
    window.location.href="mainPage.html"</script>';

 
}else{
  echo 'echo(\'error\')';
}


?>