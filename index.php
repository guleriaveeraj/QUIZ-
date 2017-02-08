
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
    
  <style>
      .bd{
        background-color:cloud;
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
    min-height: 850px;
    margin-bottom: 0px;
 
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

</style>


    
 
  </head>
  <body class="bd">   
  <?php
  
session_start();
  include('database.php');
if (isset($_POST['login']) and isset($_POST['pass'])){
//3.1.1 Assigning posted values to variables.
$lid = $_POST['login'];
$pass = $_POST['pass'];

//3.1.2 Checking the values are existing in the database or not
$query = "select * from proj_user where login='".$lid."' and pass='".$pass."'";


$result = mysqli_query($cn,$query) or die(mysqli_error());
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
 $_SESSION['login'] = $lid;


}
if (isset($_SESSION['login'])){
  header("Location: newhead.php");
  exit;
}

}





/*include("database.php"); 
$lid=$_GET['login'];

if ($submit)
{
	$rs="select * from proj_user where login='".$lid."' and pass='".$pass."'";
  
	$rs1=mysqli_query($cn,$rs);
        if (mysqli_num_rows($rs1)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$lid;
    
	}
}

if ($_SESSION['login'])
{
  header("Location:newhead.php");
  exit;
}



?>
*/
?>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              
            
            
              <a class="navbar-brand" href=#>Learn <span>Academy</span></a>              
                        
                     
            </div>
           
            <button class="button button2" onclick="window.location.href='signup.php'">Sign up</button>
      <!-- END MENU -->    
    </header>


  <div class="jumbotron">
  
    <div class="wrapper">
    <div class="image">
      <img src="img/code.jpg" alt="img"> 
    </div>
    <div class="form">
    
 <form name="form1" method="post" action="">
 <input type="text" id="login" name="login" placeholder="Login Id" required>
 
 <input type="password" id="pass" name="pass" placeholder="Password" required>
 <input type="email" id="email" name="email" placeholder="Email" required><br>
 <button class="button button3" type="submit" id="submit">LOG IN</button>
 

 </form>
 



 </div>
 
</div>
<section id="whyUs">
      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two">Sign Up and Start Learning</h2>
                    <span></span> 
                  </div>
                </div>
              </div><div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Online Examination</h3>
                    <p>Series of online examinations is conducted every week</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>STUDY RESOURCES</h3>
                    <p>It includes best quality practice assignment with different types of questions to give students a complete exposure to concepts.</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->
      </section>
 </div>
<footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Contact Us</h3>
                
                <p>66-A JUIT<br>
                Solan Himachal pradesh<br>
                Pin code-122001<br>
                Email:learnAcademy.ggn@gmail.com
                Contact:9816730751,9643685218
                  
                </p>
                <style>
                  
                  </style>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="aboutus.php">About Us</a></li>
                 
                 
                  <li><a href="catalog.php">Our Courses</a></li>
                 
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
  