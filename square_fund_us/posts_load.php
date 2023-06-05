

<?php
error_reporting(0);

session_start();


$email_sess1 =  htmlentities(htmlentities($_SESSION['email'], ENT_QUOTES, "UTF-8"));


?>



<script>


$(document).ready(function(){
$('.btn_action_buy').click(function(){
//$(document).on( 'click', '.btn_action_buy', function(){ 

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var image = $(this).data('image');
var owner = $(this).data('owner');
var userid = $(this).data('userid');


//alert(image);

$('.postid1').html(postid);
$('.title1').html(title);
$('.description1').html(description);
//$('.image1').html(image);
$('.owner1').html(owner);
$('.userid1').html(userid);




$('.title2').val(title).value;
$('.postid2').val(postid).value;
$('.description2').val(description).value;
$('.image2').val(image).value;
$('.owner2').val(owner).value;
$('.userid2').val(userid).value;











$('.postid1x').html(postid);
$('.title1x').html(title);
$('.description1x').html(description);
$('.owner1x').html(owner);
$('.userid1x').html(userid);





$('.title2x').val(title).value;
$('.postid2x').val(postid).value;
$('.description2x').val(description).value;
$('.image2x').val(image).value;
$('.owner2x').val(owner).value;
$('.userid2x').val(userid).value;

		
	})


});



</script>
       
<style>


.buy_btn1{
background: #1569C7;
color:white;
padding:10px;
border-radius:15%;

}


.buy_btn1:hover {
background: black;
color:pink;
}


.buy_btn2{
background: #800000;
color:white;
padding:10px;
border-radius:15%;

}


.buy_btn2:hover {
background: black;
color:pink;
}






</style>







<!--start loading post-->











<?php
error_reporting(0);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

?>
       









<!--start loading post-->






            <?php
//error_reporting(0);

include('data6rst.php');

//$userid_sess =  strip_tags($_POST['userid_sess']);



$result = $db->prepare('SELECT * FROM posts  order by id desc');
$result->execute(array());





$nosofrows = $result->rowCount();
if($nosofrows == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Posts has been published yet..</div>";
exit();
}



while($row = $result->fetch()){

                $id= $row['id'];
                $postid = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $timing = $row['timing'];
                $fullname =$row['fullname'];
                $photo = $row['photo'];
                $userid = $row['userid'];
                $currency = $row['currency'];
$price = $row['price'];
$comments = $row['comments'];          
$images = $row['post_image'];    

    $microcontent = substr($description, 0, 450)."...";            

   // }





            ?>
                
                

<style>
.post_css1{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
}


.post_css1:hover{
background:orange;
color:black;


}



.help_css{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
font-size:16px;
}


.help_css:hover{
background:orange;
color:black;


}




.xcx1{
background-color: #ccc;
padding: 2px;
color:black;
font-size:14px;
border-radius: 10%;
border: none;
//cursor: pointer;
text-align: center;
height:280px;

}
.xcx1:hover {
background: orange;
color:white;
}	
</style>


<div style='display:inline-block' class='xcx1 col-sm-3'>


<br>
<b style='font-size:20px;'><?php echo $title; ?></b> <br>
<b >Descriptions:</b>   <?php echo $description; ?><br>


<span style='display:none'><b> <span style='color:#8B008B;' class='fa fa-calendar'></span>Published Time:</b>  <span data-livestamp="<?php echo $timing;?>"></span></span>
<br>



<button id=""  data-toggle="modal" data-target="#myModal_buy"  title="Donate Now" data-title="<?php echo $title; ?>" 
 data-id="<?php echo $id; ?>"  data-description="<?php echo $description; ?>" 
data-owner="<?php echo $fullname; ?>"  data-userid="<?php echo $userid; ?>" 
class="btn_action_buy buy_btn1" >Donate Now</button>






</div>






            <?php
            }
            ?>



      



<!--End loading posts-->


<br><br><br>





<script>

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_buy').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.myform_clean').empty();  
 console.log("modal closed and content cleared");
 });
});

</script>



<!--  buy Modal starts here --->


<div class="container_action">

  <div class="modal fade " id="myModal_buy" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>

          <h4 class="modal-title">Square Donation  Payments System</h4>
        </div>
        <div class="modal-body">




<script>


//cash

