<?php

    echo Request::all();
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
            'replyToken'=>'nHuyWiB7yP5Zw52FIkcQobQuGDXCTA',
            'type'=>'message',
            'timestamp'=>1462629479859,
            'source'=>array(
                'type'=>'user',
                'userId'=>'U206d25c2ea6bd87c17655609a1c37cb8'
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
    //$content = json_encode($arr);
    $content = file_get_contents('php://input');
    // Parse JSON
    $events = json_decode($content, true);


    var_dump($content);

    // Validate parsed JSON data

    if(!is_null($events['events']))
    {
        foreach ( $events['events'] as $event )
        {
            // Reply only when message sent is in 'text' format
            if ($event['type'] == 'message' && $event['message']['type'] == 'text')
            {
                // Get text sent
                $text = $event['message']['text'];
                // Get replyToken
                $replyToken = $event['replyToken'];

                // Build message to reply back
                $messages = [
                    'type' => 'text',
                    'text' => 'xxxxxx'.$text
                ];

                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);

                echo $result . "\r\n";
            }
        }
    }
    
echo "OK".json_encode($content);