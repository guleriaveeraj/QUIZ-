<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
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
	 <link href='http://fonts.googleapis.com/css?family=Allan:bold' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
	 
</head>
<body style="background-color:#bdc3c7">

<?php
include('header.php');

include('database.php');

echo "<h1 class=head1> Select Subject to Give Quiz </h2>";
$rs=mysqli_query($cn,"select * from proj_subject");
echo "<table align=center>";

while($row = mysqli_fetch_array($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=6>$row[1]</font></a>";
}
echo "</table>";
include('footer.php');

?>
<style>
table{
	width=100%;
	margin-left:auto;
	margin-right:auto;
	margin-top:70px;
	
	
}
.head1{
	margin-top:120px;
	/*font-family:"Arial Black", Gadget, sans-serif;*/
	color: #d35400;
	font-family: 'Allan', Helvetica, Arial, sans-serif;
	font-size: 60px;
	line-height: 75px;
}
</style>
</body>
</html>
