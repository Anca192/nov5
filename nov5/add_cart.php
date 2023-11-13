<?php 

require_once('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    $sql = "INSERT INTO Cart(product_id, quantity) VALUES ($product_id,$quantity)";

    if($conn->query($sql) === TRUE) {
        echo "Produsul a fost adaugat in cos";
    } else {
        echo "Eroare : " .$sql ."<br/>".$conn->error;
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    Product ID <input type="number" name="product_id"><br/>
    Quantity <input type="number" name="quantity"><br/>
    <input type="submit" value="Adauga in cos">
</form>
</body>
</html>



?>