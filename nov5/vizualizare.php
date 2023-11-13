<?php

require_once ('config.php');

    $sql = "SELECT * FROM Comments ORDER BY posted_at DESC ";
    $results = $conn->query($sql);

    if($results->num_rows>0){
        while ($row = $results->fetch_assoc()){
            echo "<p><strong>".$row['name'] .":</strong><br/>".$row['comment']."</p><hr>";
        }
    } else {
        echo 'There are no messages!';
    }

    $conn->close();