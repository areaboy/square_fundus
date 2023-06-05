<?php
error_reporting(0);


include('data6rst.php');


$resx = $db->prepare('SELECT SUM(invoice_paid) AS value_py FROM payments_status WHERE invoice_paid !=:invoice_paid');
$resx->execute(array(':invoice_paid' =>'p'));
$rowx = $resx->fetch();
//$countx = $resx->rowCount();
$pay_invoice = $rowx['value_py'];



$resxa = $db->prepare('SELECT * FROM payments_status WHERE invoice_paid !=:invoice_paid');
$resxa->execute(array(':invoice_paid' =>'p'));
$countx = $resxa->rowCount();




$resxy = $db->prepare('SELECT SUM(invoice_unpaid) AS value_py FROM payments_status WHERE invoice_unpaid !=:invoice_unpaid');
$resxy->execute(array(':invoice_unpaid' =>'p'));
$rowxy = $resxy->fetch();
//$countx = $resx->rowCount();
$unpay_invoice = $rowxy['value_py'];



$resxay = $db->prepare('SELECT * FROM payments_status WHERE invoice_unpaid !=:invoice_unpaid');
$resxay->execute(array(':invoice_unpaid' =>'p'));
$countxy = $resxay->rowCount();



?>


<div class='row'>

<div class='col-sm-6 xcx'>
<b style='font-size:20px'>
Total Paid Invoice: <?php echo $countx; ?>(Invoices) </b><br>
<b style='font-size:16px;color:green'>
Total Amount Paid: <?php echo $pay_invoice; ?>(USD) </b><br>

</div>

<div class='col-sm-6 xcx'>
<b style='font-size:20px'>
Total UnPaid Invoice: <?php echo $countxy; ?>(Invoices) </b><br>
<b style='font-size:16px;color:red'>
Total Amount UnPaid: <?php echo $unpay_invoice; ?>(USD) </b><br>

</div>


</div><p></p>






