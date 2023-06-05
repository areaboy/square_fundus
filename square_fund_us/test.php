<script src="jquery.min.js"></script>



<script>


$(document).ready(function(){

var pay  = 'pay';


$('#loader-i').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=loader.gif>&nbsp;Step 3: Please Wait, Geting Payments Values</div>');
var datasend = {pay:pay};

		$.ajax({
			
			type:'POST',
			url:'pay_ajax.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-i').hide();
$('#result-i').html(msg);
//setTimeout(function(){ $('#result-i').html(''); }, 5000);
	

			}
		});
		
	

});



</script>







<div id='loader-i'></div>
<div id='result-i'></div>








<?php




$output='{
  "invoices": [
    {
      "amount": 12
    },
{
      "amount": 34
    },

{
      "amount": 14
    }
]
}';






$json = json_decode($output, true);


$sum = 0;
foreach($json['invoices'] as $row){

               
$amount = $row['amount'];

//$total = array_sum($amount);
$sum+= $amount;

}


echo $sum;




?>