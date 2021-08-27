<?php



$conn = oci_connect('BANCO','SYSTEM123','ORCL');

$ID=1;

if (!$conn) {

    $e = oci_error();
 
}

$stid = oci_parse($conn, 'SELECT * FROM HISTORIAL_TRANSACION WHERE id_usuario = :comp');
oci_bind_by_name($stid, ':comp', $ID);

oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";


?>