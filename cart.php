<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-dark my-5">
                <h1 style="color: white;"><i class="fa-solid fa-cart-shopping"></i> MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Item Id</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $total = $total + $value['Price'];
                                $Item_Id = $key + 1;
                                echo "
                                <tr>
                                    <td>$Item_Id</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]</td>
                                    <td><input type='number' class='text-center' value='$value[Quantity]' min='1' max='10'></td>
                                    <td>
                                      <form action='proccess_cart.php' method='POST'>
                                        <button class='btn' name='Remove_Item'><i class='fa-solid fa-trash-can' style='color: red;'></i></button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>                                    
                               </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border p-4 bg-light rounded">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            PayBal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Credit Card
                        </label>
                    </div>
                    <form action="">
                        <button class="btn btn-primary btn-block">Check Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>