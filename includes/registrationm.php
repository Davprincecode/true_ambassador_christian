<?php
include 'db.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$location = $_POST['location'];

$qry ="INSERT INTO registerm (name, email, phonenumber, location) VALUES ('$name', '$email', '$phonenumber', '$location')";
$result = mysqli_query($con, $qry);
if($result){

    echo '<script> alert("THANKS FOR JOINING TACM WE LOOK FORWARD TO HEAR FROM YOU.") </script>';

    echo '<script>window.location = "../index.php"</script>';

}else{

    header("location : ../index.php?wrong=opps something went wrong please check your network");
}


}else{
    header("location : ../index.php?msg=you are not allowed, you are a scammer");
}







?>