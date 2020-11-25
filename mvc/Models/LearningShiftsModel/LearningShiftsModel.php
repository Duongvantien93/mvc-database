<?php
class LearningShiftsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM learning_shifts ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM learning_shifts WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $from_time=mysqli_real_escape_string($this->connection,$post['from_time']);
        $to_time=mysqli_real_escape_string($this->connection,$post['to_time']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO learning_shifts(id,title, description,from_time,to_time,created_at, updated_at) VALUES( '".$id."', '".$title."', '".$description."', '".$from_time."', '".$to_time."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $from_time=mysqli_real_escape_string($this->connection,$post['from_time']);
        $to_time=mysqli_real_escape_string($this->connection,$post['to_time']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE learning_shifts SET `id`='" . $id. "',`title`='" . $title . "', `description`='" . $description. "',`from_time`='" . $from_time . "', `to_time`='" . $to_time. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM learning_shifts WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>