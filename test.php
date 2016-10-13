<?php
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

    //echo "<pre>";
    var_dump($content);
    //echo "</pre>";
    exit();

?>