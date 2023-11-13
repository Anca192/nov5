<?php

require_once ('config.php');

$id= (int)$_GET['id'];
$sql = "DELETE FROM Cart WHERE id= $id";

if($conn->query($sql) === TRUE ){
    header("Location: cos.php");
} else {
    echo "Eroare ".$conn->error;
}