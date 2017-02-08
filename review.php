
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">

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
<?php
session_start();
extract($_POST);
extract($_SESSION);
include('header.php');
include("database.php");
if(isset($_POST['submit']))
{
	mysqli_query($cn,"delete from proj_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	unset($_SESSION['qn']);
	header("Location: index.php");
	exit;
}
?>


<body style="background-color:#bdc3c7">
<?php

echo "<h1 class=head1>Review Test Question</h1>";

if(!isset($_SESSION['qn']))
{
		$_SESSION['qn']=0;
}
else if(isset($_POST['csubmit']))
{
	$_SESSION['qn']=$_SESSION['qn']+1;

}

$rs=mysqli_query($cn,"select * from proj_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
mysqli_data_seek($rs,$_SESSION['qn']);
$row= mysqli_fetch_row($rs);
echo "<form name='myfm' method='post' action='review.php'>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "<tr><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=".($row[7]==1?'tans':'style8').">$row[3]";
echo "<tr><td class=".($row[7]==2?'tans':'style8').">$row[4]";
echo "<tr><td class=".($row[7]==3?'tans':'style8').">$row[5]";
echo "<tr><td class=".($row[7]==4?'tans':'style8').">$row[6]";

if($_SESSION['qn']<mysqli_num_rows($rs)-1)
echo "<br><form><input type='submit' name='csubmit' value='Next Question'></form>";
else
echo "<br><form><input type='submit' name='submit' value='Finish'></form>";

echo "</table></table>";
include('footer.php');
?>
<style>
table{
	width=100%;
	margin-left:auto;
	margin-right:auto;
	margin-top:70px;
	
}
.style8{
	font-size:30px;
}	
.style2{
	font-size:30px;
}
.tot{
	margin-top:100px;

}
.tans{
	margin-top:100px;
}
.head1{
	font-size: 45px;
	margin-top:120px;
	/*font-family:"Arial Black", Gadget, sans-serif;*/
	text-align: center;
	color: #d35400;
	font-family: 'Allan', Helvetica, Arial, sans-serif;
	font-size: 60px;
	line-height: 75px;
}
</style>
</style>
</body>
</html>