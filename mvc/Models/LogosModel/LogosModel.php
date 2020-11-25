<?php
include_once ("LogosEntity.php");
class LogosModel extends databases
{
    public function list() {
        $sql="SELECT * FROM logos ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM logos WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $image=mysqli_real_escape_string($this->connection,$post['image']);
        $url=mysqli_real_escape_string($this->connection,$post['url']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO logos(id,image, url,status, created_at, updated_at) VALUES( '".$id."', '".$image."', '".$url."', '".$status."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $image=mysqli_real_escape_string($this->connection,$post['image']);
        $url=mysqli_real_escape_string($this->connection,$post['url']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE logos SET `id`='" . $id. "',`image`='" . $image . "', `url`='" . $url. "',`status`='" . $status. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM logos WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>