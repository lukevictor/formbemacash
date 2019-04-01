<?php include 'receptor.php';?>

<html>
<head>
    <title>Contato Bemacash Gestão</title>
    <style>
        .campo {
            margin-left:20px;
            color: #fd7e14;
        }
        .botao {
            background-color: #fd7e14;
            border: none;
            border-radius: 18px;
            color: #FFFFFF;
            font-size: 30px;
            padding: 2px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            border-radius: 15px;
        }
    </style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
</head>
<body>
<div style="margin:20px;">
    <div class="row">
        <div class="col s12">
            <h4 >Complemente seus dados abaixo:</h4>
        </div>
        <div class="col s9">
            <form action="email.php" method="GET" id="contatoBemacash">
                <p >
                <p for="Nome">Nome:</p>
                <input type="text" name="nome" id="nome" size="35" class="campo" value=<?=$nome ?>>
                </p>
                <p >
                <p for="Email">E-mail:</p>
                <input type="text" name="email" id="email" size="35" class="campo" value=<?=$email ?>>
                </p>
                <p >
                <p for="Fone">Telefone:</p>
                <input type="text" name="fone" id ="fone" size="35" class="campo" value=<?=$fone ?>>
                </p>
                <!--<p >
                <p for="CNPJ">CNPJ/CPF:</p>
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
                <button type="submit" class="botao">Enviar</button>
                </p>
            </form>
        </div>
        <div class="col s9">
            <h5 style="color: #fd7e14"> Equipe Bemacash Gestão Financeira </h5>
            <p>TOTVS 2019</p>
        </div>
    </div>
</div>
</body>
</html>