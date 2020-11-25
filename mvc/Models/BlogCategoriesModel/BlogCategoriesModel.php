<?php
class BlogCategoriesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM blog_categories ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM blog_categories WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $alias=mysqli_real_escape_string($this->connection,$post['alias']);
        $parent_id =mysqli_real_escape_string($this->connection,$post['parent_id']);
        $image=mysqli_real_escape_string($this->connection,$post['image']);
        $meta_description=mysqli_real_escape_string($this->connection,$post['meta_description']);
        $meta_keyword=mysqli_real_escape_string($this->connection,$post['meta_keyword']);
        $status =mysqli_real_escape_string($this->connection,$post['status']);
        $deleted_at=mysqli_real_escape_string($this->connection,$post['deleted_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO blog_categories(id,name, alias,parent_id,image,meta_description,meta_keyword,status,deleted_at ,created_at, updated_at) VALUES( '".$id."', '".$name."', '".$alias."', '".$parent_id ."','".$image."','".$meta_description."', '".$meta_keyword."', '".$status ."', '".$deleted_at."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $alias=mysqli_real_escape_string($this->connection,$post['alias']);
        $parent_id =mysqli_real_escape_string($this->connection,$post['parent_id']);
        $image=mysqli_real_escape_string($this->connection,$post['image']);
        $meta_description=mysqli_real_escape_string($this->connection,$post['meta_description']);
        $meta_keyword=mysqli_real_escape_string($this->connection,$post['meta_keyword']);
        $status =mysqli_real_escape_string($this->connection,$post['status']);
        $deleted_at=mysqli_real_escape_string($this->connection,$post['deleted_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE blog_categories SET `id`='" . $id. "',`name`='" . $name . "', `alias`='" . $alias. "',`parent_id`='" . $parent_id . "',`image`='" . $image. "',`meta_description`='" . $meta_description. "',`meta_keyword`='" . $meta_keyword. "',`status`='" . $status. "',`deleted_at`='" . $deleted_at. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM blog_categories WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>