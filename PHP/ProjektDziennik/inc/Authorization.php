<?php 
        
class Authorization {
    protected $con; 
    
    public function __construct(){
        
        include 'config.php'; 
        
        //Create connect 
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 
        
        //Check connection if is correct 
        if($this->con->connect_error){
            die("Connection failed: " . $this->con->connect_error); 
        }
        
    }
    
    //Registration process
    public function register_user($login, $password){
        
        //$password = md5($password); 
        $sql = "SELECT id_osoby FROM nauczyciele WHERE login='${login}' UNION SELECT id_osoby FROM uczniowie WHERE login='${login}''"; 
        
        //check if user is in database
        $check = $this->con->query($sql); 
        
        if($check->num_rows){
            
        }else{
            $err = 'Dany użytkownik już istnieje'; 
            $this->error($err);
        }
        
    }
    
    //Login Process
    public function login_process($login, $password){
        
        //$password = md5($password); 
        
        $sql = "SELECT id_osoby FROM nauczyciele WHERE login='${login}' AND password='${password}' UNION SELECT id_osoby FROM uczniowie WHERE login='${login}' AND password='${password}'"; 
        
        //check if user is in database
        $query = mysqli_query($this->con, $sql);
        
        //get data of query
        $result = mysqli_fetch_assoc($query); 
        
        if($query->num_rows){
            
            //Login process - success
            echo 'Dobry uzytkownik';
            
            $_SESSION['login']   = true; 
            $_SESSION['id_osoby'] = $result['id_osoby'];
            
            return true;
            
        }else{
            $err = 'Zły login lub hasło. Sprobuj ponownie.'; 
            $this->display_error($err);
            return false; 
        }
    }
    
    //Logout process
    public function logout_process(){
        $_SESSION['login'] = false; 
        
        session_destroy(); 
    }
    
    public function display_error($error){
        die("<p class=\"error\">Wystąpił błąd: <strong>${error}</strong>.</p>"); 
        return 0; 
    }
}