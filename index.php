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
    <input type="hidden" name="sCep" size="35" class="campo"value=<?=$sCep ?>>
    <input type="hidden" name="sCidade" size="35" class="campo"value=<?=$sCidade ?>>
    <input type="hidden" name="sBairro" size="35" class="campo"value=<?=$sBairro ?>>
    <input type="hidden" name="sEstado" size="35" class="campo"value=<?=$sEstado ?>>
    <input type="hidden" name="sEndereco" size="35" class="campo"value=<?=$sEndereco ?>>
    <input type="hidden" name="sFone" size="35" class="campo"value=<?=$sFone ?>>
	<button type="submit"/> Enviar </button>
    </p>
</form>

TOTVS 2019
</div>
</body>
</html>