<?php 
/**
* CRMElite APIv1
*
* @package		CRMElite
* @subpackage	Organizations API
* @author     	JAYSON P. SARINO <jasonsarino27@gmail.com>
*/

require_once 'database.class.php'; 

class Organizations extends Database{ 

    public function __construct()
    { 
        parent::__construct(); 
    } 

    public function getAll()
    {
    	$sql = $this->db->query("SELECT * FROM `organization_information` WHERE `nStatus` = 1"); 
    	if($sql->num_rows > 0)
    	{
    		$rsContacts = $sql->fetch_assoc();
    		return $rsContacts;
    	} else {
    		return NULL;
    	}
    }

}