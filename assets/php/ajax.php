<?php
    include 'class/classiles.php';

    $iles_obj = new iles();

    $getIles = $_POST['getIles'];

    $res_getcity = $iles_obj->getCity($getIles);

    echo $res_getcity;
    
?>

