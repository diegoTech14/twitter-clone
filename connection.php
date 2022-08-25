<?php

    $connection = new mysqli("localhost", "root", "", "twitter");
    if($connection -> connect_errno){
        echo "Failed";
        exit();
    }

?>