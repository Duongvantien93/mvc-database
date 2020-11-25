<?php
class LearningFacilitiesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM learning_facilities ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM learning_facilities WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $address=mysqli_real_escape_string($this->connection,$post['address']);
        $hotline=mysqli_real_escape_string($this->connection,$post['hotline']);
        $note=mysqli_real_escape_string($this->connection,$post['note']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO learning_facilities(id,name, address,hotline,note,status, created_at, updated_at) VALUES( '".$id."', '".$name."', '".$address."', '".$hotline."', '".$note."', '".$status."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $address=mysqli_real_escape_string($this->connection,$post['address']);
        $hotline=mysqli_real_escape_string($this->connection,$post['hotline']);
        $note=mysqli_real_escape_string($this->connection,$post['note']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE learning_facilities SET `id`='" . $id. "',`name`='" . $name . "', `address`='" . $address. "',`hotline`='" . $hotline . "', `note`='" . $note. "',`status`='" . $status. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM learning_facilities WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>