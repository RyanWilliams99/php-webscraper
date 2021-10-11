<?php
# goutte_xpath.php

require 'vendor/autoload.php';

$client = new \Goutte\Client();

$crawler = $client->request('GET', 'https://videx.comesconnected.com/');

//use xpath to get relevant section of webpage
$links = $crawler->evaluate('//*[@id="maincontent"]/div[2]/div[1]/div[2]');

//TODO parse string to extract data
foreach ($links as $link) {
    echo preg_replace('/\s+/', '', $link->textContent.PHP_EOL);
}
