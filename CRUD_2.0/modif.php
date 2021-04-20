<?php
	
	include "Script/header.php";
	include_once "Script/Fonction.php";
	
	$db=new MysqlConnect();  
	$client=$db->getOneData($_POST["id"]);
		echo "<div><h1 class = 'centre'>Organisation  ".$client->getName()." ";
		echo "Modifier</h1></div>";
	$client=$db->update($_POST["name"],$_POST["domain"],$_POST["aliases"],$_POST["id"]);
	
?>
<div>
<a href='index.php'> Retourner sur la liste </a>
<div>




<?php
	
	include "Script/footer.php";

?>