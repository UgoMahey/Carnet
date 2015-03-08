<html>
<head>
<title></title>
</head>
<body>
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die();
}


if(isset($_POST['req']) and isset($_POST['ptous']))
{
	$requete = $_POST['req'];
	$retour = $bdd->prepare("SELECT * FROM mysql.carnet WHERE nom = ? ");
	$retour->execute(array($requete));
}
elseif(isset($_POST['tous']))
{
	$retour=$bdd->query("SELECT * FROM mysql.carnet ORDER BY nom");
	
}
else
{
	header("Location: modifier.php");
}
$retour->setFetchMode(PDO::FETCH_ASSOC);

?> 
<center>
<table border= "5">
<CAPTION>Carnet d'adresse</CAPTION>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Ville</th>
<th>Code Postal</th>
<th>Pays</th>
<th>Numero de telephone</th>
</tr>
<?php 
	while($result = $retour->fetch()){
		echo '<tr>';
		echo '<td>';
		echo $result['nom'];
		echo '</td>';
		echo '<td>';
		echo $result['prenom'];
		echo '</td>';
		echo '<td>';
		echo $result['ville'];
		echo '</td>';
		echo '<td>';
		echo $result['codepostal'];
		echo '</td>';
		echo '<td>';
		echo $result['pays'];
		echo '</td>';
		echo '<td>';
		echo $result['tel'];
		echo '</td>';
		echo '</tr>'; 
		
	}
$bdd=null;
?>
</table>
</center>
<A href = "/Carnetweb/formulaire.php">Menue</A>
</body>
</html>