<?php 
class Blog_model extends CI_Model {

	public function addBlog($blogdata)
	{	
		$query = $this->db->insert("blog",$blogdata);	
		$id = $this->db->insert_id();
		return $id;
	}

	public function updateBlog($blogdata,$blogid)
	{
		$this->db->where('id',$blogid);
		$this->db->update('blog',$blogdata);
	}

	public function deleteBlog($blogid)
	{
		$this->db->where('id', $blogid);
        $this->db->delete('blog');
	}

	public function blogDetails($blogid)	
	{
		$query = $this->db->query("select * from blog where id='$blogid'");
		$output = $query->row_array();
		return $output;
	}

	public function allBlog()
	{
		$query = $this->db->query("select * from blog");
		$output = $query->result_array();
		return $output;	
	}
}
?>