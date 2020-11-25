<?php
include_once ("StudentsEntity.php");
class StudentsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM students ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM students WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO students(id,full_name, avatar, job, note, status, created_at, updated_at) VALUES( '".$post['id']."', '".$post['full_name']."', '".$post['avatar']."', '".$post['job']."', '".$post['note']."', '".$post['status']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE students SET `id`='" . $post['id'] . "',`full_name`='" . $post['full_name'] . "',`avatar`='" . $post['avatar'] . "',`job`='" . $post['job'] . "', `status`='" . $post['status'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM students WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>