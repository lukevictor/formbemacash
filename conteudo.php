<?php 

function montaConteudo() {

    $respostaHTML  = "<p> Informações enviadas pelo formulário de contato do FIRST (Série 1) </p>";
    $respostaHTML = $respostaHTML . "<p>Este cliente está interessado em saber mais sobre o Bemacash Gestão</p>";

    $respostaHTML = $respostaHTML . '<h3> Informações repassadas pelo cliente: </h3>';
    $respostaHTML = $respostaHTML . '<p> Nome: ' .     $_GET['nome'] . '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone: ' . $_GET['fone'] . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email: ' .    $_GET['email'] .'</p>';
    //$respostaHTML = $respostaHTML . '<p> CNPJ: ' .     $_GET['cnpj'] . '</p>';


    $respostaHTML = $respostaHTML . '<h3> Informações contidas no sistema (FIRST) </h3>';
    $respostaHTML = $respostaHTML . '<p> Empresa: ' .            $_GET['sNome'] .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone Comercial: ' . $_GET['sFone']     . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email Comercial: ' .    $_GET['sEmail'] .    '</p>';
    $respostaHTML = $respostaHTML . '<p> CNPJ: ' .               $_GET['sCnpj'] .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Endereco: ' .           $_GET['sEndereco'] . '</p>';
    $respostaHTML = $respostaHTML . '<p> CEP: ' .                $_GET['sCep'] .      '</p>';
    $respostaHTML = $respostaHTML . '<p> Bairro: ' .             $_GET['sBairro'] .   '</p>';
    $respostaHTML = $respostaHTML . '<p> Cidade: ' .             $_GET['sCidade'] .   '</p>';
    $respostaHTML = $respostaHTML . '<p> Estado: ' .             $_GET['sEstado'] .   '</p>';

    return $respostaHTML;
}

?>