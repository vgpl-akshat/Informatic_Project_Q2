<?php
    $servername="localhost";
    $dbname= "verwaltung_ag";       
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    try {
        $conn = new PDO ("mysql:host=$servername:dbname=$dname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "connected successfully";

    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();}
?>