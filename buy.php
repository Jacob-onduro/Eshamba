<?php 
include 'nav.php';
?>

<div class="row" style="padding-top:43px">

    <?php 
                $select="SELECT * FROM products";
                $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_desc=$row['product_desc'];
                    $product_price=$row['product_price'];
                    $imagename=$row['name'];
                    
                    echo "<div class='col-sm-4 thumbnail' style='text-align:center'>
                   
                    <img src='uploads/$imagename' class='img-responsive ' style='height:200px'/>
                    <div><h4>$product_title</h4>
                    <h5>$product_desc</h5>
                    <p>$product_price</p>
                   <form>
                   

                   <a href='#' class='btn' style='background:green;color:white' >Like Product</a>
                   <a href='user.php?product_idd=$product_id&username=$user' class='btn' style='background:green;color:white' >Buy Product</a>
                   </form></div>
                   
                   </div>";
                }
                

              

                if(isset($_GET['product_idd']) && isset($_GET['username'])){
                    include 'pesapal.php';
                   
			}















                
                ?>
                
    </div>
 