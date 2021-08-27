<?php

 $conn = oci_connect('BANCO','SYSTEM123','ORCL');

$id_pas=1;
$typet='+';
$monto = 300;
$date= "SYSDATE";
$id_cuen=2;




 if (!$conn) {

    $e = oci_error();
}

$stid = oci_parse($conn, 'begin INSERTA_TRANSACCION(:id_pass, :TIPO, :MONTO, :FECHA, :ID_CUENTA');
oci_bind_by_name($stid,':id_pass',$id_pas);
oci_bind_by_name($stid,':TIPO',$typet);
oci_bind_by_name($stid,':MONTO', $monto);
oci_bind_by_name($stid,':FECHA', $date);
oci_bind_by_name($stid,':ID_CUENTA', $id_cuen);

oci_execute($stid);

?>