<?php
class Zakaz_model extends CI_Model {
    public function __construct() 
    {
        parent::__construct();
         $this->load->database();
    }
    
    public function fetch_guests() {
        //Fetch record in `guestbook` table from $start to $limit
        $query = $this->db->get("up");
        if ($query->num_rows() > 0) {
 
            return $query->result();
        }
        return false;
   }

   public function getGuestById($id){
    // Fetch/get a recrod from the `guestbook` table by record id
        $query = $this->db->get_where('up', array('id' => $id));
        return $query->result();
   }
    
    public function saveGuest($data, $id) {
        if (!$id){
            // Insert record to `guestbook`table
            $this->db->insert('up',$data);
        } else if ($id){
            // update record in `guestbook` table based on the record id
            $this->db->where('id', $id);
            $this->db->update('up', $data);
        }
    }

    public function deleteGuest($id){
        //delete a record from `guestbook` table based on the record id.
        $this->db->where('id', $id);
        $this->db->delete('up');
    }

}