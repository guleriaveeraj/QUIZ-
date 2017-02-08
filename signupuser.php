<!DOCTYPE html>
<head>

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:#bdc3c7">
<?php

extract($_POST);
include("database.php");

$rs="select * from proj_user where login='$lid'";
$rs1=mysqli_query($cn,$rs);
if (mysqli_num_rows($rs1)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into proj_user(login,pass,username,email) values('".$lid."','".$pass."','".$uname."','".$email."')";
$rs=mysqli_query($cn,$query) or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Username is  <span class=a>$uname</span> and Login Id is <span class=b>$lid</span> Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz and access our study resource</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
<style>
.a{
color:blue;
font-size:50px;
}

.b{
color:blue;
font-size:50px;
}
</style>
</body>
</html>