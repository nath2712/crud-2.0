<?php
	
	include "Script/header.php";
	include_once "Script/Fonction.php";
	
	$db=new MysqlConnect();  
	$client=$db->NouvOrga($_POST["name"],$_POST["domain"],$_POST["aliases"]);

		echo "<div class = 'centre'><h1>Organisation   ";
		echo "Ajouter</h1></div>";
	
	
?>
<div>
<a href='index.php'> Retourner sur la liste </a>
<div>




<?php
	
	include "Script/footer.php";

?>