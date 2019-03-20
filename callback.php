<?php
require 'inc.php';
$reference = null;
$pesapal_tracking_id = null;
if(isset($_GET['pesapal_merchant_reference']))
$reference = $_GET['pesapal_merchant_reference'];
if(isset($_GET['pesapal_transaction_tracking_id']))
$pesapal_tracking_id = $_GET['pesapal_transaction_tracking_id'];
$update="UPDATE payments SET pesapal_tracking_id='$pesapal_tracking_id' WHERE reference='$reference'";
if(mysqli_query($connect,$update)){
    echo "<script>window.location.href='user.php';</script>";
}
?>