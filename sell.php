<?php 
include 'nav.php';
?>

<div class="thumbnail">

<div class="row" style="padding-top:35px">
<div class="col-sm-6">
<form method="POST" action="" enctype="multipart/form-data">
<div class="form-group">
    <label for="image">Product Image</label>
    <input type="file" name="image" class="form-control" >
</div>

</div>
<div class="col-sm-6">
<div class="form-group">
<label for="image name">Product Title</label>
<input type="text" class="form-control" name="product_title">
</div></div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="Art caption">Product Description</label>
<input type="text" class="form-control" name="product_desc">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="image price"> Price (Ksh)</label>
<input type="text" class="form-control" name="product_price">
</div>
</div>
<div class="row">
<div class="col-sm-12">
<center>
<button class="btn btn-success" name="add" type="submit">Add</button>
</center>
</div>
</div>
<?php
if(isset($_POST['add'])){
    $image=$_FILES['image']['name'];
    $tmpimage=$_FILES['image']['tmp_name'];
    $product_title=$_POST['product_title'];
    $product_desc=$_POST['product_desc'];
    $product_price=$_POST['product_price'];
    $insert="INSERT INTO  products(name,product_title,product_desc,product_price,seller,status)VALUES('$image','$product_title','$product_desc','$product_price','$user','in stock')";
    if(mysqli_query($connect,$insert)){
        if(move_uploaded_file($tmpimage,'uploads/'.$image)){
            echo "<div class='alert alert-success'>Uploaded successfully</div>'";
        }
       
       
    }else{
        echo "<div class='alert alert-danger'>Error occured</div>'";
    }
}

?>
</div>


</div>