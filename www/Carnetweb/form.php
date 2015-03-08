<html>
<head>
<title></title>
</head>
<body>
<?php

if(isset($_POST['Form']) and isset($_POST['ok'])){
	if($_POST['Form'] == "modif"){echo "mod";
		header("Location: Modifier/modifier.php");
		
		die();
	}
	else{
		header("Location: Afficher/afficher.php");
		echo "aff";
		die();
	}


}

?>

</body>

</html>