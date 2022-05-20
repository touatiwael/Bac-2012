<?php
$nu = $_POST["T1"];
$g = $_POST["R1"];

mysql_connect("localhost","root","");
mysql_select_db("bd221");

$req = mysql_query("SELECT Num FROM Eleve Where Num = '$nu'");
$res = mysql_num_rows($req);
if ($res == 0) {
    echo "Vous n'etes pas inscrit";
}
else {
    $req1 = mysql_query("SELECT NumE FROM vote Where NumE = '$nu'");
    $res1 = mysql_num_rows($req1);
    if ($res1 == 1) {
        echo "Eleve deja vote";    
    }
    else {
        $req2 = mysql_query("INSERT INTO vote Values ('$nu','$g')");
        $res2 = mysql_affected_rows();
        if ($res2 == 1 ) {
        echo " Mrygle sahbie voted <3 "  ;
        }
        
    }
}

?>