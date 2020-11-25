<?php
class CourseDetailsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM course_details ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM course_details WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $course_id=mysqli_real_escape_string($this->connection,$post['course_id']);
        $images=mysqli_real_escape_string($this->connection,$post['images']);
        $content =mysqli_real_escape_string($this->connection,$post['content']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO course_details(id,course_id, images,content,created_at, updated_at) 
         VALUES( '".$id."', '".$course_id."', '".$images."','".$content ."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
        
        var_dump($post);
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $course_id=mysqli_real_escape_string($this->connection,$post['course_id']);
        $images=mysqli_real_escape_string($this->connection,$post['images']);
        $content =mysqli_real_escape_string($this->connection,$post['content']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE course_details SET `id`='" . $id. "',`course_id`='" . $course_id . "', `images`='" . $images. "',`content`='" . $content . "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
        var_dump($post);    
    }

    public function detail($id) {
        
		$query = "SELECT * FROM course_details WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>