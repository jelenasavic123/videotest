<?php

    $server = "sql206.epizy.com";
    $username = "epiz_30976713";
    $password = "JPAcov6m4d";
    $dbname = "epiz_30976713_packetcodeofficial";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
    die("connection filed:".mysqli_connect_error());
    }

?>