<?php
if(isset($_POST['submit'])){
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$amount = $_POST['amount'];
//integration payment
$endp = "https://api.flutterwave.com/v3/payments";
//required data

$postdata = array(
    "tx_ref" => uniqid().uniqid(),
    "currency" => "NGN",
    "amount" => $amount,

    "customer" => array(
        "name" => $name,
        "email" => $email,
        
    ),

    "customization" => array(
        "title" => "THANK FOR THE DONATION GOD BLESS YOU",
        "description" => "We Love and Cherish you"   
    ), 
    "redirect_url" => "https://tacmove/flutterwave/paymentverify.php"   

);
//init curl handler

$ch = curl_init();

//set the endpoint
curl_setopt($ch, CURLOPT_URL, $endp);

//turn on the curl post method
curl_setopt($ch, CURLOPT_POST, 1);

//encode the post field
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));

//make it return data

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//set the waiting timeout 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
curl_setopt($ch, CURLOPT_TIMEOUT, 200);

//SET HEADER FROM ENDPOINT
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer FLWSECK_TEST-418f61552cb56bf8f96145a14320caed-X",
    "content-type: Application/json",
    "cache-control: no-cache"
));

//execute the curl session

$request = curl_exec($ch);
$result = json_decode($request);
//var_dump($result);

header("location: ".$result->data->link);

//close curl session
curl_close($ch);
}else{
    header("location: ../index.php"); 
}


?>

