<h1>Abrir chamado!!!</h1>

<?php
	if(isset($_POST['acao'])){
		$email = $_POST['email'];
		$pergunta = $_POST['pergunta'];
		$token = md5(uniqid());

		$sql = \MySql::conectar()->prepare("INSERT INTO chamdado VALUES (null,?,?,?) ");
		$sql->execute(array($pergunta,$email,$token));
		echo '<script>alert("Seu chamadado teve sucess!Verifique o seu email")</script>';
	}	

?>

<style type="text/css">
	input,textarea{
		width: 100%;
	}
	textarea{
		height: 120px;
	}


</style>


<form method="post">
	<input type="email" name="email" placeholder="Qual seu email?">
	<br>
	<br>
	<textarea name="pergunta" placeholder="Qual sua pergunta?"></textarea>
	<br>
	<input type="submit" name="acao" value="Enviar">
</form>