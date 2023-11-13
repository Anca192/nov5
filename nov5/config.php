<?php
$conn = new mysqli('localhost','root','','new');


    if ($conn->connect_error) {
        die("Connection failed" .$conn->connect_error);
    }
