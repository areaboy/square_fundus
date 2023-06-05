<?php
error_reporting(0);
session_start();

$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));
echo $customer_id_sess = $_SESSION['user_customer_id_session'];


$qty= trim($_POST['qty']);
$title = strip_tags($_POST['title']);
$price = strip_tags($_POST['price']);

$userid = strip_tags($_POST['userid']);
$postid = strip_tags($_POST['postid']);
$currency = strip_tags($_POST['currency']);


include('data6rst.php');
include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}


$timer =time();

/*
$data_param= '{
    "idempotency_key": "'.$timer.'",
    "amount_money": {
      "currency": "'.$currency.'",
      "amount": '.$price.'
    },
    "buyer_email_address": "'.$email_sess.'",
    "source_id": "CASH",
    "cash_details": {
      "buyer_supplied_money": {
        "amount": '.$price.',
        "currency": "'.$currency.'"
      }
    }
  }';
*/

$titlex ="Donation: $title";

$data_param= '{
    "idempotency_key": "'.$timer.'",
    "amount_money": {
      "currency": "'.$currency.'",
      "amount": '.$price.'
    },
    "buyer_email_address": "'.$email_sess.'",
    "source_id": "CASH",
    "location_id": "'.$location_id.'",
    "customer_id": "'.$customer_id_sess.'",
    "note": "'.$titlex.'",
  "cash_details": {
      "buyer_supplied_money": {
        "amount": '.$price.',
        "currency": "'.$currency.'"
      }
    }

  }';




$url ="https://connect.squareupsandbox.com/v2/payments";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Square-Version: 2022-06-16', 'Content-Type: application/json', "Authorization: Bearer $square_accesstoken"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 $output = curl_exec($ch); 


$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch)) {
    //echo $error_msg = curl_error($ch);
}

curl_close($ch); 

if($output ==''){
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'> Please Ensure there is Internet Connections and Try Again. (Error: $output)</div><br>";
exit();
}


$json = json_decode($output, true);
$payment_id = $json['payment']['id'];
$status = $json['payment']['status'];
$order_id = $json['payment']['order_id'];


if($payment_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Payment Failed.   Please Ensure there is Internet Connections and Try Again</div><br>";
exit();

}








if($payment_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Payment Successful</div>";

echo "<script>alert('Payment Successful');</script>";
//echo "<script>location.reload();</script>";


}
else{
	
	echo "<div style='background:red;color:white;padding:10px;border:none'>Paymnts Failed...</div>";
	
}





?>