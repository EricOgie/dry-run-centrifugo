<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centrifigu Test</title>
</head>

<body>
    <h1></h1>
    <main>This is just a Centrifigu test run</main>
    <script src="https://cdn.jsdelivr.net/gh/centrifugal/centrifuge-js@2.X.X/dist/centrifuge.min.js"></script>
    <script>
        var centrifuge = new Centrifuge('ws://localhost:9000/connection/websocket');
        var token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIyIiwiaW5mbyI6eyJuYW1lIjoic2ZhZndmd2Z3ZmZ3ZncgZXRldDN0In19.HH6KTD4_s38QwB-oqA58Gw9HtRDSFelmf_Mt0M7iKNI";
        centrifuge.setToken(token);
        centrifuge.on("connect", function(ctx) {
            console.log("connected", ctx);
            centrifuge.subscribe("channel", (ctx) => {
                console.log(ctx);
            });
        });

        centrifuge.on("disconnect", function(ctx) {
            console.log("disconnected", ctx);
        });

        centrifuge.connect();
    </script>

</body>

<?php

echo "<h1>LET'S GO...</h1>"

?>

</html>