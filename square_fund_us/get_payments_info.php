<?php

error_reporting(0);
session_start();

$userid_sess =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email'], ENT_QUOTES, "UTF-8"));

 $payment_id= trim($_POST['payment_id']);


include('data6rst.php');
include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}




$url ="https://connect.squareupsandbox.com/v2/payments/$payment_id";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Square-Version: 2022-06-16', 'Content-Type: application/json', "Authorization: Bearer $square_accesstoken"));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch);  


$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch)) {
    //echo $error_msg = curl_error($ch);
}

curl_close($ch); 




if($output ==''){

echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Please Ensure there is Internet Connections and Try Again</div><br>";
exit();
}


$json = json_decode($output, true);
$payment_id = $json['payment']['id'];
$status = $json['payment']['status'];
$order_id = $json['payment']['order_id'];
$amount = $json['payment']['amount_money']['amount'];
$currency = $json['payment']['amount_money']['currency'];
$source_type = $json['payment']['source_type'];


if($payment_id ==''){

echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Payment Failed.   Please Ensure there is Internet Connections and Try Again</div><br>";
exit();

}

echo "<br><div id='alertdata_uploadfiles_o' style='background:green;color:white;padding:10px;border:none;'>
 Square Payment Raw Info</div><br>";

echo "
<b>Payment Id:</b>  $payment_id<br>
<b>Order Id:</b>  $order_id<br>
<b>Status:</b>  $status<br>
<b>Amount:</b>  $amount<br>
<b>Currency:</b>  $currency<br><br>
<b>Source Type:</b> $source_type<br><br>


";

echo $output;













?>