<?php
include "db_connect.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['checkout'])) {
       $sql = "INSERT INTO `user_details`(`Order_Id`, `Full_name`, `Phone_num`, `Adress`, `Pay_Mode`) 
       VALUES (Null,'$_POST[Full_name]', '$_POST[Phone_num]','$_POST[Adress]','$_POST[Pay_Mode]')";

      if (mysqli_query($conn, $sql)) {
        $Order_Id = mysqli_insert_id($conn);
        $sql1 = "INSERT INTO `orders_details`(`Order_Id`, `Item_Name`, `Price`, `Quantity`)
         VALUES (?, ?, ?, ?)";
         $stmt = mysqli_prepare($conn, $sql1);
         if ($stmt) {
            mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);

                foreach ($_SESSION['cart'] as $key => $value) {
                $Item_Name = $value['Item_Name'];
                $Price = $value['Price'];
                $Quantity = $value['Quantity'];
                mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['cart']);
            echo "<script>
                   alert('Order placed successfully!.')
                   window.location.href='index.php'
                 </script>";
         } else {
                echo "SQL Query Prepare Error";
         }
      } else {
            echo "SQL Error";
      }
    }
}

?>