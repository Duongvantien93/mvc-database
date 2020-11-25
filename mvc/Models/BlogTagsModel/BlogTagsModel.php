<?php
class BlogTagsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM blog_tags ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM blog_tags WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $alias =mysqli_real_escape_string($this->connection,$post['alias']);
        $blog_id=mysqli_real_escape_string($this->connection,$post['blog_id']);
        $deleted_at=mysqli_real_escape_string($this->connection,$post['deleted_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO blog_tags(id,name, alias, blog_id,deleted_at ,created_at, updated_at) VALUES( '".$id."', '".$name."', '".$alias ."','".$blog_id."', '".$deleted_at."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $alias =mysqli_real_escape_string($this->connection,$post['alias']);
        $blog_id=mysqli_real_escape_string($this->connection,$post['blog_id']);
        $deleted_at=mysqli_real_escape_string($this->connection,$post['deleted_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE blog_tags SET `id`='" . $id. "',`name`='" . $name . "',`alias`='" . $alias . "',`blog_id`='" . $blog_id. "',`deleted_at`='" . $deleted_at. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "'WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM blog_tags WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>