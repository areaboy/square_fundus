<?php
error_reporting(0);

include('settings.php');
include('data6rst.php');


if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}



$url ="https://connect.squareupsandbox.com/v2/payments?location_id=$location_id&limit=200";

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
$payment_id = $json['payments'][0]['id'];
$l_id = $json['invoices'][0]['location_id'];

if($payment_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 No Payments Exist for this Business Location Id($l_id) </div><br>";
exit();

}


$del = $db->prepare('DELETE FROM payments_status2');
$del->execute(array());



echo '<table border="0" cellspacing="2" cellpadding="2" class="table table-striped_no table-bordered table-hover"> 
      <tr> 
    <th> <font face="Arial">Email</font> </th>
          <th> <font face="Arial">Payment Id</font> </th> 
          <th> <font face="Arial">Amount Donated</font> </th> 
   <th> <font face="Arial">Description</font> </th> 
<th> <font face="Arial">Reciept Number</font> </th>
          <th> <font face="Arial">Source Type</font> </th> 
<th> <font face="Arial">Status</font> </th>  
<th> <font face="Arial">Time Created</font> </th> 


      </tr>';


foreach($json['payments'] as $row){

               
$payment_id = $row['id'];
$status = $row['status'];
$location_id = $row['location_id'];
$source_type = $row['source_type'];
$created_at = $row['created_at'];
$amount = $row['amount_money']['amount'];
$currency = $row['amount_money']['currency'];

$customer_id = $row['customer_id'];
$order_id = $row['order_id'];
$buyer_email_address = $row['buyer_email_address'];
$note = $row['note'];


$receipt_number = $row['receipt_number'];
$receipt_url = $row['receipt_url'];   

if($source_type =='CASH'){
$source_t = "<span style='color:#800000'><b>$source_type</b></span><br>";


$statement = $db->prepare('INSERT INTO payments_status2(cash,card) values (:cash, :card)');
$statement->execute(array( 
':cash' => $amount, 
':card' => 'p'
));


}

if($source_type =='CARD'){
$source_t = "<span style='color:fuchsia'><b>$source_type</b></span><br>";

$statement = $db->prepare('INSERT INTO payments_status2(cash,card) values (:cash, :card)');
$statement->execute(array( 
':cash' =>  'p',
':card' => $amount
));

}




if($status){
$stat = "<span style='color:green'><b>$status</b></span><br>";

}


$customer_info="<button style='font-size:12px;' type='button'  class='btn btn-xs c_btn btn_actionx' data-toggle='modal' data-target='#myModal_x'
data-customer_id='$customer_id'
>View Customer/Donor Info</button>
";

        echo "<tr> 
<td>$buyer_email_address<br>
$customer_info</td>
                  <td>$payment_id</td>                
                  <td>$amount($currency)</td> 
<td>$note</td>

 <td>$receipt_number</td> 
                  <td>$source_t</td> 
                  <td>$stat</td> 

<td>$created_at</td> 
              </tr>";

    

}







?>