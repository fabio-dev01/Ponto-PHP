<?php 

include 'database.php';

if(isset($_POST['chave'])){
	$chave = $_POST['chave'];

	if($chave == ""){
		header('Location:../index.php');
	}else{

		$query = "SELECT * FROM funcionarios WHERE chave = '$chave' ";
		$consulta = mysqli_query($con, $query);
			
		if(mysqli_num_rows($consulta) != 0){
		
			while($linha = mysqli_fetch_array($consulta)){

				echo '-----------------------<br>';					
				echo '*Comprovante do ponto<br>';
				echo '>>Soluções Inteligentes e Empresariais - Fábio Silva<br>';
				echo '>>CNPJ: 4564877892222001<br>';
				echo $linha['nome'] . '<br>';
				echo $linha['cpf'] . '<br>';
				echo $linha['rg'] . '<br>';
				echo $linha['cargo'] . '<br>';
				date_default_timezone_set('America/Sao_Paulo');
	  			echo date('d/m/Y \à\s H:i');
				echo '<br>-----------------------<br>';
			}
		
		}else{
			echo 'NAO LOGOU';
		}
	}
}

?>