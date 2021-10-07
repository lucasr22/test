<?php
include "banco01.php";

if(isset($_POST["ngt"])){
		$nome=mysqli_escape_string($conm,$_POST["nome0"]);
		$email=mysqli_escape_string($conm,$_POST['email0']);
		$celula=mysqli_escape_string($conm,$_POST['celular0']);
	
		$sql1="INSERT INTO funcionario(nome, email,telefone)
		VALUES('$nome','$email','$celula')";

		mysqli_query($conm,$sql1);
		
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>painel</title>
	<link rel="stylesheet" type="text/css" href="/sistemabb/css2/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body class="conteiner-fluid">

<div id="dashboard">
	<h2 class="ph">nenem</h2>
	<hr style="">
	<a href="lucro.php" class="al rr alucro"><h4>lucro</h4></a>
	<a href="#" class="al rr ared"><h4>custo</h4></a>
	<a href="#" class="al rr"><h4>funcionario</h4></a>
</div>

<h1 class="h1">#funcionario</h1>
<hr class="hr">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="text" name="nome0" class="inputt" placeholder="Nome">
	<input type="email" name="email0" class="inputt" placeholder="Email">
	<input type="text" name="celular0" class="inputt" placeholder="Celular">
	<button type="submit" name="ngt"  class="btnn"><h4>enviar</h4></button>
</form>	
<div style="margin-left:14%">
<div style="height:780px;width:90%;overflow:auto;">
	<?php
	
			echo "<table class='table'>";
			$consult="SELECT * FROM funcionario";
			$tu=mysqli_query($conm,$consult);

			while ($linhas=mysqli_fetch_assoc($tu)) {
				echo "<tr><td>".$linhas['nome'] . "<hr class='hrb'></td>";
				echo "<td>".$linhas['email'] . "<hr class='hrb'></td>";
				echo "<td>".$linhas['telefone'] . "<hr class='hrb'></td>";
				echo "<td>"."<a href='reslucro.php?id={$linhas['id']}'>apagar</a></td></tr>";
			}
		
	
	echo "</table>";
?>
</div>
</div>
<form class="" action="/sistemabb/sistema/reslucro.php">
	<button type="submit" name="delete" class="but"><h4>Delete</h4></button>
</form>
<form class="form" action="/sistemabb/sistema/reslucro.php">
	<button type="submit" name="inserir" class="but buty bck"><h4>Insirir</h4></button>
</form>




</body>
</html>