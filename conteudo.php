<?php 


function montaConteudo($nome, $telefone, $email, $cnpj) {

    $respostaHTML = "<p> Informa��es enviadas pelo formul�rio de contato do FIRST (S�rie 1) </p>";
    $respostaHTML = $respostaHTML . "<p>Este cliente est� interessado em saber mais sobre o Bemacash Gest�o</p>";

    $respostaHTML = $respostaHTML . '<p> Nome: ' .     $nome .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone: ' . $telefone . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email: ' .    $email .    '</p>';
    $respostaHTML = $respostaHTML . '<p> CNPJ: ' .     $cnpj .     '</p>';

    return $respostaHTML;
}

?>