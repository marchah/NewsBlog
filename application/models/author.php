<?php
class Author extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_authors($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('author');
            return $query->result_array();
        }

        $query = $this->db->get_where('author', array('id' => $id));
        return $query->row_array();
    }
}