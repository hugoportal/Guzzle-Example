<?php
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();

$resposta = $client->request(
    'GET', // tipo da requisição
    'https://api.github.com/users/hugoportal' //uri da api
);


echo $resposta->getStatusCode();

$dados = json_decode($resposta->getBody());
echo $dados->login;
echo $dados->avatar_url;
print_r($dados);

$viacep = $client->request(
    'GET', // tipo da requisição
    'https://viacep.com.br/ws/01001000/json/' //uri da api
);
$infoCep = json_decode($viacep->getBody());
print_r($infoCep);

?>