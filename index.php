<html>
<head>
<title>Welcome to File processing</title>
Welcome to File processing<br>
</head>
<body>
 <td colspan="2">
<div align="center">



<?php
$remarks=$_GET['remarks'];
if ($remarks==null and $remarks=="")
{
echo 'Register Here';
}
if ($remarks=='success')
{
echo 'Registration Success';
}
?>	
</div></td>
<!-- <form action="welcome_request.php" method="POST"> -->
<a href=http://localhost/register.php>Register</a><br>
<a href=http://localhost/login.php>Login</a>
</form>
</body>
</html>
