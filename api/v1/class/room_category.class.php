<?php 
/**
* CRMElite APIv1
*
* @package		CRMElite
* @subpackage	Contact API
* @author     	JAYSON P. SARINO <jasonsarino27@gmail.com>
*/

require_once 'database.class.php'; 

class Room_category extends Database{ 

    public function __construct()
    { 
        parent::__construct(); 
    } 

    public function getAll()
    {
    	$sql = $this->db->query("SELECT * FROM `room_category` WHERE `InActive` = 0"); 
    	if($sql->num_rows > 0)
    	{
            $room_category = [];
            while($rows = $sql->fetch_assoc())
            { 
                $room_category[] = $rows;
            } 
    		return $room_category;
    	} else {
    		return FALSE;
    	}
    }

    public function getRoom($category_id)
    {
        $sql = $this->db->query("SELECT * FROM `room_category` WHERE `category_id` = '".$category_id."'"); 
        if($sql->num_rows == 1)
        {
            return $sql->fetch_assoc();
        } else {
            return FALSE;
        }
    }

    public function saveRoom($data)
    {
        $query = $this->db->query("INSERT INTO `room_category`(`category_name`,`category_desc`,`InActive`) VALUES('".$data['category_name']."','".$data['category_desc']."',0)");
        return ($query) ? $this->db->insert_id : FALSE;
    }

    public function updateRoom($data)
    {
        $query = $this->db->query("UPDATE `room_category` SET 
            `category_name` = '".$data['category_name']."',
            `category_desc` = '".$data['category_desc']."'
            WHERE `category_id` = " . $data['id']);
        return ($query) ? TRUE : FALSE;
    }

    

}