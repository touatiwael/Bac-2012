<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<table border="1" width="100%">
	<tr>
		<td width="689">Nom</td>
		<td width="348">Prenom</td>
		<td>Votes</td>
	</tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("bd221");

$req = mysql_query("SELECT * FROM Eleve WHERE Candidat = 'O'"); 
while ($t = mysql_fetch_array($req))
{
$Num = $t['Num'];
$req1 = mysql_query("SELECT count(NumE) AS 'N' FROM vote WHERE NumE = '$Num'"); 
$t1 = mysql_fetch_array($req1);
$votes = $t1['N'];
?>
	<tr>
		<td width="689"><?php echo $t['Nom'] ; ?></td>
		<td width="348"><?php echo $t['Prenom'] ; ?></td>
		<td><?php echo "$votes" ?></td>
	</tr>
<?php
}	



?>

</table>

</body>

</html>
