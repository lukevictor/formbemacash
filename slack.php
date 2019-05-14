<?php 

$json = file_get_contents('php://input');

//$array = array("text" => "Teste Slack");

//$json = json_encode($array);

$ch = curl_init('https://hooks.slack.com/services/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');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'Content-Type: application/json',

    'Content-Length: ' . strlen($json))

);

$jsonRet = json_decode(curl_exec($ch));

echo('Teste muito louco:' . $jsonRet);

?>