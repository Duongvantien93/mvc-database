<?php
class ClassroomsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM classrooms ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM classrooms WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $learning_facility_id =mysqli_real_escape_string($this->connection,$post['lf']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO classrooms(id,title, description,learning_facility_id ,created_at, updated_at) VALUES( '".$id."', '".$title."', '".$description."', '".$learning_facility_id ."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $learning_facility_id =mysqli_real_escape_string($this->connection,$post['lf']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE classrooms SET `id`='" . $id. "',`title`='" . $title . "', `description`='" . $description. "',`learning_facility_id`='" . $learning_facility_id . "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM classrooms WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>