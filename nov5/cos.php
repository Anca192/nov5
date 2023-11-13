<?php

require_once ('config.php');


?>

<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>Remove</th>
    </tr>
    <?php

    $sql = "SELECT * FROM Cart";
    $result = $conn->query($sql);

        if($result->num_rows>0){
            while ($row =$result->fetch_assoc()){
                echo "<tr>";
                echo  "<td>" .$row['product_id']."</td>";
                echo "<td>" .$row['quantity'] . "</td>";
                echo "<td><a href='remove_from_cart.php?id=".$row['id'] . "'>Remove</a></td>";
                echo "</tr>";
            }
        }else {
            echo "<tr><td colspan='3'>Cosul este gol</td></tr>";
        }
    $conn->close();
    ?>
</table>