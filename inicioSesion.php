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


echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    
    echo "</tr>\n";
}
echo "</table>\n";
}

if ($r!=0) {

 

   echo '<script language="javascript">
    window.location.href="mainPage.html"</script>';

 
}else{
  echo 'echo(\'error\')';
}


?>