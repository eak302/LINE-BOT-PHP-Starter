<?php
    $access_token = 'YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=';
    $proxy = 'http://fixie:GuO3U3SWaIqzcI6@velodrome.usefixie.com:80';
    $proxyauth = 'eak302.com:abcd028623112';

    // Get POST body content
    $content = file_get_contents('php://input');
    // Parse JSON
    $events = json_decode($content, true);
    // Validate parsed JSON data

    echo "<pre>";
    var_dump($events);
    echo "</pre>";
    exit();

    if (!is_null($events['events'])) {
        
        // Loop through each event
        foreach ($events['events'] as $event) {
            // Reply only when message sent is in 'text' format
            if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
                // Get text sent
                $text = $event['message']['text'];
                // Get replyToken
                $replyToken = $event['replyToken'];

                // Build message to reply back
                $messages = [
                    'type' => 'text',
                    'text' => $text
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
                curl_setopt($ch, CURLOPT_PROXY, $proxy);
                curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
                $result = curl_exec($ch);
                curl_close($ch);

                echo $result . "\r\n";
            }
        }
    }
//echo "OK";