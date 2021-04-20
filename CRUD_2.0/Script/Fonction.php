<?php
require 'Classe.php';	
class MysqlConnect{
	
	private $pdo;
	
	function __construct(){ 
	try {
			 
		  $this->pdo = new PDO("mysql:host=localhost;dbname=groups","root","");
		 
		  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();}
	return $this->pdo;} 
	
	
	
	function getPdo(){
	return $this->pdo;}
	
	function getAllData(){
	
		$req=$this->pdo->query('SELECT * FROM organization');
		$result=$req->fetchAll(); 
				$retour=array();
				
		foreach($result as $value){ 
					array_push($retour,new Cutilisateur($value)); 
				}
		return $retour; 
		}
	function getOneData($id){ 
		
		$req=$this->pdo->query("SELECT * FROM organization WHERE id= '$id'");
		
		$result = $req->fetch(PDO::FETCH_ASSOC); 
		
		
		$leClient=new Cutilisateur($result);
		return $leClient;
    }
	function effacer($id){ 
		
		$req=$this->pdo->query("DELETE FROM organization WHERE id= '$id'");
		
		//$result = $req->fetch(PDO::FETCH_ASSOC); 
		
		
		//$leClient=new Cutilisateur($result);
		//return $leClient;
    } 
	function update($name,$domain,$aliases,$id){ 
		
		$req=$this->pdo->query("UPDATE organization SET name ='$name', domain='$domain', aliases='$aliases' WHERE id= '$id'");
		
		
    } 
	function NouvOrga($name,$domain,$aliases){ 
		
		$req=$this->pdo->query("INSERT INTO organization (name, domain, aliases) VALUES ('$name', '$domain', '$aliases')");
		
		
    } 
}


$db=new MysqlConnect(); 
$resultData=$db->getAllData();
?>