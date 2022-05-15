<?php
        $ServerName = "localhost";
        $userName = "root";
        $Password = "";
        $db = "bswo";

        $conn = mysqli_connect($ServerName,$userName,$Password);
        mysqli_select_db($conn,$db);
        if($conn)
        {
            //echo "Connection Successful";
        }
        else
        {
            //echo "Connection Failed";
        }
?>