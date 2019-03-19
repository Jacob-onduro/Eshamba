<table class="table table-bordered table-hovered table-striped ">
<thead>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Id No</th>
<th>County</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
include 'inc.php';
$sel="SELECT * FROM users_table";
$query=mysqli_query($connect,$sel);
while($aa=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $firstname=$aa['fname'];
    $lastname=$aa['lname'];
    $idno=$aa['idno'];
    $county=$aa['county'];
    $active=$aa['active'];
    
    date_default_timezone_set('Africa/Nairobi');
    $date=date("Y:M:d");
    
    $id=$aa['user_id'];
   
    echo "<tr>
    
    <td>$firstname</td>
    <td>$lastname</td>
    <td>$idno</td>
    <td>$county</td>";
    if($active !="Active"){
        echo "<td><a href='admin.php?activate_id=$id' class='btn btn-success btn-sm'>Activate</a></td>
    
    
        </tr>
        </form>";
    }else{
        echo "<td><a href='admin.php?deactivate_id=$id' class='btn btn-danger btn-sm'>Deactivate</a></td>
    
    
        </tr>
        ";
    }
    
}

?>

</tbody>
</table>