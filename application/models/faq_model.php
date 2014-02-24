<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq_model extends CI_Model {

	public $product_db = null;
	
	/**
     * construct
     */
	public function __construct() {
        parent::__construct();
		
    }

	public function page_total($by_sql = NULL) {
		$sql = "SELECT count(1) AS total FROM system.faq WHERE 1 ";
		$this->db->query($sql);
		$rs = $this->db->query($sql);
		
		if ($rs->num_rows() > 0)
		{
			$row = $rs->row_array(); 
			$total = $row['total'];
		}
		
		return $total;
	}
	
	public function find_all($page, $page_limit) {
		
		$page 	= $this->db->escape_str($page);
		$limit 	= $this->db->escape_str($page_limit);
		
		$sql = "SELECT * FROM system.faq WHERE 1 ORDER BY faq_createtime DESC LIMIT " . ( $page * $limit ) . " , $limit";
		$this->db->query($sql);
		$rs = $this->db->query($sql);
		
		if ($rs->num_rows() > 0)
		{
			foreach ($rs->result_array() as $row)
			{
				$aRow[$row['faq_id']] = $row;
			}
		}

		$rs->free_result();
		
		return $aRow;
	}
	
	public function get($faq_id) {
	
		$faq_id = $this->db->escape_str($faq_id);
		
		$sql = "SELECT * FROM system.faq WHERE faq_id = '".$faq_id."'";
		$this->db->query($sql);
		$rs = $this->db->query($sql);
		
		if ($rs->num_rows() > 0)
		{
			$row[$faq_id] = $rs->row_array(); 
		}
		
		return $row;
	}
	
	/**
	 *
	 * @param array faq_data	
	 * 
	 * @return int faq_id
	 */
	public function add($faq_data) {
	
		$sql = "INSERT INTO system.faq
					SET faq_title		= '".$this->db->escape_str($faq_data['faq_title'])."',			
						faq_description	= '".$this->db->escape_str($faq_data['faq_description'])."',	
						faq_solution 	= '".$this->db->escape_str($faq_data['faq_solution'])."',		
						faq_status 		= '".$this->db->escape_str($faq_data['faq_status'])."',			
						faq_createtime 	= '".date("Y-m-d H:i:s", time())."'";
		$this->db->query($sql);
		
		return $this->db->insert_id();
	}
		
	public function update($faq_id, $faq_data) {
	
		$sql = "UPDATE system.faq
					SET faq_title		= '".$this->db->escape_str($faq_data['faq_title'])."',			
						faq_description	= '".$this->db->escape_str($faq_data['faq_description'])."',	
						faq_solution 	= '".$this->db->escape_str($faq_data['faq_solution'])."',		
						faq_status 		= '".$this->db->escape_str($faq_data['faq_status'])."'
					WHERE faq_id = '".$this->db->escape_str($faq_id)."'";
		$this->db->query($sql);
		
	}

	public function remove($faq_id) {
		$sql = "DELETE FROM package WHERE faq_id = '".$faq_id."'";
		$this->db->query($sql);
	}
	
	public function exist($faq_id) {

		$sql = "SELECT faq_id FROM package WHERE faq_id = '".$faq_id."'";
		$this->db->query($sql);
		$rs = $this->db->query($sql);
		
		if ($rs->num_rows() > 0)
		{
			return true;
		}
		
		return false;
	}

	// show_error('user identification error:' . $identification);

}


/* End of file user_model.php */
/* Location: ./application/models/user_model.php */