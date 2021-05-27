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
        $bf = array();
        $breakfast1["eggs"] = 0.5;
        $breakfast2["coffee"] = 0.9;

        $bf[] = $breakfast1;
        $bf[] = $breakfast2;
        echo json_encode($bf);
        ?>
    </body>
</html>
