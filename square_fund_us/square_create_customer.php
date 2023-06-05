<?php
error_reporting(0);
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {


include('settings.php');

$password = strip_tags($_POST['password']);
$email = strip_tags($_POST['email']);

$given_name = strip_tags($_POST['given_name']);
$family_name = strip_tags($_POST['family_name']);
$phone_number = '08064242019';

$fullname ="$family_name $given_name";



$mt_id=rand(0000,9999);
$dt2=date("Y-m-d H:i:s");
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);


	
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$mt = microtime(true);
$mdx = md5($mt);
$uidx = uniqid();
$userid = $uidx.$timer.$mdx;
$username = $timer;







$data_param= '
{
    "given_name": "'.$given_name.'",
    "family_name": "'.$family_name.'",
    "email_address": "'.$email.'",
    "phone_number": "'.$phone_number.'",
    "idempotency_key": "'.$timer.'"
  }';






include('settings.php');
$url ="https://connect.squareupsandbox.com/v2/customers";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Square-Version: 2022-06-16', 'Content-Type: application/json', "Authorization: Bearer $square_accesstoken"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
echo $output = curl_exec($ch); 

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
$id = $json['customer']['id'];
$customer_id =$id;

if($id ==''){

echo "<script>alert('Customer Creation Failed');</script>";
echo "<div id='alertdata' style='background:red;color:white;padding:10px;border:none;'>Customer Creation Failed</div>";
exit();

}





include('data6rst.php');

//alter table users add column(photo varchar(300),userid varchar(300));


// check if user with this username already exits
$result_verified = $db->prepare('select * from users where username=:username');
$result_verified->execute(array(':username' =>$email));

//$result_verified = $db->prepare('select * from users');
//$result_verified->execute(array());
 $rows= $result_verified->fetch();
$norows= $result_verified->rowCount();

//if($norows== 1){

if($norows ==1){
echo "<div style='background:red;padding:8px;color:white;border:none;'>These Email Address already exist</div>";
exit();
}	 




if ($password == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>password is empty</font></div>";
exit();
}

if ($fullname == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>fullname Name is empty</font></div>";
exit();
}

if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is empty</font></div>";
exit();
}

$em= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$em){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is Invalid</font></div>";
exit();
}

$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>IP Address is Invalid</font></div>";
exit();
}




//hash password before sending it to database...
$options = array("cost"=>4);
$hashpass = password_hash($password,PASSWORD_BCRYPT,$options);






$statement = $db->prepare('INSERT INTO users

(username,fullname,password,created_time,timing,status,photo,userid,given_name,phone_number,family_name,customer_id)
 
                          values
(:username,:fullname,:password,:created_time,:timing,:status,:photo,:userid,:given_name,:phone_number,:family_name,:customer_id)');

$statement->execute(array( 

':username' => $email,
':fullname' => $fullname,
':password' => $hashpass,		
':created_time' => $created_time,
':timing' => $timer,
':status' =>'customer',
':photo' =>'user.png',
':userid' =>$userid,
':given_name' =>$given_name,
':phone_number' =>$phone_number,
':family_name' =>$family_name,
':customer_id' =>$customer_id



));



if($statement){
echo  "<script>alert('Account Successfully Created. You can Login Now');</script>";
echo "<div style='background:green;padding:8px;color:white;border:none;'>Account Successfully Created. You can Login Now...</div>";
echo "<script>
$('#myModal_signup_users').modal('hide');
$('#myModal_login_users').modal('show');
</script>
";

}

              else {
echo "<div style='background:red;padding:8px;color:white;border:none;'>Account Creation Failed. Ensure there is internet connections...</div>";
                }





}


?>



