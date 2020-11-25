<?php
class BlogsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM blogs ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM blogs WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $category_id=mysqli_real_escape_string($this->connection,$post['category_id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $alias =mysqli_real_escape_string($this->connection,$post['alias']);
        $type=mysqli_real_escape_string($this->connection,$post['type']);
        $images=mysqli_real_escape_string($this->connection,$post['images']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $detail=mysqli_real_escape_string($this->connection,$post['detail']);
        $meta_description=mysqli_real_escape_string($this->connection,$post['meta_description']);
        $meta_keyword=mysqli_real_escape_string($this->connection,$post['meta_keyword']);
        $source=mysqli_real_escape_string($this->connection,$post['source']);
        $status =mysqli_real_escape_string($this->connection,$post['status']);
        $published_at=mysqli_real_escape_string($this->connection,$post['published_at']);
        $deleted_at=mysqli_real_escape_string($this->connection,$post['deleted_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO blogs(id,category_id, title,alias,type,images, description,detail,meta_description,meta_keyword, source,status,published_at,deleted_at ,created_at, updated_at) VALUES( '".$id."', '".$category_id."', '".$title."', '".$alias ."','".$type."', '".$images."', '".$description."', '".$detail ."','".$meta_description."', '".$meta_keyword."', '".$source."', '".$status ."','".$published_at."', '".$deleted_at."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $category_id=mysqli_real_escape_string($this->connection,$post['ct']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $alias =mysqli_real_escape_string($this->connection,$post['alias']);
        $type=mysqli_real_escape_string($this->connection,$post['type']);
        $images=mysqli_real_escape_string($this->connection,$post['images']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $detail=mysqli_real_escape_string($this->connection,$post['detail']);
        $meta_description=mysqli_real_escape_string($this->connection,$post['meta_description']);
        $meta_keyword=mysqli_real_escape_string($this->connection,$post['meta_keyword']);
        $source=mysqli_real_escape_string($this->connection,$post['source']);
        $status =mysqli_real_escape_string($this->connection,$post['status']);
        $published_at=mysqli_real_escape_string($this->connection,$post['published_at']);
        $deleted_at=mysqli_real_escape_string($this->connection,$post['deleted_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE blogs SET `id`='" . $id. "',`category_id`='" . $category_id . "', `title`='" . $title. "',`alias`='" . $alias . "',`type`='" . $type. "',`images`='" . $images. "',`description`='" . $description. "',`detail`='" . $detail. "',`meta_description`='" . $meta_description. "',`meta_keyword`='" . $meta_keyword. "',`source`='" . $source. "',`status`='" . $status. "',`published_at`='" . $published_at. "',`deleted_at`='" . $deleted_at. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "'WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM blogs WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>