<?php include 'receptor.php';?>

<html>
<head>
    <title>Contato Bemacash Gestão</title>
    <style>
        .campo {
            margin-left:20px;
            color: orange;
        }
    </style>
</head>
<body>
<div style="margin:20px;">
<h1 >Complemente seus dados abaixo:</h1>
<h2 style="color: orange"> Equipe Bemacash Gestão </h2>
<form action="email.php" method="post">
    <p >
	<label for="Nome">Nome:</label>
	<input type="text" name="Nome" size="35" class="campo" value=<?=$Nome ?>/>
    </p>
    <p >
	<label for="Email">E-mail:</label>
	<input type="text" name="Email" size="35" class="campo" value=<?=$Email ?>/>
    </p>
    <p >
	<label for="Fone">Telefone:</label>
	<input type="text" name="Fone" size="35" class="campo" value=<?=$Telefone ?>/>
    </p>
    <p >
	<label for="CNPJ">CNPJ/CPF:</label>
	<input type="text" name="Cnpj" size="35" class="campo"value=<?=$Cnpj ?>/>
    </p>
    <p >
	<input type="submit" name="Enviar" value="Enviar" />
    </p>
</form>

TOTVS 2019
</div>
</body>
</html>