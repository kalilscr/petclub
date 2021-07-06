<?php	
	include('conexao.php');
	
	     $nome = $_POST['nome'];
	     $telefone = $_POST['telefone'];
	     $email = $_POST['email'];
	     $endereco = $_POST['endereco'];

	     $query = "INSERT INTO clientes (Nome, Telefone, Email, Endereco) VALUES ('$nome', '$telefone', '$email', '$endereco')";

         mysqli_query ($con, $query);

?>


<form method="post" action="contato.html">
	<table>
		<tr>
			<td><input type="submit" value="voltar"></td>
		</tr>
		
	</table>
</form>

