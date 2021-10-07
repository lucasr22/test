<?php
include "banco01.php";




	

	$nome=mysqli_escape_string($conm,$_POST["nome"]);
	$senha=mysqli_escape_string($conm,$_POST["senha"]);

	$shl="SELECT nome,senha FROM usuario WHERE nome='$nome' AND senha='$senha'";
	
	$linha=mysqli_query($conm,$shl);
	
	if($pl=mysqli_num_rows($linha)>0){
		
		header("location:/sistemabb/sistema/dashboard.php");
		
	}

	else{
		header("location:/sistemabb/index.html");
	}

	


var_dump($_POST);

















?>