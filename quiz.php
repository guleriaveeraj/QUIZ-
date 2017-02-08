<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
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

<body style="background-color:#bdc3c7">

   

<?php

include("header.php");
$query="select * from proj_question";

$rs=mysqli_query($cn,"select * from proj_question where test_id=$tid") or die(mysqli_error());

if(!isset($_SESSION[qn]))
{ 

	$_SESSION[qn]=0;
	mysqli_query($cn,"delete from proj_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);
				$p=mysqli_query($cn,"insert into proj_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);
				mysqli_query($cn,"insert into proj_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1>Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<table align=center><tr class=tot><td>Total Question=<td>" .$_SESSION[qn];
				echo "<tr class=tans><td>True Answer=<td>" .$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer=<td>". $w;
				echo "</table>";
				mysqli_query($cn,"insert into proj_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysqli_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysqli_query($cn,"select * from proj_question where test_id=$tid") or die(mysqli_error());

if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}

mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tr><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type='submit' name='submit' value='Next Question'></form>";
else
echo "<tr><td><input type='submit' name='submit' value='Get Result'></form>";
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
</body>
</html>