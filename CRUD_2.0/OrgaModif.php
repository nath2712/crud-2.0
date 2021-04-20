<?php
	
	include "Script/header.php";
	include_once "Script/Fonction.php";
	
	$db=new MysqlConnect();  
	$client=$db->getOneData($_GET["numOrga"]);
	
	
?>

	<div>
	<?php
		$NomOrga =$client->getName();
		echo "<div><h1 class = 'centre'>Organisation de ".$client->getName()." ";
		echo "</h1></div>"; 
		echo "<div>";
		echo "<p>Modifier l'orga ?</p>";
		echo "</div>";
		echo "<form name='input' action='modif.php' method='post'>";	
		echo "<label for='domain' class='col-sm-2 col-form-label blanc'>Nom de l'organisation:</label> <input type='text' name='name' value =". $client->getName() .">";
		echo "<br>";
		echo "<label for='domain' class='col-sm-2 col-form-label blanc'>Nom de domaine de l'organisation:</label> <input type='text' name='domain' value =". $client->getDomain() .">";
		echo "<br>";
		echo "<label for='domain' class='col-sm-2 col-form-label blanc'>Aliases: </label> <input type='text' name='aliases' value =". $client->getAliases() .">";
		echo " <input type='hidden' name='id' value =".$_GET["numOrga"] .">";
		
	?>
	</div>



<input type="submit" value="Modifier">
</form>

<br>
<a href='suppr.php?numOrga=$_GET[numOrga]'> Supprimer définitivement l'organisation </a>

<?php
	
	include "Script/footer.php";

?>