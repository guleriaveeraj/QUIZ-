﻿<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
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
        background-color:cloud;
      }



.jumbotron {
    display: auto;
    overflow: hidden;
    min-height: 1400px;
    margin-bottom: 0px;
}





      </style>
      <style>

.wrapper {
    text-align : center;
}


.center {background-color:rgb(255,255,255);	
    text-align: center;
    color: black;
	 position: absolute;
	 margin-top: 50px;
	 margin-bottom: 50px;
  margin-left: 190px;
 
  width: 70%;
  min-height:800px;
}
.text{color:black;

}
.text11{color:black;
    display: inline-block;
				 float: left;
				 margin-right: 110px;
				  }
.team{color:black;
margin-top: 40px;

}
 .round {
                border-radius: 50%;
                overflow: hidden;
                width: 150px;
                height: 150px;
				  margin-top: 50px;
				 display: inline-block;
				 float: left;
				 margin-right: 110px;
				  margin-left: 50px;
            }
		
</style>

    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              
            
            
              <a class="navbar-brand" href=#>Learn <span>Academy</span></a>              
                        
                     
            </div>
           
      <!-- END MENU -->    
    </header>


  <div class="jumbotron">
  
    
	 <div class= "center">
	 <div>
	    <h2><br><ins>ABOUT US</ins> </h2>
		<p><br>Learn Academy is the website where we provides you the platform to test your knowledge and where you can learn and see how good and how much you knw about the particular subject . we also proves the opportunity to learn new things about various subjects which you may not know. You can learn javv ,cpp,pythin,ruby etc.</p>
		</div>
		
		<div class="team" >
		<h2><br><br><ins>OUR TEAM</ins></h2>
		<div class="round">
            <img src="4.jpg" />
			 
        </div>
		<div class="round">
            <img src="2.jpg" />
			 
        </div>
		<div class="round">
            <img src="3.jpg" />
			 
        </div>
		
<div class="values">
		<p  id='a' style="font-size:20px">  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp<strong><xsl:value-of select="catalog/info/name"/></strong></p>
		<p style="font-size:10px" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>catalog/info/branch</strong></p>
		<p style="font-size:10px" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>catalog/info/phono.</strong></p>
		<p style="font-size:10px" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; saurav.mishra1604@gmail.com</p>
		
		</div>
		<div class="values">
		<p style="font-size:20px" >  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    &nbsp; <strong><xsl:value-of select="catalog/info/name"/></strong></p>
		<p  style="font-size:10px">&nbsp; &nbsp; &nbsp;<strong>catalog/info/branch</strong></p>
		<p  style="font-size:10px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>catalog/info/phoneno.</strong></p>
		<p style="font-size:10px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>radhika.maheshwari189@gmail.com</strong></p>
		
		</div>
		<div class="values">
		<p style="font-size:20px" > &nbsp; &nbsp;   &nbsp; &nbsp;<strong><xsl:value-of select="catalog/info/name"/></strong></p>
		<p style="font-size:10px" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;<strong>catalog/info/branch</strong></p>
		<p  style="font-size:10px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>catalog/info/phno.</strong></p>
		<p  style="font-size:10px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>guleriaveeraj76@gmail.com</strong></p>
		
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
               
                <style>
                  
                  </style>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
               
                <ul class="footer_widget_nav">
                 
                 
                </ul>
              </div>
            </div>
         
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                
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
    </body></xsl:template>

</xsl:stylesheet>
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
  