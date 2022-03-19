<?php
    $mysqlname = 'localhost';
    $uname = 'root';
    $dbpassword = '';
    $dbname = 'test';

    $conn = mysqli_connect($mysqlname, $uname, $dbpassword, $dbname);

    if(!$conn){
        echo 'Algo deu errado!';
        exit();
    }
?>