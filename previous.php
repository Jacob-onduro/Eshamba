<?php 
include 'nav.php';
?>
<h3 style="text-align:center">Items uploaded for selling</h3>
		<hr>
<table class="table table-bordered table-hovered table-striped ">
<thead>
<tr>
<th>Product Name</th>
<th>Product Description</th>
<th>Amount</th>
<th>status</th>

</tr>
</thead>
<tbody>

<?php
include 'inc.php';
$sel="SELECT * FROM products WHERE seller='$user'";
$query=mysqli_query($connect,$sel);
while($aa=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $title=$aa['product_title'];
    $desc=$aa['product_desc'];
    $amount=$aa['product_price'];
    $status=$aa['status'];
    
    
    date_default_timezone_set('Africa/Nairobi');
    $date=date("Y:M:d");
    
    
   
    echo "<tr>
    
    <td>$title</td>
    <td>$desc</td>
    <td>$amount</td>
    <td>$status</td>";
    
    
}

?>

</tbody>
</table>

<h3 style="text-align:center">My Bought Items</h3>
		<hr>
        <table class="table table-bordered table-hovered table-striped ">
<thead>
<tr>
<th>Product Name</th>
<th>Product Description</th>
<th>Amount</th>
<th>status</th>

</tr>
</thead>
<tbody>

<?php

$sell="SELECT * FROM payments WHERE buyer='$user'";
$quer=mysqli_query($connect,$sell);
while($aaa=mysqli_fetch_array($quer,MYSQLI_ASSOC)){
    $product_id=$aaa['product_id'];
    $selll="SELECT * FROM products WHERE product_id='$product_id'";
    $querr=mysqli_query($connect,$selll);
    $fetch=mysqli_fetch_array($querr,MYSQLI_ASSOC);
    $title=$fetch['product_title'];
    $desc=$fetch['product_desc'];
    
    $amount=$aaa['amount'];
    $status=$aaa['status'];
  
    
    
   
    echo "<tr>
    
    <td>$title</td>
    <td>$desc</td>
    <td>$amount</td>
    <td>$status</td>";
    
    
}

?>

</tbody>
</table>