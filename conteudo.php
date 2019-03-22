<?php 


function montaConteudo($nome, $telefone, $email, $cnpj) {

    $respostaHTML  = "<p> Informações enviadas pelo formulário de contato do FIRST (Série 1) </p>";
    $respostaHTML = $respostaHTML . "<p>Este cliente está interessado em saber mais sobre o Bemacash Gestão</p>";

    $respostaHTML = $respostaHTML . '<h3> Informações repassadas pelo cliente: </h3>';
    $respostaHTML = $respostaHTML . '<p> Nome: ' .     $nome .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone: ' . $telefone . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email: ' .    $email .    '</p>';
    $respostaHTML = $respostaHTML . '<p> CNPJ: ' .     $cnpj .     '</p>';


    $respostaHTML = $respostaHTML . '<h3> Informações contidas no sistema (FIRST) </h3>';
    $respostaHTML = $respostaHTML . '<p> Empresa: ' .            $sNome .     '</p>';
    $respostaHTML = $respostaHTML . '<p> Telefone Comercial: ' . $sTelefone . '</p>';
    $respostaHTML = $respostaHTML . '<p> Email Comercial: ' .    $sEmail .    '</p>';
    $respostaHTML = $respostaHTML . '<p> CNPJ: ' .               $sCnpj .     '</p>';

    return $respostaHTML;
}

?>