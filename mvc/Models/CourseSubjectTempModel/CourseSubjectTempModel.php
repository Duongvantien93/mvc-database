<?php
class CourseSubjectTempModel extends databases
{
    public function list() {
        $sql="SELECT * FROM course_subject_temp ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM course_subject_temp WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $course_id=mysqli_real_escape_string($this->connection,$post['course_id']);
        $subject_id =mysqli_real_escape_string($this->connection,$post['subject_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO course_subject_temp(id,course_id, subject_id,created_at, updated_at) 
         VALUES( '".$id."', '".$course_id."','".$subject_id ."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $course_id=mysqli_real_escape_string($this->connection,$post['course_id']);
        $subject_id =mysqli_real_escape_string($this->connection,$post['subject_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE course_subject_temp SET `id`='" . $id. "',`course_id`='" . $course_id . "', `subject_id`='" . $subject_id. "', `updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);   
    }

    public function detail($id) {
        
		$query = "SELECT * FROM course_subject_temp WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>