YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=


curl -X GET \
-H 'Authorization: Bearer {YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=}' \
https://api.line.me/v1/oauth/verify

{
  "channelId":1484066396,
  "mid":"ub00b9ac609e51f4707cd86d8e797491b"
}


curl -X GET \
-H 'Authorization: Bearer {YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=}' \
https://api.line.me/v1/oauth/verify

ucdd60b730f31bd98d84be05885690c90

{"channelId":1484066396,"mid":"ucdd60b730f31bd98d84be05885690c90"}


http://fixie:GuO3U3SWaIqzcI6@velodrome.usefixie.com:80


curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {YAZLaG6TkebnciInDS/+n+X6Jxl8ayLKt2t1kIHgQk/mFpSogb0YiGT9DmHAONWW/gG5hBnybtx81RK1IUqtQ/31RevYZamcmwaj2Euy79krNI/Nr4gqPxx56AshWrpAvfXWRuKWuyADO0+glVrZngdB04t89/1O/w1cDnyilFU=}' \
-d '{
    "replyToken":"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
    "messages":[
        {
            "type":"text",
            "text":"Hello, user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}' https://api.line.me/v2/bot/message/reply