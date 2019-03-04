<html>
<head>
<body>
<!-- http://www.w3programmers.com/login-registration-using-oop/ -->     
    
<?php 
include 'inc/Authorization.php'; 
    
$logowanie = new Authorization(); 
    
$logowanie->do_login('user', 'user');
    
?>
</body>    
</head>
</html>