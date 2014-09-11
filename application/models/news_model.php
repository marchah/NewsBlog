<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
            $this->db->select('news.id, news.title, news.text, news.slug, author.id, author.fullname, author.category');
            $this->db->from('news');
            $this->db->join('author', 'author.id = news.idauthor');
            $query = $this->db->get();
			return $query->result_array();
		}

        $this->db->select('news.id, news.title, news.text, news.slug, author.id, author.fullname, author.category');
        $this->db->from('news');
        $this->db->join('author', 'author.id = news.idauthor');
		$this->db->where('slug', $slug);
        $query = $this->db->get();
		return $query->row_array();
	}
	
	public function set_news()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text'),
            'idauthor' => $this->input->post('select_author'),
		);

		return $this->db->insert('news', $data);
	}
}