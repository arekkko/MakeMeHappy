<?php 

include 'config.php'; 
        
class Authorization {
    protected $con; 
    
    public function __construct(){
        
        //Create connect 
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 
        
        //Check connection if is correct 
        if($this->con->connect_error){
            die("Connection failed: " . $this->con->connect_error); 
        }
        
    }
    
    //Login process
    public function do_login($login, $password){
        
        //$password = md5($password); 
        $sql = "SELECT * FROM nauczyciele WHERE login='${login}' AND password='${password}'"; 
        
        //check if user is in table nauczyciele
        $check = $this->con->query($sql); 
        
        if($check->num_rows){
            
        }
        
    }
    
    public function error($error){
        echo "<p class=\"error\">Wystąpił błąd: ${$error}. Skontaktuj się z administratorem.</p>"; 
    }
}