<?php
error_reporting(0);
include('settings.php');

$timer = time();

$version= trim($_POST['version']);
$invoice_id= trim($_POST['invoice_id']);

$data_param='{
    "version":  '.$version.',
    "idempotency_key":  "'.$timer.'"
  }';

$url ="https://connect.squareupsandbox.com/v2/invoices/$invoice_id/publish";

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

$json = json_decode($output, true);
$invoice_id = $json['invoice']['id'];
//$status = $json['invoice']['status'];



if($invoice_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Invoice Publishing Failed. Error: $output  </div><br>";
exit();

}


if($invoice_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Invoice Successfully Published and sent to your Mail</div><br>";

echo "<script>alert('Invoice Successfully Published and sent to your Mail');</script>";

}





?>