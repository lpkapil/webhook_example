#! /bin/bash

curl -X POST -H 'Content-Type: application/json' -d '[ {  "id"": "001", "type": "MESSAGE", "status": "DONE" } ]' http://localhost:8188/webhook_callback.php