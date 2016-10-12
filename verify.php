<?php
    $access_token = 'YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=';
    $proxy = 'http://fixie:GuO3U3SWaIqzcI6@velodrome.usefixie.com:80';
    $proxyauth = 'eak302:abcd028623112';

    $url = 'https://api.line.me/v1/oauth/verify';

    $headers = array('Authorization: Bearer ' , $access_token);

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