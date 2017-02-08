
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Learn Academy</title>

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
    
   
    
    
    
        
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    
    
  

    
 
  </head>
  <body>    

  <?php



extract($_POST);
include("database.php");
            

  if(isset($_POST['lid']) && !empty($_POST['lid']) AND isset($_POST['pass']) && !empty($_POST['pass'])){
                $lid = mysqli_escape_string($_POST['login']);
                $pass = mysqli_escape_string(md5($_POST['pass']));

                $search = mysqli_query($cn,"select login, pass from proj_user where login='".$lid."' AND pass='".$pass."'") or die(mysql_error()); 
                $match  = mysqli_num_rows($search);

                if($match > 0){
                   header("Location:newheader.php");
                }else{
                    echo 'Login Failed!<br /> Please make sure that you enter the correct details and that you have activated your account.';
                }
            }


        ?>
        <!-- stop PHP Code -->
        



    
    <a class="scrollToTop" href="#"></a>


   
    <style>

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
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
}
.button2:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
}

.button1 {
  padding: 10px 24px;
  margin-left:600px;
}
.button2 {padding: 10px 24px;
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
    margin-bottom: 0px;
    min-height: 800px;
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
    margin-top:20px;
}
#a{opacity :0.5;
   filter: Alph(opacity=50);}
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
              
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            
              <a class="navbar-brand" href="index.html">Learn <span>Academy</span></a>              
                        
                     
            </div>
            <button class="button button1">Log In</button>
            
            
           <button class="button button2" onclick="window.location.href='file:///F:/New folder (3)/proj/signup.php'">Sign up</button>
      <!-- END MENU -->    
    </header>


  <div class="jumbotron">
   
    <div class="wrapper">
	<p id='b'>Come Learn take part in quiz and explore<p>
    <div class="image">
      <img src="img/code.jpg" alt="img"> 
    </div>
    <div class="form">
    <form name="form1" method="post" action="newhead.php">
	<p id='a'>LOG IN AND CONTINUE </p>
  
  <input type="text"  name="lid" placeholder="Login Id" required>
 <input type="password" name="pass" placeholder="Password" required>
 
 <button class="button button3" type="submit" name="Submit" value="LOG IN">LOG IN</button>
 <p id='a'>Log in with Google,Facebook,Twitter</p>
</form>

 </div>
 
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
  


</body>
</html>
   
   