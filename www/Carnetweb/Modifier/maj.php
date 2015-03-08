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

$retour=$bdd->query("SELECT * FROM mysql.carnet ORDER BY nom");
$retour->setFetchMode(PDO::FETCH_ASSOC);

?> 
<center>
<table border= "5">
<CAPTION>Carnet d'adresse</CAPTION>
<tr>
<th>Id</th>
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
		echo $result['idContact'];
		echo '</td>';
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

<center>

<form action="resultmodif2.php" method = POST>
	<input type="text" placeholder="Entrer l'identifiant du contact à modifier" name="id" />
	<input type="text" placeholder="Entrer la nouvelle ville" name = "ville"/>
	<input type="text" placeholder="Entrer le nouveau code postal" name= "codepostal"/>
	<input type="text" placeholder="Entrer le nouveau pays" name = "pays"/>
	<input type="text" placeholder="Entrer le nouveau numero de telephone" name="tel"/>
	<input type="submit" value="Ok" name="okmaj"/>
</form>

 </center>
 <A href = "/Carnetweb/Modifier/modifier.php">Retour</A> </br></br>
<A href = "/Carnetweb/formulaire.php">Menue</A>
</body>
</html>