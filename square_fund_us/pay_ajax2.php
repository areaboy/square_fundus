<?php
error_reporting(0);


include('data6rst.php');


$resx = $db->prepare('SELECT SUM(cash) AS value_py FROM payments_status2 WHERE cash !=:cash');
$resx->execute(array(':cash' =>'p'));
$rowx = $resx->fetch();
//$countx = $resx->rowCount();
$pay_cash = $rowx['value_py'];



$resxa = $db->prepare('SELECT * FROM payments_status2 WHERE cash !=:cash');
$resxa->execute(array(':cash' =>'p'));
$countx = $resxa->rowCount();




$resxy = $db->prepare('SELECT SUM(card) AS value_py FROM payments_status2 WHERE card !=:card');
$resxy->execute(array(':card' =>'p'));
$rowxy = $resxy->fetch();
//$countx = $resx->rowCount();
$pay_card = $rowxy['value_py'];



$resxay = $db->prepare('SELECT * FROM payments_status2 WHERE card !=:card');
$resxay->execute(array(':card' =>'p'));
$countxy = $resxay->rowCount();


$count = $countx + $countxy;
$pay  = $pay_cash + $pay_card



?>


<div class='row'>


<div class='col-sm-4 xcx'>
<b style='font-size:20px'>
Overall Total Payments: <?php echo $count; ?>(Payments) </b><br>
<b style='font-size:16px;color:green'>
Overall Total Amount: <?php echo $pay; ?>(USD) </b><br>

</div>






<div class='col-sm-4 xcx'>
<b style='font-size:20px'>
Total Payments by Cash: <?php echo $countx; ?>(Payments) </b><br>
<b style='font-size:16px;color:navy'>
Total Amount Paid Via Cash: <?php echo $pay_cash; ?>(USD) </b><br>

</div>

<div class='col-sm-4 xcx'>
<b style='font-size:20px'>
Total Payments By Card: <?php echo $countxy; ?>(Payments) </b><br>
<b style='font-size:16px;color:#800000'>
Total Amount Via Cards: <?php echo $pay_card; ?>(USD) </b><br>

</div>


</div><p></p>






