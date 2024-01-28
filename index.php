<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
        <form action="./src/order.php" method="get" class="form">
        <h1 class="h1">Order:</h1>
        <div class="form-group">
            <label for="name" class="form-label">Enter your name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="order-items d-flex my-5 flex-wrap">
            <div class="col-4 p-1">
                <img src="./img/pc.jpeg" alt="" class="img-fluid">
                <h5>Gaming PC Amd Ryzen 5</h5>
                <h6>Price: 1500.00 USD</h6>
                Select - <input type="radio" id="order-item" name="order-item" value="Gaming Pc" checked>
            </div>

            <div class="col-4 p-1">
                <img src="./img/ps5.jpg" alt="" class="img-fluid">
                <h5>Playstation 5 Disk Edition</h5>
                <h6>Price: 699.00 USD</h6>
                Select - <input type="radio" id="order-item"  name="order-item" value="Playstation 5 Disk Edition">
            </div>

            <div class="col-4 p-1">
                <img src="./img/xbox.jpg" alt="" class="img-fluid">
                <h5>Xbox Series X 1TB</h5>
                <h6>Price: 720.00 USD</h6>
                Select - <input type="radio" id="order-item"  name="order-item" value="Xbox Series X 1TB">
            </div>
            <div class="col-4 p-1">
                <img src="./img/macbook.jpg" alt="" class="img-fluid">
                <h5>Apple MacBook Pro 14</h5>
                <h6>Price: 2594.99 USD</h6>
                Select - <input type="radio" id="order-item"  name="order-item" value="Apple MacBook Pro 14">
            </div>

            <div class="col-4 p-1">
                <img src="./img/rtx.jpg" alt="" class="img-fluid">
                <h5>Gigabyte RTX 4090</h5>
                <h6>Price: 1979.99 USD</h6>
                Select - <input type="radio" id="order-item"  name="order-item" value="Gigabyte RTX 4090">
            </div>
        </div>

        <div class='form-group my-5'>
            <label for="city">Choose your City</label>
            <select name="city" id="city" class='form-select'>
                <option value="Subotica">Subotica</option>
                <option value="Pancevo">Pancevo</option>
                <option value="Sarajevo">Sarajevo</option>
                <option value="Split">Split</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Order now">

    </form>
        </div>
    </div>
   </div>

<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>