<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>



<style>


/* navigation */


.left-column-all {
    overflow-x: hidden;
    position: fixed;
    z-index: 9999;
    width:50vw;
    height: 100vh;
    background: url(home1.png) center no-repeat fuchsia;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;

/*
    margin-top: 0px;
    margin-left: 0px;
    */
}



@media screen and (max-width: 1440px) {
.left-column-all {
width:100vw;
width:100vh;

}

}
	
.right-column-all {
 margin-left:40vw;
/*
margin-left:47vw;
*/
}

@media screen and (max-width: 800px) {
.left-column-all {
    width: 100vw;
    position: inherit;
    background-position: inherit;
}

.right-column-all {
    margin-top: 0px;
margin-left: 0px;

}
}




/*ensure that category button does not jam about us or event section when on mobile start here. you can remove it if you
like. this will make product contain maximum of 8 categories button*/
@media screen and (max-width: 768px) {
.left-column-all {
   padding-bottom:700px;
}
}

@media screen and (max-width: 600px) {
.left-column-all {
   padding-bottom:700px;

}
}

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
   background-color: #008080;

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
background:fuchsia;
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

.home_content_head {
        color: white;
        font-size:40px;
        font-weight:bold;
	font-family:comic sans ms; 
width:40vw;
margin-left:-110px;
  
}

.home_content_text {
        color: white;
        font-size:20px;
        font-weight:bold;
	box-sizing: border-box;
      //position: relative;
        
}

.home{
background:#ec5574;
}

.home:hover{
box-shadow: inset 0 0 0 25px #008080;

}


.home_text_transparent_home {
border-style: solid; border-width:1px; border-color: orange;
  width: 100%;
  padding: 90px;
  position: absolute;
  bottom: 0px;
  background: rgba( 0, 0, 0, 0.50);

  color: white;
  height:100%;
text-align: center;

}



@media screen and (max-width: 768px) {
  .home_text_transparent_home{

  width: 100%;
  padding: 20px;
  }
}



@media screen and (max-width: 600px) {
  .home_content_home{
  width: 100%;
  padding: 20px  
  }
}













.marquee_button{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
transform: skew(15deg);
border: none;
cursor: pointer;
text-align: center;



}
.marquee_button:hover {
background: black;
color:white;
}


.marquee_image{ 
width:60px;height:60px;
border-radius: 50%;
border-style: solid; border-width:2px; border-color: #008080;
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


.contact_info{

background: fuchsia;
color:white;
cursor: pointer;
padding:16px;
border-radius: 10%;

}
.contact_info:hover{
background: orange;
color:black;

}


.contact_info_dashedline{
  border-bottom: 5px dashed #008080;

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
padding: 16px;
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



.category_post2{
background-color: fuchsia;
padding: 16px;
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

.modal-dialog{
   
   margin-top: 80px;
} 

</style>



 
</head>
<body>






















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
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">



      <ul class="nav navbar-nav navbar-right">




      </ul>


    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->











<script>

            $(function () {
                $('#save_btn').click(function () {
					
				
                    var email = $('#email_u').val();
                    var password = $('#password_u').val();
                    var confirm_password =$('#confirm-password_u').val();
                    var given_name = $('#given_name').val();
var family_name = $('#family_name').val();
                  
                    var user_rank = 'User';
                   

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");

if(password != confirm_password){
alert('Password Does not Match');
return false;
}

 if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}


else if(password==""){
alert('please Enter Password');
}


else if(family_name==""){
alert('please Enter Your Family name');
}


else if(given_name==""){
alert('please Enter Your Given name');
}

else{


          var form_data = new FormData();
          form_data.append('email', email);
          form_data.append('given_name', given_name);
          form_data.append('family_name', family_name);
          form_data.append('password', password);
          form_data.append('user_rank', user_rank);
        
                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
					$('#loaderx').hide();
                    $('#loader').fadeIn(400).html('<br><div class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being  Submitted..</div>');
                    $.ajax({
                        url: 'square_create_customer.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                      
                        success: function (msg) {
                                $('#box').val('');
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#email').val('');
$('#password').val('');
$('#confirm-password').val('');
}




                        }
                    });
} // end if validate




                });
            });







//login starts

$(document).ready(function(){
$('#login_btn_user').click(function () {

var username  = $('#username_u1').val();
var password = $('#password_u1').val();



 if(username==""){
alert('please Enter Email');
}

else if(password==""){
alert('please Enter Password');
}




else{


$("#loader-login_user").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="loader.gif">&nbsp;Please Wait, Your are being login...</div>');
var datasend = {username:username, password:password};


	
		$.ajax({
			
			type:'POST',
			url:'login_user.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-login_user").hide();
$("#result-login_user").html(msg);
setTimeout(function(){ $("#result-login_user").html(''); }, 5000);


// clear all customers Data
//$('#emailxy').val('');		
//$('#passwordxy').val('');	


	
}
			
		});
		
		}

});

});

