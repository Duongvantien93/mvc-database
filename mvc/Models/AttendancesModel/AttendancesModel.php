<?php
class AttendancesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM attendances ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM attendances WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $attendance_info=mysqli_real_escape_string($this->connection,$post['attendance_info']);
        $class_id =mysqli_real_escape_string($this->connection,$post['class_id']);
        $user_id=mysqli_real_escape_string($this->connection,$post['user_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO attendances(id,attendance_info, user_id,class_id,created_at, updated_at) 
         VALUES( '".$id."', '".$attendance_info."','".$user_id ."', '".$class_id."','".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $attendance_info=mysqli_real_escape_string($this->connection,$post['attendance_info']);
        $class_id =mysqli_real_escape_string($this->connection,$post['class_id']);
        $user_id=mysqli_real_escape_string($this->connection,$post['user_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE attendances SET `id`='" . $id. "',`attendance_info`='" . $attendance_info . "', `user_id`='" . $user_id. "',`class_id`='" . $class_id . "',`created_at`='" . $created_at. "',`updated_at`='" . $updated_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);   
    }

    public function detail($id) {
        
		$query = "SELECT * FROM attendances WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>