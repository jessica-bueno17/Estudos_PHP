<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

// CLIENTE DE HTTP;
$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $resposta->getBody();

// "PERCORREDOR" DO DOM SEJA HTML OU XML;
$crawler = new Crawler();
$crawler->addHtmlContent($html);

// USANDO ATRAVÉS DE SELETOR CSS;
$cursos = $crawler->filter('span.card-curso__nome');

$listadeCursos = [];

foreach ($cursos as $curso) {
    $listadeCursos[] =$curso->textContent;
}

