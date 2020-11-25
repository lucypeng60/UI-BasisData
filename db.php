<?php
    $hostname = 'localhost';
    $username = 'id15500883_lucy';
    $password = 'Lucyshefiramahessa3*';
    $dbname = 'id15500883_db_tokobuku';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung Ke Database');
    if(!$conn){
        echo "Connection ERROR";
        echo "ERROR 405";
    }
?>