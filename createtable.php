<?php
        $mysqli =new mysqli("localhost","root","","THOITRANG");
        //check connection
        if($mysqli === false){
            die("ERROR:Could not connect. ". $mysqli ->connect_error);
        }
        //
        $sql ="CREATE TABLE THOITRANG(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            img VARCHAR(100) NOT NULL,
            names VARCHAR(50) NOT NULL,
            price VARCHAR(30) NOT NULL
        )";
       
        if($mysqli ->query($sql)=== true){
            echo "Table creat succsessfully.";
        }
        else{
            echo"ERROT:Could not able to execute $sql.".$mysqli->error;
        }

        //close connection
        $mysqli->close();
    ?>