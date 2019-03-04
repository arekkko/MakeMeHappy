<html>
<head>

</head>
<body>
<!-- http://www.w3programmers.com/login-registration-using-oop/ -->   
    
<!-- w tabeli uczniowie i tabeli nauczyciele trzeba zmienić nazwę komuny z id na id_osoby (tak aby tu i tu byla jednakowa) --> 
    
<?php 
include 'inc/Authorization.php'; 
    
$logowanie = new Authorization(); 
    
$logowanie->login_process('user', 'user');
    
if($_SESSION){
    echo 'Witaj, zalogowałeś się poprawnie'; 
    
    echo '<a href="?logout=true">Wyloguj się</a>'; 
    
}
?>

</body>    
</html>