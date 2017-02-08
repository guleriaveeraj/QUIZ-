<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Learn Academy : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/icon.jpg">

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
   
    
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    
        
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'> 
     <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
   
 
  </head>
  <body class="bd">    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <style>
      .bd{
        background-color:light-grey;
      }

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top:10px;
    cursor: pointer;
    
    
    
}
.button1:hover
{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
}
.button2:hover
{
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
}

.button1 {
  padding: 10px 24px;
  margin-left:600px;
}
.button2 {
    padding: 10px 24px;
float:right;}
.button3 {padding: 10px 104px;
margin-left:0 px;
width: 50%;
}
.button3:hover {
 color: rgba(255, 255, 255, 1);
 box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
}
.jumbotron {
    display: auto;
    overflow: hidden;
    min-height: 100%;
    margin-bottom: 0px;
    text-align: center;

}
.f{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size:18px;
}
.popu{
  opacity :0.5;
   filter: Alph(opacity=50);}
   #b{margin-top:150px;
   font-size:45px;
   opacity :0.48;
   filter: Alph(opacity=48);
}




      </style>
      <style>
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 0px 0;
    box-sizing: border-box;

}
input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 0px 0;
    box-sizing: border-box;

}

input[type=email] {
    width: 50%;
    padding: 12px 20px;
    margin: 0px 0;
    box-sizing: border-box;

}
.wrapper {
    text-align : center;
}
.image, .form {
    display: inline-block;
    vertical-align: top;
    margin-top:100px;
}
#a{opacity :0.5;
   filter: Alph(opacity=50);
   }
   #b{margin-top:150px;
   font-size:45px;
   opacity :0.48;
   filter: Alph(opacity=48);
   }
</style>

    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              
            
            
              <a class="navbar-brand" href=#>Learn <span>Academy</span></a>              
                        
                     
            </div>
            <button class="button button1">Log In</button>
            <button class="button button2">Sign up</button>
      <!-- END MENU -->    
    </header>

 <div class="jumbotron">
  
    
    <div class="form">
    <font class="f">
        <p class="popu">SIGN UP AND START<br>LEARNING IN SECONDS.</p></font>
    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
  <input type="text"  name="lid" placeholder="Login Id" required> 
  <input type="text"  name="uname" placeholder="Username" required><br> 
  <input type="password"  name="pass" placeholder="Password" required> 
  <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required>  
  <input type="email" id="email" name="email" placeholder="Email" required>

 <button class="button button3" type="submit" name="Submit" value="SIGN UP" >SIGN UP</button>
 
</form>

 </div>
 </div>
<footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Contact Us</h3>
                
                <style>
                  
                  </style>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#aboutUs">About Us</a></li>
                 
                 
                  <li><a href="#ourCourses">Our Courses</a></li>
                 
                </ul>
              </div>
            </div>
         
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
              
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    </body>
    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  
  <script language="javascript"> 
    function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
   
  </script>  


</body>
</html>