<?php   

DEFINE('DEVELOPMENT',       TRUE);

if(DEVELOPMENT){
    DEFINE('HOSTNAME',      'localhost');
    DEFINE('USERNAME',      'root');
    DEFINE('PASSWORD',      '');
    DEFINE('DATABASE',      'hms');
} else {
    DEFINE('HOSTNAME',      'localhost');
    DEFINE('USERNAME',      'u395220709_jason');
    DEFINE('PASSWORD',      'z3nMwws94M');
    DEFINE('DATABASE',      'u395220709_hms');
}


class Database{ 
     
    public $db; 
    
    /**
    * Connect to database
	* @param string HOSTNAME
    * @param string USERNAME
    * @param string PASSWORD
    * @param string DATABASE
    */ 	
    function __construct()
    { 
        try{ 
            $this->db = new Mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("".mysqli_error()); 
            mysqli_set_charset($this->db,"utf8");
            mysqli_query($this->db,"SET NAMES utf8");
            return $this->db; 
        }catch(exceptions $e){ 
            return $e; 
        } 
    } 

    public function createRandomVal()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 100; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
 
     
}




