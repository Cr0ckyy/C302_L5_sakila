<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $msg = array();
        $msg1["en"] = "hello friend";
        $msg2["es"] = "hola amigo";
        $msg["message"] = [$msg1, $msg2];
        echo json_encode($msg);
        ?>
    </body>
</html>
