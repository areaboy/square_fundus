<?php
error_reporting(0);


session_start();


$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));
$customer_id_sess = $_SESSION['user_customer_id_session'];



$order_id= trim($_POST['order_id']);
$location_id = strip_tags($_POST['location_id']);
$due_date = strip_tags($_POST['due_date']);
$title = strip_tags($_POST['title']);


$titlex ="Donation: $title";


include('data6rst.php');
include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}


$timer =time();


 //  "scheduled_at": "2023-06-03T04:02:03.861Z",

$data_param='{
    "invoice": {
      "accepted_payment_methods": {
        "card": true,
        "square_gift_card": true
      },
      "delivery_method": "EMAIL",
      "store_payment_method_enabled": true,
   
      "payment_requests": [
        {
          "request_type": "BALANCE",
          "due_date": "'.$due_date.'"
        }
      ],
      "description": "'.$titlex.'",
      "invoice_number": "'.$timer.'",
      "primary_recipient": {
        "customer_id": "'.$customer_id_sess.'"
      },
      "location_id": "'.$location_id.'",
      "order_id": "'.$order_id.'"
    }
  }';




$url ="https://connect.squareupsandbox.com/v2/invoices";

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

echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Please Ensure there is Internet Connections and Try Again</div><br>";
exit();
}


$json = json_decode($output, true);
$invoice_id = $json['invoice']['id'];
$status = $json['invoice']['status'];
$version = $json['invoice']['version'];
$location_id = $json['invoice']['location_id'];
$invoice_number = $json['invoice']['invoice_number'];
$description = $json['invoice']['description'];
$created_at = $json['invoice']['created_at'];
$order_id = $json['invoice']['order_id'];
$amount = $json['invoice']['payment_requests']['computed_amount_money']['amount'];
$currency = $json['invoice']['payment_requests']['computed_amount_money']['currency'];


if($invoice_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Invoice Creation Failed. Error: $output  </div><br>";
exit();

}








if($invoice_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Invoice Created Successful</div><br>";

echo "<script>alert('Invoice Created Successful');</script>";
//echo "<script>location.reload();</script>";


echo "<script>
$(document).ready(function(){

var invoice_id  = '$invoice_id';
var version = '$version';

 if(invoice_id==''){
alert('Invoice Id Failed.Please Try Again');
}

else{

$('#loader-invp').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=loader.gif>&nbsp;Step 3: Please Wait, Publishing Invoice...</div>');
var datasend = {version:version, invoice_id:invoice_id};

		$.ajax({
			
			type:'POST',
			url:'publish_invoice.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-invp').hide();
$('#result-invp').html(msg);
//setTimeout(function(){ $('#result-invp').html(''); }, 5000);
	
}
			
		});
		
		}

});

</script>
<div id='loader-invp'></div>
<div id='result-invp'></div>
";







}
else{
	
	echo "<div style='background:red;color:white;padding:10px;border:none'>Invoice  Creation Failed...</div>";
	
}





?>