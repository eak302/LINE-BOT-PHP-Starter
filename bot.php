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
        'events'=>array([
            'replyToken': 'nHuyWiB7yP5Zw52FIkcQobQuGDXCTA',
            'type'=>'message',
            'timestamp'=>1462629479859,
            'source'=>(
                'type': 'user',
                'userId': 'U206d25c2ea6bd87c17655609a1c37cb8'
            ),
            'message'=>array(
                'id'=>'325708',
                'type'=>'text',
                'text'=>'Hello World'
            )
        ])
    );
    /*$content = '{
      "events": [
          {
            "replyToken": "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
            "type": "message",
            "timestamp": 1462629479859,
            "source": {
                 "type": "user",
                 "userId": "U206d25c2ea6bd87c17655609a1c37cb8"
             },
             "message": {
                 "id": "325708",
                 "type": "text",
                 "text": "Hello, world"
              }
          }
      ]
    }';*/
    /*$content = '{
      "events": [
          {
            "replyToken": "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
            "type": "message",
            "timestamp": 1462629479859,
            "source": {
                 "type": "user",
                 "userId": "U206d25c2ea6bd87c17655609a1c37cb8"
             },
             "message": {
                 "id": "325708",
                 "type": "text",
                 "text": "Hello, world"
              }
          }
      ]
    }';*/
    $content = json_encode($arr);
    //$content = file_get_contents('php://input');
    // Parse JSON
    $events = json_decode($content, true);
    // Validate parsed JSON data

    if(!is_null($events['events']))
    {
        foreach ( $events['events'] as $event )
        {
            
        }
    }
    
//echo "OK";