$(document).ready(function(){
$('#cash_btn').click(function(){
		
var qty = '1';
var title = $('.title2').val();
var price = $(".price2").val();
var userid = $(".userid2").val();
var postid = $(".postid2").val();
var currency = $(".currency").val();

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}

else if(price==""){
alert('please Enter Amount to Donate');
}
else if(currency==""){
alert('please Select Currency');
}


else{
$('#loader_cash').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing Payments by Cash...</div>')



var datasend = {qty:qty,title: title, price: price, userid:userid, postid:postid, currency:currency};	
		$.ajax({
			
			type:'POST',
			url:'payments_cash.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_cash').hide();
$('#result_cash').html(msg);
setTimeout(function(){ $('#result_cash').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});






//card

$(document).ready(function(){
$('#card_btn').click(function(){
		
var qty = '1';
var title = $('.title2').val();
var price = $(".price2").val();
var userid = $(".userid2").val();
var postid = $(".postid2").val();
var currency =$(".currency").val();

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}

else if(price==""){
alert('please Enter Amount to Donate');
}
else if(currency==""){
alert('please Select Currency');
}

else{
$('#loader_card').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing Payments by Card...</div>')



var datasend = {qty:qty,title: title, price: price, userid:userid, postid:postid, currency:currency};	
		$.ajax({
			
			type:'POST',
			url:'payments_card.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_card').hide();
$('#result_card').html(msg);
setTimeout(function(){ $('#result_card').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});







//Sqaure Gift card

$(document).ready(function(){
$('#giftcard_btn').click(function(){
		
var qty = '1';
var title = $('.title2').val();
var price = $(".price2").val();
var userid = $(".userid2").val();
var postid = $(".postid2").val();
var currency =$(".currency").val();

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}
else if(price==""){
alert('please Enter Amount to Donate');
}
else if(currency==""){
alert('please Select Currency');
}

else{
$('#loader_giftcard').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing Payments by Square Gift Card...</div>')



var datasend = {qty:qty,title: title, price: price, userid:userid, postid:postid, currency:currency};	
		$.ajax({
			
			type:'POST',
			url:'payments_giftcard.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_giftcard').hide();
$('#result_giftcard').html(msg);
setTimeout(function(){ $('#result_giftcard').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});









//order

$(document).ready(function(){
$('#order_btn').click(function(){
		
var qty = '1';
var title = $('.title2').val();
var price = $(".price2").val();
var userid = $(".userid2").val();
var postid = $(".postid2").val();
var currency =$(".currency").val();
var due_date =$(".due_date").val();

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}
else if(price==""){
alert('please Enter Amount to Donate');
}
else if(currency==""){
alert('please Select Currency');
}

else if(due_date==""){
alert('please Select Order/Donation Payment Due Date');
}

else{
$('#loader_order').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Your Order is being Processed...</div>')



var datasend = {qty:qty,title: title, price: price, userid:userid, postid:postid, currency:currency, due_date:due_date};	
		$.ajax({
			
			type:'POST',
			url:'order_processing.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_order').hide();
$('#result_order').html(msg);
//setTimeout(function(){ $('#result_order').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});




</script>
          


 

<div style='font-size:18px'><b>Title: </b> <span class='title1'></span></div>
<div style=''><b>Description:</b> <span class='description1'></span></div>

<br>
No Amount is too small. Your Donation can help save someone's life....<br>

<!-- form START -->




<br>


<div class="form-group">
              <label> Amount to Donate: </label>
              <input type="text" class="col-sm-12 form-control price2" id="" name="price2" placeholder="Amount to Donate">
            </div>


<div class="form-group">
              <label> Select Currency: </label>
              <select class="col-sm-12 form-control currency" id="" name="currency">
<option value='USD'>USD</option>

</select>
            </div>



<br><br>






<input type='hidden' name='title2' class='title2' values=''>

<input type='hidden' name='userid2' class='userid2' values=''>
<input type='hidden' name='postid2' class='postid2' values=''>




<div class="col-sm-4 form-group">

                        <div id="loader_cash" class='myform_clean'></div>
                        <div id="result_cash" class='myform_clean'></div>


<button type="button" id="cash_btn" class="cash_btn help_css"  title='Donate Via  Cash' >Donate Via  Cash</button>
</div>


<div class="col-sm-4 form-group">

                        <div id="loader_card" class='myform_clean'></div>
                        <div id="result_card" class='myform_clean'></div>


<button type="button" id="card_btn" class="card_btn help_css" title='Donate Via Card'  >Donate Via Card</button>
</div>




<div class="col-sm-4 form-group">

                        <div id="loader_giftcard" class='myform_clean'></div>
                        <div id="result_giftcard" class='myform_clean'></div>


<button type="button" id="giftcard_btn" class="giftcard_btn help_css" title='Donate Via Gift Card'  >Donate Via  Square Gift Card</button>
</div>



<br><br>



<span style='color:red'>Assuming You don't have your <b>Cash, Credit Card, Square Gift Cards etc.</b> with You at the Moment,
 You Can Still Donate by placing an <b>
Order</b>
 and we will send you a <b>Donation Payments Invoice</b> on your Email to pay/Donate Later </span>
<br><br>


<div class="form-group">
              <label> Select Order/Donation Payment Due Date: </label>
              <input type="date" class="col-sm-12 form-control due_date" id="" name="due_date" placeholder="Order/Donation Payment Due Date">
            </div>



<div class="col-sm-12 form-group">
<center>

                        <div id="loader_order" class='myform_clean'></div>
                       
<button type="button" id="order_btn" class="order help_css" title='Place Order & Recieve Invoice to Donate Later'  >Place Order & Recieve Invoice to Donate Later</button>

 <div id="result_order" class='myform_clean'></div>

</center>
</div>



<!--   form ENDS   -->


<br /><br />
<br /><br />
<br /><br />

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!--  buy Modal ends here  -->



























































