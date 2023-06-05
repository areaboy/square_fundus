<?php
error_reporting(0);
include('settings.php');
$timerx = time();

session_start();
include ('authenticate.php');



$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo $fullname_sess; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>
<script src="jquery.dataTables.min.js"></script>
  <script src="dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="dataTables.bootstrap.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#008080;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #008080;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.invite_btn{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: red;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #008080;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #008080;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:fuchsia;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}




.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	






.category_post1{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}



.category_post1x{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}



.category_post1xx{
background-color: #3b5998;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}	


.modal-dialog{
   
   margin-top: 110px;
} 





.xcx{
background-color: #ddd;
padding: 6px;
color:black;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;

}
.xcx:hover {
background: orange;
color:white;
}	



.seeking_css2{
background: #800000;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css2:hover{
background: black;
color:white;

}
			
</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>



<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>


<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo1.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">


<li style='display:none;' class="navgate">

<button data-toggle="modal" data-target="#myModal_data" class="category_post1"><i  style="color:white;font-size:10px;"></i>Create Posts </button>

</li>


<li class="navgate">

<button class="category_post1"><a style="color:white;" href='payments.php'>View Direct Payments</a></button>

</li>

<li class="navgate">

<button class="category_post1"><a style="color:white;" href='invoice.php'>View Invoices & Payments</a></button>

</li>


   
<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo $photo_sess; ?>" width="80px" height="80px">

<span class="dropdown">
  <a style="color:white;font-size:14px;" class="btn1 btn-default1 ">
<?php echo $fullname_sess; ?></a>
</span>

</li>


 <li class="navgate_no"><a href="logout.php" title='Logout'  style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>

      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->

<br><br>

<div class='row'>



<center><h2> Please Donate to help the Needy</h2></center>

<div class='col-sm-12'>

To facilitate fast and easy Donations, You can Donate via Square <b>Cash, Credit Card, Square Gift Cards etc.</b> 

<br><br>
<span style='color:#008080'>Assuming You dont have your <b>Cash, Credit Card, Square Gift Cards etc.</b> at the Moment,
 You Can Still Donate by placing an <b>
Order</b>
 and we will send you a <b>Donation Payments Invoice</b> on your Email to pay/Donate Later </span>

</div><br>

<!--start loading post-->

<script>

$(document).ready(function(){

var dt = 'data';
var userid_sess = '<?php echo $userid_sess ?>';


$("#loader-dashboard_post").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Please Wait,Loading post...</div>');
var datasend = {dt_send:dt, userid_sess: userid_sess};


	
		$.ajax({
			
			type:'POST',
			url:'posts_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-dashboard_post").hide();
$("#result-dashboard_post").html(msg);
//setTimeout(function(){ $('#result-dashboard_post').html(''); }, 5000);				
	
}
			
		});
		
		

});





</script>
<br>
<div class='rows'>
<div class='col-sm-1'></div>
<div class='col-sm-10'>
<div id="loader-dashboard_post"></div>
<div id="result-dashboard_post"></div>
</div>

<div class='col-sm-1'></div>

</div>

<!--End loading posts-->


</div>

















<!-- products modal starts here -->


<div class="container_products">

  <div class="modal fade " id="myModal_data" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right1 modaling_sizing1">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Create New Posts</h4>
        </div>
        <div class="modal-body">









<div class='col-sm-12' style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>



<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}
</style>


        <script>
		
	

            $(function () {
                $('#save_btn').click(function () {
                   
               
var price = '0';
var currency = 'USD';
					var title = $('#title').val();
					var desc = $('#desc').val();
					

					

// start if validate
if(title==""){
alert('Title cannot be Empty');
}
else if(desc==""){
alert('Description cannot be Empty');
}
else if(price==""){
alert('Price cannot be Empty');
}


else if(isNaN(price)){
alert('price must be number');
}


else{


          var form_data = new FormData();
		  form_data.append('title', title);
		  form_data.append('desc', desc);
		  form_data.append('price', price);
		  form_data.append('currency', currency );
		  
          
                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Pls Wait. Posts is being Submitted...</span>');
                    $.ajax({
                        url: 'posts.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                       
                        success: function (msg) {
                                $('#box').val('');
				$('#loader').hide();
				//$('.result_data').fadeIn('slow').prepend(msg);
				$('.result_data').html(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');

								//$('#save_btn').hide();

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
//$('#file_fname').val('');
}




                        }
                    });
} // end if validate
                });
            });

			
			
			</script>










<form id="" method="post">
<div class="col-sm-12 form-group">
<label>Enter Posts Title. </label><br>
<input  class="form-control " id="title" name="title" placeholder="Enter Title" type="text" required>
</div>

<div class="col-sm-12 form-group">
<label>Enter Posts Descriptions. </label><br>
<textarea  cols="5" rows="3" class="form-control " id="desc" name="desc" placeholder="Enter Description" type="text" required></textarea>
</div>


<div style='display:none' class="col-sm-12 form-group">
<label>Enter Amount to Pay/Donate in (USD)</label><br>

 

<input  class="form-control price" id="price" name="price" placeholder="Enter Price." type="text" required>
</div>



                    <div class="form-group">
                            

                        <div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="btn btn-primary" value="Submit Posts" />
    </form>

</div>



<!--end form-->



</div><br><br>

<br><br>

<!--form ENDS-->


        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  data modal ends here -->





<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->




   
</body>
</html>


