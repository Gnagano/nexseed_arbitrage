<?php

require 'CoinMarketCapClient.php';

$CMCClient = new CoinMarketCapClient();
$line_break = "\n"; //ブラウザで表示する場合は <br/>にする

//example1
$crypto = 'BTC';
$fiat   = 'USD';
$rate = $CMCClient->fetchRateCryptoToFiat($crypto,$fiat);
echo "${crypto}/${fiat} is ...${line_break}";
echo $rate . $line_break;

//example2
$crypto = 'ETH';
$fiat   = 'USD';
$rate = $CMCClient->fetchRateCryptoToFiat($crypto,$fiat);
echo "${crypto}/${fiat} is ...${line_break}";
echo $rate . $line_break;

//example3
$crypto = 'ETH';
$fiat   = 'JPY';
$rate = $CMCClient->fetchRateCryptoToFiat($crypto,$fiat);
echo "${crypto}/${fiat} is ...${line_break}";
echo $rate . $line_break;



