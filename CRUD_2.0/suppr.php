<?php
	
	include "Script/header.php";
	include_once "Script/Fonction.php";
	
	$db=new MysqlConnect();  
	$client=$db->getOneData($_GET["numOrga"]);
		echo "<div><h1 class = 'centre'>Organisation  ".$client->getName()." ";
		echo "effacer</h1></div>";
	$client=$db->effacer($_GET["numOrga"]);
	
?>
<div>
<a href='index.php'> Retourner sur la liste </a>
<div>




<?php
	
	include "Script/footer.php";

?>