<?php

    /*$content = $_POST;
    var_dump($content);
    exit();*/
    

    $access_token = 'hhuUL3LjBSyrk2Wz5UZLrSHjX2hlB+rbC59sQUiu3P+viXg8T1FSNp8eE3guCCAU6Z/AA+x3zGJ0z/XOqUiYD4OZtGEfSJS5RrZ9BqkcNRcIQ3HCMwUFYE+fxEmgo8MtQCsFDTiepiR17PS8F07kFLY0uH38g5VIshXuw0uh2S4=';
    //$proxy = 'http://fixie:GuO3U3SWaIqzcI6@velodrome.usefixie.com:80';
    //$proxyauth = 'eak302.com:abcd028623112';

    // Get POST body content
    $content = $_POST;
    //$content = file_get_contents('php://input');
    // Parse JSON
    $events = json_decode($content, true);
    // Validate parsed JSON data

    /*echo "<pre>";
    var_dump($content);
    echo "</pre>";
    exit();*/

    if (!is_null($events['events'])) {
        
        echo 'in loop';
        
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
echo "OK";