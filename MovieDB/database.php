<?php
    $dsn='mysql:host=cis281instance.c1muiioiq5an.us-east-1.rds.amazonaws.com; dbname=MartVid';
    $username='martm';
    $password='patdmcr11';

    try {
        $db=new PDO($dsn, $username, $password);
        $con_msg='Connection Established';

    } catch(PDOException $e) {
        $error_message=$e->getMessage();
        include('database_error.php');
        exit();
    }
?>