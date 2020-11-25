<?php
class ClassesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM classes ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM classes WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $course_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $classroom_id=mysqli_real_escape_string($this->connection,$post['classroom_id']);
        $learning_shift_id =mysqli_real_escape_string($this->connection,$post['learning_shift_id']); 
        $start_learning_date=mysqli_real_escape_string($this->connection,$post['start_learning_date']);
        $end_learning_date=mysqli_real_escape_string($this->connection,$post['end_learning_date']);
        $day =mysqli_real_escape_string($this->connection,$post['day']);
        $user_id=mysqli_real_escape_string($this->connection,$post['user_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO classes(id,title, course_id,status,description, classroom_id,learning_shift_id,start_learning_date,end_learning_date, day,user_id,created_at, updated_at) 
         VALUES( '".$id."', '".$title."','".$course_id ."', '".$status."', '".$description."', '".$classroom_id."','".$learning_shift_id ."', '".$start_learning_date."', '".$end_learning_date."', '".$day."','".$user_id."','".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $course_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $classroom_id=mysqli_real_escape_string($this->connection,$post['classroom_id']);
        $learning_shift_id =mysqli_real_escape_string($this->connection,$post['learning_shift_id']); 
        $start_learning_date=mysqli_real_escape_string($this->connection,$post['start_learning_date']);
        $end_learning_date=mysqli_real_escape_string($this->connection,$post['end_learning_date']);
        $day =mysqli_real_escape_string($this->connection,$post['day']);
        $user_id=mysqli_real_escape_string($this->connection,$post['user_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE classes SET `id`='" . $id. "',`title`='" . $title . "', `course_id`='" . $course_id. "',`status`='" . $status . "',`description`='" . $description. "',`classroom_id`='" . $classroom_id . "', `learning_shift_id`='" . $learning_shift_id. "',`start_learning_date`='" . $start_learning_date . "',`end_learning_date`='" . $end_learning_date. "',`day`='" . $day . "',`user_id`='" . $user_id. "', `updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);   
    }

    public function detail($id) {
        
		$query = "SELECT * FROM classes WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>