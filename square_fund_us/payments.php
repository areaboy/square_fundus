<?php
error_reporting(0); 
?>


<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));

include('settings.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>
 
<title> </title>

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





<script>
$(document).ready(function(){






var userid_sess_data = '<?php echo $userid_sess ?>';
var fullname_sess_data = '<?php echo $fullname_sess ?>';
var username_sess_data = '<?php echo $userid_sess ?>';
var email_sess_data = '<?php echo $email_sess ?>';


$('.myd_fullname_sess').html(fullname_sess_data);
$('.myd_userid_sess').html(userid_sess_data);
$('.myd_username_sess').html(username_sess_data);


});

</script>


<style>







/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
}

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

background: #824c4e;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
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

/*
modal_mobile_resize 

@media screen and (max-width: 600px) {
  .modal_mobile_resize {
    width: 100%;
    margin-top: 15%;
  }
}


*/



.btn_copyright{
//background: orange;
color:orange;
//padding:2px;
font-weight:200;
}


.btn_copyright:hover {
background: black;
color:pink;
font-weight:700;
}




/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#008080;
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



.left_shifting{

width:40%;
}

@media screen and (max-width: 768px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}


}



@media screen and (max-width: 600px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}

}

.modaling_sizing{
width:59%;
}


@media screen and (max-width: 768px) {
.modaling_sizing {
width:99%;

}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center;
}


}

@media screen and (max-width: 600px) {
.modaling_sizing {
width:99%;
}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center; 
}



}

.category_post{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
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

border-style: solid; border-width:4px; border-color: fuchsia;
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





.c_btn{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;

}
.c_btn:hover {
background: black;
color:white;
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

		


</style>



<script>
// set post url

url_post_data ="";

</script>

    </head>
    <body>

 
</head>
<body>



<!-- start column nav-->



<br><br><br><br><br><br>



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
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">




<li class="navgate">

<button class="category_post1"><a style="color:white;" href='dashboard.php'>Back to Dashboard</a></button>

</li>


<li class="navgate">
  <span class='myd_fullname_sess'></span>

<a style='color:white' title='Logout' href="logout.php"><span style='font-size:30px;color:white;' class='fa fa-sign-out'></span> Logout</a></li>




    </div>





</nav>



    </div><br />

<!-- end column nav-->


<div class="row">


<center><h2>Direct Donation Payments Details Via Payments API</h2></center>

</div>


<script>
/*
$(document).ready(function(){

var pay  = 'pay';


$('#loader-i').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=loader.gif>&nbsp;Step 3: Please Wait, Geting Payments Values</div>');
var datasend = {pay:pay};

		$.ajax({
			
			type:'POST',
			url:'pay_ajax2.php',
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
*/
</script>


<div id='loader-i'></div>
<div id='result-i'></div>





<script>
$(document).ready(function(){

var pay = 'pay';

if(pay==""){
alert('issues with Payments');
}


else{



          var form_data = new FormData();
          form_data.append('pay', pay);

                    $('#loader_p').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait,fetching Payments  Details From Payments API...</span>');
                    $.ajax({
                        url: 'list_payments.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                      
                        success: function (msg) {
                                
				$('#loader_p').hide();
				$('#result_p').fadeIn('slow').prepend(msg);


if(msg){


//$(document).ready(function(){

var pay  = 'pay';


$('#loader-i').fadeIn(400).html('<br><div style=color:black;background:#ddd;padding:10px;><img src=loader.gif>&nbsp;Step 3: Please Wait, Geting Payments Values</div>');
var datasend = {pay:pay};

		$.ajax({
			
			type:'POST',
			url:'pay_ajax2.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$('#loader-i').hide();
$('#result-i').html(msg);
//setTimeout(function(){ $('#result-i').html(''); }, 5000);
	

			}
		});
		
	

//});


}





                   
                        }
                    });
} // end if validate

});
</script>

<br><br>

<div id='loader_p'></div>
<div id='result_p'></div>

   <br><br>




<script>
$(document).ready(function(){
//$('.btn_actionx').click(function(){
$(document).on( 'click', '.btn_actionx', function(){ 

var customer_id = $(this).data('customer_id');
//alert(customer_id);


if(customer_id==""){
alert('Sorry We cannot get your Square customer_id Id');
}


else{



          var form_data = new FormData();
          form_data.append('customer_id', customer_id);

                    $('#loader_px').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Getting Customers Info From Square...</span>');
                    $.ajax({
                        url: 'get_customer_info.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                      
                        success: function (msg) {
                                
				$('#loader_px').hide();
				$('#result_px').fadeIn('slow').prepend(msg);
                   
                        }
                    });
} // end if validate





});

});


// clear Modal div content on modal closef closed
$(document).ready(function(){

$("#myModal_x").on("hidden.bs.modal", function(){
    //$(".modal-body").html("");
 $('.myform_clean').empty(); 
});

});
</script>





<!--  page modal starts here -->


<div class="container_page">

  <div class="modal fade " id="myModal_x" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right1 modaling_sizing1">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Square Donors/Customers  Details</h4>
        </div>
        <div class="modal-body">



<!-- form START -->


<br>
                



<div class="col-sm-12 form-group">
                        <div id="loader_px" class='myform_clean'></div>
                        <div id="result_px" class='myform_clean'></div>
</div>






<!--   form ENDS   -->


<br /><br />
<br /><br />
<br /><br />






        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  modal ends here -->




</body>
</html>

