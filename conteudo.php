<?php 


function montaConteudo($nome, $telefone, $email, $cnpj) {

    $respostaHTML  = "<p> Informações enviadas pelo formulário de contato do FIRST (Série 1) </p>";
    $respostaHTML += "<p>Este cliente está interessado em saber mais sobre o Bemacash Gestão</p>";

    $respostaHTML += '<h3> Informações repassadas pelo cliente: </h3>';
    $respostaHTML += '<p> Nome: ' .     $nome .     '</p>';
    $respostaHTML += '<p> Telefone: ' . $telefone . '</p>';
    $respostaHTML += '<p> Email: ' .    $email .    '</p>';
    $respostaHTML += '<p> CNPJ: ' .     $cnpj .     '</p>';


    $respostaHTML += '<h3> Informações contidas no sistema (FIRST) </h3>';
    $respostaHTML += '<p> Empresa: ' .            $sNome .     '</p>';
    $respostaHTML += '<p> Telefone Comercial: ' . $sTelefone . '</p>';
    $respostaHTML += '<p> Email Comercial: ' .    $sEmail .    '</p>';
    $respostaHTML += '<p> CNPJ: ' .               $sCnpj .     '</p>';

    return $respostaHTML;
}

?>