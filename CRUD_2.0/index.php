<?php
	
	include "Script/header.php";
	include_once "Script/Fonction.php";
?>


<h1 class = 'centre'> Les organisations enregistré </h1>

		<table class="table table-dark table-striped">
				<tr>  
				
					<th> Nom de l'organisation </th>
					<th> Mail de l'organisation </th>
					<th> Aliases de l'organisation </th>
					<th> Modifier / Supprimer </th>
				</tr>
			<?php
			
			foreach($resultData as $cli){ 
			echo "<tr> ";

				echo "<td>";
					echo $cli->getName() . " ";
				echo "</td >";
				echo "<td>";
					echo $cli->getDomain(). " ";
				echo "</td >";
				echo "<td>";
					echo $cli->getAliases();		
				echo "</td >";
				echo "<td>";
					echo "<a href='OrgaModif.php?numOrga=$cli->id'> Modifier / Supprimer </a>";		
				echo "</td >";
				
			echo "</tr>";
			}
			
			?>

		</table>

<a href='OrgaAjout.php'> Ajouter une nouvelle organisation </a>

<?php
	
	include "Script/footer.php";

?>
