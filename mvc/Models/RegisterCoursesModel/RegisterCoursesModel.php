<?php
class RegisterCoursesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM register_courses ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM register_courses WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $full_name=mysqli_real_escape_string($this->connection,$post['full_name']);
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $course_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $phone=mysqli_real_escape_string($this->connection,$post['phone']);
        $birthday=mysqli_real_escape_string($this->connection,$post['birthday']);
        $address=mysqli_real_escape_string($this->connection,$post['address']);
        $job =mysqli_real_escape_string($this->connection,$post['job']); 
        $note=mysqli_real_escape_string($this->connection,$post['note']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $linkfb =mysqli_real_escape_string($this->connection,$post['linkfb']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO register_courses(id,full_name, phone,email,course_id,birthday, address,job,note,status, linkfb,created_at, updated_at) 
         VALUES( '".$id."', '".$full_name."', '".$phone."','".$email ."', '".$course_id."', '".$birthday."', '".$address."','".$job ."', '".$note."', '".$status."', '".$linkfb."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $full_name=mysqli_real_escape_string($this->connection,$post['full_name']);
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $course_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $phone=mysqli_real_escape_string($this->connection,$post['phone']);
        $birthday=mysqli_real_escape_string($this->connection,$post['birthday']);
        $address=mysqli_real_escape_string($this->connection,$post['address']);
        $job =mysqli_real_escape_string($this->connection,$post['job']); 
        $note=mysqli_real_escape_string($this->connection,$post['note']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $linkfb =mysqli_real_escape_string($this->connection,$post['linkfb']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE register_courses SET `id`='" . $id. "',`full_name`='" . $full_name . "', `phone`='" . $phone. "',`email`='" . $email . "',`course_id`='" . $course_id. "',`birthday`='" . $birthday . "', `address`='" . $address. "',`job`='" . $job . "',`note`='" . $note. "',`status`='" . $status . "', `linkfb`='" . $linkfb. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
        var_dump($post);    
    }

    public function detail($id) {
        
		$query = "SELECT * FROM register_courses WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>