<?php
session_start();
include '../includes/db.php';
if(isset($_GET["transaction_id"]) AND isset($_GET["status"]) AND isset($_GET["tx_ref"])){
    $tranId = htmlspecialchars($_GET['transaction_id']);
    $tranStatus = htmlspecialchars($_GET['status']);
    $tranRef = htmlspecialchars($_GET['tx_ref']);

   // verify endpoint
    $url = "https://api.flutterwave.com/v3/transactions/".$tranId."/verify";

$curl = curl_init($url);

//DECIDE A REQUEST YOU WANT

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");

//set api headers

curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer FLWSECK_TEST-418f61552cb56bf8f96145a14320caed-X",
    "content-type: Application/json"
]);

  //run cUrl
  $run = curl_exec($curl);
  //check for error
  $error = curl_error($curl);

  if($error){
      die("curl return some errors" . $error);
  }
 //echo"<prev>" . $run. "</prev>";
 //convert to json obj
 
 $result = json_decode($run);

 $status = $result->data->status;

 //fetch the message

 $message = $result->message;
 $id = $result->data->id;
 $reference = $result->data->tx_ref;
 $amount = $result->data->amount;
 $fullname = $result->data->customer->name;
 $email = $result->data->customer->email;
if(($status != $tranStatus)){
header("loaction: ../donation/index.php?msg=Api returns error");
exit();

}else{
  //give value


//create database here
$query = "INSERT INTO donation (TransactionId, ReferenceNumber, dname, email, Amount) VALUES ('$id', '$reference', '$fullname', '$email', '$amount')";

   $result = mysqli_query($con, $query);

   if(!$result){
    die("query failed: ".mysqli_connect_error());
   }else{
       header("location: ../index.php");
   exit();  
   }

}
curl_close($curl);
}
else{
    header("location: ../donation"); 
}


