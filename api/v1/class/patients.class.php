<?php 
/**
* CRMElite APIv1
*
* @package		CRMElite
* @subpackage	Contact API
* @author     	JAYSON P. SARINO <jasonsarino27@gmail.com>
*/

require_once 'database.class.php'; 

class Patients extends Database{ 

    public function __construct()
    { 
        parent::__construct(); 
    } 

    public function getAll()
    {
    	$sql = $this->db->query("SELECT * FROM `patient_personal_info` WHERE `InActive` = 0"); 
    	if($sql->num_rows > 0)
    	{
            $patients = [];
            while($rows = $sql->fetch_assoc())
            { 
                $sql_appointment = $this->db->query("SELECT * FROM `patient_appointment` WHERE `patient_no` = " . $rows['patient_no']);
                $rows['appointments'] = ($sql_appointment->num_rows == 1) ? $sql_appointment->fetch_assoc() : null;
                $patients[] = $rows;
            } 
    		return $patients;
    	} else {
    		return FALSE;
    	}
    }

    public function getPatient($patient_no)
    {
        $sql = $this->db->query("SELECT * FROM `patient_personal_info` WHERE `patient_no` = '".$patient_no."'"); 
        if($sql->num_rows == 1)
        {
            return $sql->fetch_assoc();
        } else {
            return FALSE;
        }
    }

}