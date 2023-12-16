<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$email = $_SESSION['emailAdd'];
$get_email = "SELECT * FROM `register-details-customer` WHERE emailAdd = '$email'";
$result =mysqli_query($conn, $get_email);
$row = mysqli_fetch_array($result);
$row_fetch = mysqli_fetch_assoc($result);
$user_email = $row['emailAdd'];
// echo $user_email;

?>

<h3 class="text-warning" style="position:relative; top: 500px; left: 500px; margin: auto;"> My Orders </h3>
<table class ="table table-bordered mt-5" style="position: relative; top: 520px; ">
    <thead class="bg-success">
    <tr>
        <th>Serial #</th>
        <th>Order #</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody class="bg-info">

    <?php
    $get_order_details = "SELECT * FROM `orders` WHERE emailAdd = '$user_email'";
    $result_orders = mysqli_query($conn, $get_order_details);
    $serial =1;
    while($row_orders = mysqli_fetch_assoc($result_orders)) {
        $orderId = $row_orders['order_id'];
        $amount = $row_orders['amountDue'];
        $totalProduct = $row_orders['totalProducts'];
        $invoice = $row_orders['invoiceNum'];
        $orderDate = $row_orders['orderDate'];
        $status = $row_orders['orderStatus'];
        if($status == 'pending') {
            $status = 'Incomplete';
        }else{
            $status = 'Complete';
        }
        
        echo "<tr>
        <td>$serial</td>
        <td>$orderId</td>
        <td>$amount</td>
        <td>$totalProduct</td>
        <td>$invoice</td>
        <td>$orderDate</td>
        <td>$status</td>";
        ?>
        <?php
        if($status=="Complete") {
            echo "<td>Paid</td>";
        }
        else{
         echo "<td><a href ='PaymentFrame.php?order_id=$orderId'class='bg-success text-success'>Confirm</a></td>
         
         </tr>";
        }
        
    $serial++;

    
    }
    ?>
        
    </tbody>
</table>    
</body>
</html>