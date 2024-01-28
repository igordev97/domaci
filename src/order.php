<?php 
    $shipment =  [
       "Subotica" => 220,
       "Pancevos" => 10,
       "Sarajevo" => 292,
       "Split" => 799    
     ];

     $storeItems = [
        "Gaming Pc" => 1500, //usd $
        "Playstation 5 Disk Edition" => 699, //usd $
        "Xbox Series X 1TB" => 720, //usd $
        "Apple MacBook Pro 14" => 2594.99, //usd $
        "Gigabyte RTX 4090" => 1979.99, //usd $
     ];


       if(isset($_GET['name']) && isset($_GET['order-item']) && isset($_GET['city'])){
        $name = $_GET['name'];
        $city = $_GET['city'];
        $orderItem = $_GET['order-item'];
        $itemPrice = 0;
        foreach($storeItems as $item => $price){
            if($orderItem == $item){
                $itemPrice = $price;
                break;
             }
           
       }

       function calculateShipment($shipping,$itemPrice,$city){
        $cityDistance = 0;
        foreach($shipping as $ship => $distance){
            if($ship == $city){
                $cityDistance = $distance;
                break;
            }
        }

        if($cityDistance < 100){
            return 5;
        }
        else if($cityDistance >= 100 && $cityDistance <200){
            return 10;
        }
        else{
            return 15;
        }
       }
       $totalPrice = $itemPrice + calculateShipment($shipment,$itemPrice,$city);
    }







       else{
        die("Enter all data");
       }
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
       <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Your Order <?= $name?>:</h1>
                <h3>Title:</h3>
                <p>- <?= $orderItem?></p>

                <h3>Order Price:</h3>
                <p>- <?= $itemPrice?> $</p>

                <h3>Shipping to :</h3>
                <p>- <?= $city?></p>

                <h4>Total pay:</h4>
                <p>- <?= $totalPrice?> $ - Shipping Calculated</p>
            </div>
        </div>
       </div>

<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>