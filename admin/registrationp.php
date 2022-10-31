<?php
require '../includes/db.php';
session_start();
   $sql =" SELECT * FROM registerp";
   $result = mysqli_query($con, $sql);
?>
<?php
include("header.php")
?>
<!--table section-->
<section>
<div class="tablecontainer"
>

<div class="table-card">

<div class="table-header">
Register member for the program    
</div>


<table class="content-table">
    <thead>
<tr>
    <th>name</th>
    <th>Email</th>
    <th>Phonenumber</th>
    <th>location</th>
</tr>
    </thead>
<tbody>

    <?php
     if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $name =$row['firstName'];
            $email =$row['email'];
            $phonenumber =$row['phoneNumber'];
            $location =$row['location'];
        
            echo"<tr>";
           echo "<td>$name</td>";
           echo "<td>{$email}</td>";
           echo "<td>{$phonenumber}</td>";
           echo "<td>{$location}</td>";
            echo"</tr>";
        }
 
    }
    
    ?>
    
</tbody>
</table>
</div>
</div>
</section>
<?php
include("footer.php")
?>