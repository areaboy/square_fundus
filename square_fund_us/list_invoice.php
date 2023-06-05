<?php
error_reporting(0);

include('settings.php');
include('data6rst.php');


if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}



$url ="https://connect.squareupsandbox.com/v2/invoices?location_id=$location_id&limit=200";

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
$inv_id = $json['invoices'][0]['id'];
$l_id = $json['invoices'][0]['location_id'];

if($inv_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 No Invoice Exist for this Business Location Id($l_id) </div><br>";
exit();

}


$del = $db->prepare('DELETE FROM payments_status');
$del->execute(array());



echo '<table border="0" cellspacing="2" cellpadding="2" class="table table-striped_no table-bordered table-hover"> 
      <tr> 
          <th> <font face="Arial">Name</font> </th> 
          <th> <font face="Arial">Email</font> </th> 
          <th> <font face="Arial">Invoice ID</font> </th> 
          <th> <font face="Arial">Amount Donated</font> </th> 
          <th> <font face="Arial">Invoice Status</font> </th> 
<th> <font face="Arial">Description</font> </th> 
<th> <font face="Arial">Due Date</font> </th> 
<th> <font face="Arial">Time Created</font> </th> 


      </tr>';





foreach($json['invoices'] as $row){

               
$invoice_id = $row['id'];
$status = $row['status'];
$version = $row['version'];
$location_id = $row['location_id'];
$invoice_number = $row['invoice_number'];
$description = $row['description'];
$created_at = $row['created_at'];
$order_id = $row['order_id'];
$amount = $row['payment_requests'][0]['computed_amount_money']['amount'];
$currency = $row['payment_requests'][0]['computed_amount_money']['currency'];

$due_date = $row['payment_requests'][0]['due_date'];

$customer_id = $row['primary_recipient']['customer_id'];
$given_name = $row['primary_recipient']['given_name'];
$family_name = $row['primary_recipient']['family_name'];
$email_address = $row['primary_recipient']['email_address'];
$fullname ="$family_name $given_name"; 

$public_url = $row['public_url'];  

if($status =='UNPAID'){
$pt = "<span style='color:red'><b>$status</b></span><br>";
$pay = "<a style='font-size:12px;color:red' target='_blank' title ='Pay Invoice' href='$public_url'> Pay New Invoice</a>";


$statement = $db->prepare('INSERT INTO payments_status(invoice_paid,invoice_unpaid) values (:invoice_paid, :invoice_unpaid)');
$statement->execute(array( 
':invoice_paid' => 'p', 
':invoice_unpaid' => $amount
));


}

if($status =='PAID'){
$pt = "<span style='color:green'><b>$status</b></span><br>";
$pay = "<a style='font-size:12px;color:green' target='_blank' title='Download Paid Invoice' href='$public_url'> Download Paid Invoice</a>";


$statement = $db->prepare('INSERT INTO payments_status(invoice_paid,invoice_unpaid) values (:invoice_paid, :invoice_unpaid)');
$statement->execute(array( 
':invoice_paid' => $amount, 
':invoice_unpaid' => 'p'
));


}

if($status =='SCHEDULED'){
$pt = "<span style='color:fuchsia'><b>$status</b></span>";
$pay ='';
}  

        echo "<tr> 
<td>$fullname</td>
<td>$email_address</td> 
                  <td>$invoice_id</td>                
                  <td>$amount($currency)</td> 
                  <td>$pt $pay</td> 
                  <td>$description</td> 
 <td>$due_date</td> 
<td>$created_at</td> 
              </tr>";

//UNPAID, PAID SCHEDULED
    

}







?>