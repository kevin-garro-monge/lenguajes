<?php

// Aquí Kevin debes usar tus credenciales de SQL Developer
/*
$conn = oci_connect('BANCO','SYSTEM123','ORCL');

if (!$conn) {
  // echo '1';
    $e = oci_error();
  //  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}*/
/*
$stid = oci_parse($conn, 'SELECT * FROM USUARIO');

oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";*/

?>