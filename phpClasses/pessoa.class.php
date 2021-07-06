<?php
Class Pessoa{
	var $nome;
	var $email;
	var $telefone;
	var $endereco;
	
	
	function setNome($nome){
		$this->nome = $nome;
	}	
	function getNome(){
		return ($this->nome);
	}
	
	function setTelefone($telefone){
		$this->telefone = $telefone;		
	}
	function getTelefone(){
		return ($this->telefone);
	}
	
	function setEmail($email){
		$this->email = $email;
	}	
	function getEmail(){
		return($this->email);
	}
	
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}	
	function getEndereco(){
		return ($this->endereco);
	}
	
	
	function __construct ($nome,$telefone,$email,$endereco){
				
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setEmail($email);
		$this->setEndereco($endereco);
	
		//echo '<h1>Cadastro Realizado Com Sucesso!!</h1>';
		//echo '<h2>Abaixo os Dados Cadastrados</h2>';
		//echo '<br>';		
				
		//$this->imprimirDados();
	}
	
	//function __destruct(){
	//	echo '<BR><BR>O Objeto <strong>' . $this->getNome() .'</strong> foi finalizado..... ';	
	//}

	/*
	
	function imprimirDados(){

		echo '<strong>Nome: </strong>'.$this->getNome();
		echo '<br>';
		echo '<strong>Telefone: </strong>' . $this->getTelefone();
		echo "<br>";
		echo '<strong>Email: </strong>'.$this->getEmail();
		echo '<br>';
		echo '<strong>endereco : </strong>'.$this->getEndereco();
		echo "<br>";		
		
	}	

	*/
	
}

?>

