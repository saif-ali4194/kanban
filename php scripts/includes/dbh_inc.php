<?php

// Establish a connection
    function get_con() {
        $server = "127.0.0.1:3307";
        $user = "root";
        $pass = "";
        $db = "kanban";

        try {
            if($con = mysqli_connect($server, $user, $pass, $db))   return $con;
             else   throw new Exception ("unable to connect");
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }

// Closing a connection
    function close_con($con) {
        $con -> close();
        echo "closed";
    }