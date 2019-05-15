<?php 
/**
* CRMElite APIv1
*
* @package		CRMElite
* @subpackage	Contact API
* @author     	JAYSON P. SARINO <jasonsarino27@gmail.com>
*/

require_once 'database.class.php'; 

class Users extends Database{ 

    public function __construct()
    { 
        parent::__construct(); 
    } 

    public function validate($data)
    {
        $sql = $this->db->query("SELECT * FROM `users` WHERE `username` = '".$data['username']."' AND `password` = '".$data['password']."'"); 
        if($sql->num_rows == 1)
        {
            return $sql->fetch_assoc();
        } else {
            return FALSE;
        }
    }

    public function getUserDetails($id)
    {
        $sql = $this->db->query("SELECT * FROM `users` WHERE `id` = " . $id); 
        if($sql->num_rows == 1)
        {
            return $sql->fetch_assoc();
        } else {
            return FALSE;
        }
    }

    

}