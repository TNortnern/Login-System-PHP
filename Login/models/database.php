<?php

    $db  = mysqli_connect("localhost", "root", "", "my_guitar_shop1");

    if (mysqli_connect_errno()){
        echo "Failed to connect" . mysqli_connect_errno();
    }