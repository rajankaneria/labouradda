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

	public function addBlogImage($blogdata){
		$query = $this->db->insert("blog_image",$blogdata);	
	}

	public function blogImages($blogID){
		$query = $this->db->query("select * from blog_image where blog_id='$blogID'");
		$result = $query->result_array();
		return $result;
	}

	public function deleteImage($imageID){
		$query = $this->db->query("delete from blog_image where id='$imageID'");
	}
	public function register($data){
		$this->db->insert("register",$data);
		$id=$this->db->insert_id();
		return $id;
	}

	public function updateRegister($data,$id){
		$this->db->where("id",$id);
		$this->db->update("register",$data);
	}


}
?>