//  login ends


</script>


<!-- Users signup Modal start -->



<div id="myModal_signup_users" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background: #008080;color:white;padding:10px;'>
        <h4 class="modal-title">Users Signup System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
Users Signup System....<br><br>





 <div class="form-group">
              <label> Family Name: </label>
              <input type="text" class="col-sm-12 form-control" id="family_name" name="family_name" placeholder="Family Name">
            </div>

<div class="form-group">
              <label> Given Name: </label>
              <input type="text" class="col-sm-12 form-control" id="given_name" name="given_name" placeholder="Given Name">
            </div>



 <div class="form-group">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="email_u" name="email_u"  placeholder="Email">
            </div>
 


 <div class="form-group">
              <label style="" for="psw">
<span class="fa fa-eye"></span> Password</label>
              <input type="password" class="col-sm-12 form-control" id="password_u" name="password_u" placeholder="Enter password">
            </div><br>

 <div class="form-group">
              <label style="" for="psw">
<span class="fa fa-eye"></span> Confirm Password</label>
              <input type="password" class="col-sm-12 form-control" id="confirm-password_u" name="confirm-password_u" placeholder=" Confirm Password">
            </div><br>




 <div class="form-group">

                        <div id="loaderx"></div>
						<div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="pull-right btn btn-primary" value="Signup" />


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Users signup Modal ends -->



<!-- users login Modal start -->
<div class="modal fade" id="myModal_login_users">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style='background: #008080;color:white;padding:10px;'>
        <h4 class="modal-title">Users Login System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
 
Users Login System.....<br><br>

 <div class="form-group">
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="username_u1" name="username_u1" value='esedofredrick@gmail.com'>
            </div>
 
 <div class="form-group">
              <label>Password: </label>
              <input type="password" class="col-sm-12 form-control" id="password_u1" name="password_u1" value='123'>
            </div>

<br>
<div id="loader-login_user"></div>
<div id="result-login_user"></div>


                    <input type="button" id="login_btn_user" class="btn btn-primary" value="Login Now!" />



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Users login Modal ends -->





<div class="home_text_transparent_home" >
<div class="home_resize_padding"> 


<p class="home_content_head pull-left"><?php include('header_title.php'); echo $header_tit; ?></p>
<marquee> <p class=""><button class="contact_click marquee_button"><img class="marquee_image" src="home1.png" /><?php include('header_title.php'); echo $header_tit; ?></button> </p></marquee>

                      

<style>


.dropdown_color:hover{
background: black;
color:white;

}
</style>







<br>
<p>

<a  class="category_post" data-toggle="modal" data-target="#myModal_signup_users">Signup</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a  class="category_post" data-toggle="modal" data-target="#myModal_login_users">Login</a>

</p>


<br> 



     
</div> 
</div>


    </div>
<!--end left column all-->









<!--start right column all-->
    <div class="right-column-all">




















<!-- about Section start-->
<div  class="about section_padding aboutus_bgcolor" style=''>


  <h2 class="text-center"><span class="contact_name_color">About <?php include('header_title.php'); echo $header_tit; ?></span></h2>
  <p class="footer_text2"><?php echo $heading; ?> </p>
<img style="width:100%;min-width:100%;max-width:100%;height:400px;" src="home2.png">

<style>
.hh{
color:#800000;
}

.hh:hover{
color:black;
}
</style>
  <h2 class="text-center"><span class="contact_name_color hh">Powered by <?php echo $poweredby; ?>.</span></h2>


</div>




<!-- about Section ends-->







<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">

        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

<p><?php echo $footer_tit2; ?><a class="btn_copyright" href="<?php echo $footer_tit3; ?>"><?php echo $footer_tit3; ?></a></p>


        </div>

 
</div>



</div>

<div class="footer_text1">
<p class="footer_text1"></p>
</div>


<div class="footer_dashedline"></div>

 </footer>

<!-- footer Section ends -->
	




<div>
  <!--end right column all-->    







   
</body>
</html>



















