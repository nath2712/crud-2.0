<?php
	
	include "Script/header.php";
	include_once "Script/Fonction.php";
	
	$db=new MysqlConnect();  

	
	
?>

<div>
	<?php
		
		echo "<div><h1 class = 'centre'>Ajouter une organisation ?";
		echo "</h1></div>";
		echo "<br>";		
		echo "<div";
		echo "</div>";
		echo "<form name='input' action='Ajouter.php' method='post' class='row g-3'>";	
		echo "<div class='row mb-3'> <label for='name' class='col-sm-2 col-form-label blanc'>Nom de l'organisation: </label><input class='form-control' type='text' name='name' > </div>";
		
		echo "<div class='row mb-3'> <label for='domain' class='col-sm-2 col-form-label blanc'>Nom de domaine de l'organisation:</label> <input class='form-control' type='text' name='domain' > </div>";
		
		echo "<div class='row mb-3'><label for='domain' class='col-sm-2 col-form-label blanc'>Aliases: </label> <input class='form-control' type='text' name='aliases'></div>";
		echo " <input type='hidden' name='id' >";

	?>
	
<input type="submit" value="Ajouter">
</form>
</div>

<div>
	<a href='index.php'> Retourner sur la liste </a>
<div>




<?php
	
	include "Script/footer.php";

?>