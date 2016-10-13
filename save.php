<?php

    //$replytoken = 'nHuyWiB7yP5Zw52FIkcQobQuGDXCTA';
    //$type = 'message';
    $replytoken = $_GET['replytoken'];
    $type = $_GET['type'];

    $connect = mysql_connect('localhost', 'dentsu360_dev1', 'passw0rd#') or die ('Error Connect to Database');
    $db = mysql_select_db('dentsu360_aissimlove');
    $sql = 'INSERT INTO line_bot (replytoken, type) VALUES ("'.$replytoken.'", "'.$type.'")';
    mysql_query("SET NAMES UTF8");
    $query = mysql_query($sql);
    
    if ( $query )
    {
        
        echo 'save done';
        exit();
    }
    else 
    {
        echo 'save false';
        exit();
    }

    mysql_close($connect);

?>