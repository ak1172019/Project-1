<?php

    //connect server or database

        $conn = mysqli_connect('localhost','root','','shopmax');

        if(!$conn){

            echo "Connection Error:". mysqli_connect_error();
        }


?>