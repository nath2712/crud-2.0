<?php

class Cutilisateur {
	
	public $id; 
	private $name; 
	private $domain; 
	private $aliases;

	
	public function __construct(array $donnees){ 
		$this->id=$donnees['id']; 
		$this->name=$donnees['name']; 
		$this->domain=$donnees['domain']; 
		$this->aliases=$donnees['aliases'];

	}
	
	//Getters
	public function getId() {
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getDomain() {
		return $this->domain;
	}
	public function getAliases() {
		return $this->aliases;
	}
	
	//Setters
	public function setId($id) {
		$this->id = $id;
	}
	public function setName($name){
		$this->name=$name;
	}
	public function setDomain($domain){
		$this->domain=$domain;
	}
	public function setAliases($aliases){
		$this->aliases=$aliases;
	}


}

?>