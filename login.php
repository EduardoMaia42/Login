<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

	<div class="form-login">

		<form method="post" action="verifica_usuario.php?acao=login">

			<input type="text"     name="nome" placeholder="Digite seu Nome:">
			<br />
			<input type="text"     name="login" placeholder="Digite seu Login: ">
			<br />
			<input type="password" name="senha" placeholder="Digite sua Senha: ">
			<br />
			<input type="submit"   name="login_form" value="acessar">

		</form>

	</div>

</body>
</html>
