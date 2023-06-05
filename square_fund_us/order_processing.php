<?php

//error_reporting(0);
session_start();


$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));
$customer_id_sess = $_SESSION['user_customer_id_session'];




$qty= trim($_POST['qty']);
$title = strip_tags($_POST['title']);
$price = strip_tags($_POST['price']);

$userid = strip_tags($_POST['userid']);
$postid = strip_tags($_POST['postid']);
$currency = strip_tags($_POST['currency']);
$due_date = strip_tags($_POST['due_date']);




//include('data6rst.php');
include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}


$timer =time();




$data_param= '{
    "order": {
      "location_id": "'.$location_id.'",
      "line_items": [
        {
          "name": "'.$title.'",
          "base_price_money": {
            "currency":  "'.$currency.'",
            "amount": '.$price.'
          },
          "quantity": "1"
        }
      ]
    },
    "idempotency_key": "'.$timer.'"
  }';



$url ="https://connect.squareupsandbox.com/v2/orders";

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
$order_id = $json['order']['id'];
$status = $json['order']['state'];
$version = $json['order']['version'];



if($order_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Order Creation Failed. Error: $output  </div><br>";
exit();

}




if($order_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Order Created Successful</div><br>";

echo "<script>alert('Order Created Successful');</script>";
//echo "<script>location.reload();</script>";


echo "<script>


$(document).ready(function(){

var order_id  = '$order_id';
var location_id = '$location_id';
//var due_date = '2023-06-03';
var due_date = '$due_date';
var title = '$title';

 if(order_id==''){
alert('Order Id Failed.Please Try Again');
}


else{


$('#loader-inv').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=loader.gif>&nbsp;Step 2: Please Wait, Generating Payments Invoice...</div>');
var datasend = {order_id:order_id, location_id:location_id, due_date:due_date,title:title};

		$.ajax({
			
			type:'POST',
			url:'create_invoice.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-inv').hide();
$('#result-inv').html(msg);
//setTimeout(function(){ $('#result-inv').html(''); }, 5000);
	
}
			
		});
		
		}

});

</script>
<div id='loader-inv'></div>
<div id='result-inv'></div>
";







}
else{
	
	echo "<div style='background:red;color:white;padding:10px;border:none'>Order Creation Failed...</div>";
	
}





?>