<?php
class sql extends CI_Model {
	public function get_user_by_id($id)
  {
    $query = "SELECT * FROM users
    LEFT JOIN users_interests
    on users_interests.user_id = users.id
    LEFT JOIN interests
    ON users_interests.interest_id = interests.id 
    WHERE users.id = ?";
    $values = array($id);
    return $this->db->query($query,$values)->row_array();
  }	
  public function get_all_interest()
  {
    $query = "SELECT name, interest FROM users_interests
    LEFT JOIN users
    on users_interests.user_id = users.id
    LEFT JOIN interests
    ON users_interests.interest_id = interests.id 
    WHERE user_id= ?";
    $values = $this->session->userdata('user_id');
   return $this->db->query($query,$values)->result_array();
  }
  public function get_interest_by_id($id)
  {
    $query = "SELECT link FROM links
    WHERE id = ?";
    $values = array($id);
    return $this->db->query($query, $values)->row_array();
  }
    public function get_id_by_id($id)
  {
    $query = "SELECT id FROM links
    WHERE id = ?";
    $values = array($id);
    return $this->db->query($query, $values)->row_array();
  }
 
}

?>