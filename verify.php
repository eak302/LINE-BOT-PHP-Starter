<?php
    $access_token = 'ZbkwCvPA87qQNXjHLY1g0S9vvmLKVMHGjFTvcWuI+o8wk9B8eO/fRwhKL0ZtU/WWNh9G0ZyTRPrVNtPhu8xoMXENfnn3YaFNv4AjijvkgOLzPfBqhJ3N/E4O53vRyE+OalpU2ATKYyyXtG7FwND6QwdB04t89/1O/w1cDnyilFU=';
    $proxy = 'http://fixie:GuO3U3SWaIqzcI6@velodrome.usefixie.com:80';
    $proxyauth = 'eak302.com:abcd028623112';

    $url = 'https://api.line.me/v1/oauth/verify';

    $headers = array('Authorization: Bearer ' . $access_token);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result;
?>