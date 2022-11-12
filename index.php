<?php
include "header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="proccess_cart.php" method="POST">
                    <div class="card my-5">
                        <img src="images/mobile.png" class="card-img-top py-3" style="background-color: #c8cfdb;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mobile</h5>
                            <p class="card-text">Price 430 $</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Phone">
                            <input type="hidden" name="Price" value="430">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="proccess_cart.php" method="POST">
                    <div class="card my-5">
                        <img src="images/pc.png" class="card-img-top py-3" style="background-color: #c8cfdb;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">Price 1200 $</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Laptop">
                            <input type="hidden" name="Price" value="1200">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="proccess_cart.php" method="POST">
                    <div class="card my-5">
                        <img src="images/tv.png" class="card-img-top py-3" style="background-color: #c8cfdb;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Smart TV</h5>
                            <p class="card-text">Price 999 $</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Smart TV">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="proccess_cart.php" method="POST">
                    <div class="card my-5">
                        <img src="images/pr.png" class="card-img-top py-3" style="background-color: #c8cfdb;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Printer</h5>
                            <p class="card-text">Price 320 $</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Printer">
                            <input type="hidden" name="Price" value="320">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>