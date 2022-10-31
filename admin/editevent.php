<?php
include("header.php")
?>
<?php
require '../includes/db.php';

if(isset($_GET['user'])){

$usid = $_GET['user'];

$sql =" SELECT * FROM userlogin where userId = $usid";
   $result = mysqli_query($con, $sql);
   if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $firstname =$row['firstName'];
        $lastname =$row['lastName'];
        $email =$row['email'];
        $phonenumber =$row['phoneNumber'];
        $useid =$row['userId'];

    }

}

}
?>

<div class="table-con">
    <div class="table-c">
        <h1>EDIT USER</h1>
<form action="registermdb.php?user=<?php echo "{$useid}" ?>" method="post">
    <input type="text" name="firstname" id="name"  value="<?php echo $firstname ?>">
    <input type="text" name="lastname" id="name"  value="<?php echo $lastname ?>">
    <input type="text" name="email" id="number" value="<?php echo $email ?>">
    <input type="number" name="phone" id="image" value="<?php echo $phonenumber ?>">

    <button name="submit" id="update">
        Update
    </button>
</form>
</div>
</div>




<?php
include("footer.php")
?>