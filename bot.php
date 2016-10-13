<?php

    /*$content = $_POST;
    var_dump($content);
    exit();*/
    

    $access_token = 'YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=';
    //$proxy = 'http://fixie:GuO3U3SWaIqzcI6@velodrome.usefixie.com:80';
    //$proxyauth = 'eak302.com:abcd028623112';

    // Get POST body content
    //$content = $_POST;
    $arr = array(
        'events'=>array(
            'type'=>'message',
            'message'=>array(
                'type'=>'text',
                'text'=>'testtext'
            )
        )
    );
    $content = json_encode($arr);
    //$content = file_get_contents('php://input');
    // Parse JSON
    $events = json_decode($content, true);
    // Validate parsed JSON data

    foreach ($events['events'] as $event) {
        
        var_dump($event);
        
        if ($events['type'] == 'message' && $events['message']['type'] == 'text') {
                
                echo "true";
                exit();
        }
    }


    
echo "OK";