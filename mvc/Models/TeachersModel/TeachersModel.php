<?php
class TeachersModel extends databases
{
    public function list() {
        $sql="SELECT * FROM teachers ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM teachers WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $full_name=mysqli_real_escape_string($this->connection,$post['full_name']);
        $avatar =mysqli_real_escape_string($this->connection,$post['avatar']);
        $job=mysqli_real_escape_string($this->connection,$post['job']);
        $fb=mysqli_real_escape_string($this->connection,$post['fb']);
        $twitter=mysqli_real_escape_string($this->connection,$post['twitter']);
        $note =mysqli_real_escape_string($this->connection,$post['note']); 
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO teachers(id,full_name, avatar,job,fb, twitter,note,status,created_at, updated_at) 
         VALUES( '".$id."', '".$full_name."','".$avatar ."', '".$job."', '".$fb."', '".$twitter."','".$note ."', '".$status."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $full_name=mysqli_real_escape_string($this->connection,$post['full_name']);
        $avatar =mysqli_real_escape_string($this->connection,$post['avatar']);
        $job=mysqli_real_escape_string($this->connection,$post['job']);
        $fb=mysqli_real_escape_string($this->connection,$post['fb']);
        $twitter=mysqli_real_escape_string($this->connection,$post['twitter']);
        $note =mysqli_real_escape_string($this->connection,$post['note']); 
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE teachers SET `id`='" . $id. "',`full_name`='" . $full_name . "', `avatar`='" . $avatar. "',`job`='" . $job . "',`fb`='" . $fb. "',`twitter`='" . $twitter . "', `note`='" . $note. "',`status`='" . $status. "', `updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
        var_dump($post);    
    }

    public function detail($id) {
        
		$query = "SELECT * FROM teachers WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>