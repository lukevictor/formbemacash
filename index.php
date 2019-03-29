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
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div style="margin:20px;">
    <div class="row">
        <div class="col s9">
            <h3 >Complemente seus dados abaixo:</h1>
            <h4 style="color: orange"> Equipe Bemacash Gestão </h2>
        </div>
        <div class="col s6">
            <form action="email.php" method="GET" id="contatoBemacash">
                <p >
                <label for="Nome">Nome:</label>
                <input type="text" name="nome" id="nome" size="35" class="campo" value=<?=$nome ?>>
                </p>
                <p >
                <label for="Email">E-mail:</label>
                <input type="text" name="email" id="email" size="35" class="campo" value=<?=$email ?>>
                </p>
                <p >
                <label for="Fone">Telefone:</label>
                <input type="text" name="fone" id ="fone" size="35" class="campo" value=<?=$fone ?>>
                </p>
                <!--<p >
                <label for="CNPJ">CNPJ/CPF:</label>
                <input type="text" name="cnpj" id="cnpj" size="35" class="campo"value=<?=$cnpj ?>>
                </p>-->
                <p >
                <input type="hidden" name="sCnpj"     value=<?=$sCnpj ?>>
                <input type="hidden" name="sCep"      value=<?=$sCep ?>>
                <input type="hidden" name="sCidade"   value=<?=$sCidade ?>>
                <input type="hidden" name="sBairro"   value=<?=$sBairro ?>>
                <input type="hidden" name="sEstado"   value=<?=$sEstado ?>>
                <input type="hidden" name="sEndereco" value=<?=$sEndereco ?>>
                <input type="hidden" name="sFone"     value=<?=$sFone ?>>
                <input type="hidden" name="sNome"     value=<?=$sNome ?>>
                <input type="hidden" name="sEmail"    value=<?=$sEmail ?>>
                <button type="submit">Enviar</button>
                </p>
            </form>
        </div>
        <div class="col s9">
            <p>TOTVS 2019</p>
        </div>
    </div>
</div>
</body>
</html>