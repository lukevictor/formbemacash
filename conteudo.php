<?php 

function montaConteudo() {

    $respostaHTML  = "<p> Informações enviadas pelo formulário de contato do FIRST (Série 1) </p>";
    $respostaHTML = $respostaHTML . "<p>Este cliente está interessado em saber mais sobre o Bemacash Gestão</p>";

    $respostaHTML = $respostaHTML . '<h3> Informações repassadas pelo cliente: </h3>';
    $respostaHTML = $respostaHTML . '<p> Nome: ' .     $_GET['your-name'] . '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone: ' . $_GET['your-phone'] . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email: ' .    $_GET['your-email'] .'</p>';
    //$respostaHTML = $respostaHTML . '<p> CNPJ: ' .     $_GET['cnpj'] . '</p>';


    $respostaHTML = $respostaHTML . '<h3> Informações contidas no sistema (FIRST) </h3>';
    $respostaHTML = $respostaHTML . '<p> Empresa: ' .            str_replace('_', ' ', $_GET['sNome']) .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone Comercial: ' . str_replace('_', ' ', $_GET['sFone'])     . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email Comercial: ' .                          $_GET['sEmail'] .    '</p>';
    $respostaHTML = $respostaHTML . '<p> CNPJ: ' .               str_replace('_', ' ', $_GET['sCnpj']) .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Endereco: ' .           str_replace('_', ' ', $_GET['sEndereco']) . '</p>';
    $respostaHTML = $respostaHTML . '<p> CEP: ' .                str_replace('_', ' ', $_GET['sCep']) .      '</p>';
    $respostaHTML = $respostaHTML . '<p> Bairro: ' .             str_replace('_', ' ', $_GET['sBairro']) .   '</p>';
    $respostaHTML = $respostaHTML . '<p> Cidade: ' .             str_replace('_', ' ', $_GET['sCidade']) .   '</p>';
    $respostaHTML = $respostaHTML . '<p> Estado: ' .             str_replace('_', ' ', $_GET['sEstado']) .   '</p>';

    return $respostaHTML;
}

?>