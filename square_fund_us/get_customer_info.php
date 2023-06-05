<?php

error_reporting(0);


$customer_id= trim($_POST['customer_id']);


include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}

$url ="https://connect.squareupsandbox.com/v2/customers/$customer_id";

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
$custome_id = $json['customer']['id'];
$given_name = $json['customer']['given_name'];
$family_name = $json['customer']['family_name'];
$email_address = $json['customer']['email_address'];


if($custome_id ==''){

echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Customer Retrieval  Failed.   Please Ensure there is Internet Connections and Try Again</div>";
exit();

}

echo "<div id='alertdata_uploadfiles_o' style='background:green;color:white;padding:10px;border:none;'>
 Square Customer Info</div>";

echo "
<b>Customer Id:</b>  $custome_id<br>
<b>Given Name:</b>  $given_name<br>
<b>Family Name:</b>  $family_name<br>
<b>Email:</b>  $email_address<br>


";













?>