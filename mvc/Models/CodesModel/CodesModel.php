<?php
class CodesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM codes ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM codes WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $code=mysqli_real_escape_string($this->connection,$post['code']);
        $status =mysqli_real_escape_string($this->connection,$post['status']);
        $course_id=mysqli_real_escape_string($this->connection,$post['course_id']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
         $sql = "INSERT INTO codes(id,code, status, course_id,created_at, updated_at) VALUES( '".$id."', '".$code."', '".$status ."','".$course_id."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $code=mysqli_real_escape_string($this->connection,$post['code']);
        $status =mysqli_real_escape_string($this->connection,$post['status']);
        $course_id=mysqli_real_escape_string($this->connection,$post['course_id']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $sql="UPDATE codes SET `id`='" . $id. "',`code`='" . $code . "',`status`='" . $status . "',`course_id`='" . $course_id. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "'WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM codes WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }   
}
?>