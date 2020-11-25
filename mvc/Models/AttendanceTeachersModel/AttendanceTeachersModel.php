<?php
class AttendanceTeachersModel extends databases
{
    public function list() {
        $sql="SELECT * FROM attendance_teachers ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM attendance_teachers WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $time=mysqli_real_escape_string($this->connection,$post['time']);
        $class_id =mysqli_real_escape_string($this->connection,$post['class_id']);
        $teacher_id=mysqli_real_escape_string($this->connection,$post['teacher_id']);
        $number=mysqli_real_escape_string($this->connection,$post['number']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO attendance_teachers(id,time, teacher_id,class_id,number,created_at, updated_at) 
         VALUES( '".$id."', '".$time."','".$teacher_id ."', '".$class_id."', '".$number."','".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $time=mysqli_real_escape_string($this->connection,$post['time']);
        $class_id =mysqli_real_escape_string($this->connection,$post['class_id']);
        $teacher_id=mysqli_real_escape_string($this->connection,$post['teacher_id']);
        $number=mysqli_real_escape_string($this->connection,$post['number']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE attendance_teachers SET `id`='" . $id. "',`time`='" . $time . "', `teacher_id`='" . $teacher_id. "',`class_id`='" . $class_id . "',`created_at`='" . $created_at. "',`updated_at`='" . $updated_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);   
    }

    public function detail($id) {
        
		$query = "SELECT * FROM attendance_teachers WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>