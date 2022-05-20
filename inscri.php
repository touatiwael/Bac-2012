<?php
$nu = $_POST["T1"];
$n = $_POST["T2"];
$p = $_POST["T3"];
$g = $_POST["R1"];
$niveau = $_POST["D1"];

mysql_connect("localhost","root","");
mysql_select_db("bd221");

$req = mysql_query("SELECT Num FROM Eleve Where Num = '$nu'");
$res = mysql_num_rows($req);
if ($res == 1) {
    echo "Eleve deja inscrit";
}
else {
    $req1 = mysql_query("INSERT INTO Eleve Values ('$nu','$n','$p','$g','$niveau','N')");
    $res1 = mysql_affected_rows();
    if ($res1 == 1 ) {
        echo " Mrygle sahbie "  ;
    }


}



?>