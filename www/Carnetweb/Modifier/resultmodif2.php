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


if(isset($_POST['okmaj']))
{	
	$requeteid = $_POST['id'];
	if(isset($_POST['id'])){
		if(isset($_POST['ville'])){
			$requete = $_POST['ville'];
			$retour = $bdd->prepare("Update mysql.carnet set ville = ? where idContact = ?");
			$retour->execute(array($requete,$requeteid));
		}
		if(isset($_POST['codepostal'])){
			$requete = $_POST['codepostal'];
			$retour = $bdd->prepare("Update mysql.carnet set codepostal = ? where idContact = ?");
			$retour->execute(array($requeteid,$requeteid));
		}
		if(isset($_POST['pays'])){
			$requete = $_POST['pays'];
			$retour = $bdd->prepare("Update mysql.carnet set pays = ? where idContact = ?");
			$retour->execute(array($requeteid,$requeteid));
		}
		if(isset($_POST['tel'])){
			$requete = $_POST['tel'];
			$retour = $bdd->prepare("Update mysql.carnet set tel = ? where idContact = ?");
			$retour->execute(array($requeteid,$requeteid));
		}
		
	}
	
}
elseif(isset($_POST['ok']))
{
	if(isset($_POST['nom'])){
		$requete1 = $_POST['nom'];
	}
	else{
		$requete1 ="NULL";
	}
	
	if(isset($_POST['prenom'])){
		$requete2 = $_POST['prenom'];
	}
	else{
		$requete2 ="NULL";
	}
	
	if(isset($_POST['ville'])){
		$requete3 = $_POST['ville'];
	}
	else{
		$requete3 ="NULL";
	}
	
	if(isset($_POST['pays'])){
		$requete4 = $_POST['pays'];
	}
	else{
		$requete4 ="NULL";
	}
	
	if(isset($_POST['codepostal'])){
		$requete5 = $_POST['codepostal'];
	}
	else{
		$requete5 ="NULL";
	}
	
	if(isset($_POST['tel'])){
		$requete6 = $_POST['tel'];
	}
	else{
		$requete6 ="NULL";
	}
	
	$retour = $bdd->prepare("Insert into mysql.carnet (nom,prenom,ville,pays,codepostal,tel) values (?,?,?,?,?,?)");
	$retour->execute(array($requete1,$requete2,$requete3,$requete4,$requete5,$requete6));
}
elseif(isset($_POST['oksupp'])){
	if(isset($_POST['id'])){
		$retour = $bdd->prepare("DELETE FROM mysql.carnet WHERE idContact = ?");
		$retour->execute(array($_POST['id']));
	}
}
else
{
	header("Location: modifier.php");
}

$bdd=null;
?>
<A href = "/Carnetweb/formulaire.php">Menue</A>
</body>