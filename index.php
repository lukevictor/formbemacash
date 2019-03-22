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
<form action="email.php" method="GET">
    <p >
	<label for="Nome">Nome:</label>
	<input type="text" name="nome" size="35" class="campo" value=<?=$nome ?>>
    </p>
    <p >
	<label for="Email">E-mail:</label>
	<input type="text" name="email" size="35" class="campo" value=<?=$email ?>>
    </p>
    <p >
	<label for="Fone">Telefone:</label>
	<input type="text" name="fone" size="35" class="campo" value=<?=$fone ?>>
    </p>
    <p >
	<label for="CNPJ">CNPJ/CPF:</label>
	<input type="text" name="cnpj" size="35" class="campo"value=<?=$cnpj ?>>
    </p>
    <p >
    <input type="hidden" name="sCnpj" size="35" class="campo"value=<?=$sCnpj ?>>
	<button type="submit"/> Enviar </button>
    </p>
</form>

TOTVS 2019
</div>
</body>
</html>