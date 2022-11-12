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
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $Item_Id = $key + 1;
                                echo "
                                <tr>
                                    <td>$Item_Id</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td><input type='number' class='iquantity text-center' onchange='subTotal()' value='$value[Quantity]' min='1' max='10'></td>
                                    <td class='itotal'></td>
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
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                        <form action="checkout.php" method="POST">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input class="form-control" name="Full_name" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input class="form-control" name="Phone_num" type="number" required>
                            </div>
                            <div class="form-group">
                                <label for="">Adress</label>
                                <input class="form-control" name="Adress" type="text" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Pay_Mode" value="COD" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash On Delivery
                                </label>
                            </div>
                            <button class="btn btn-primary btn-block mt-2" name="checkout">Check Out</button>
                        </form>
                    <?php
                    } else {
                        echo "<h4 class='text-center'>Your cart is empty</h4>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);

                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;

        }
        subTotal();
    </script>
</body>

</html>