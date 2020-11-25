<?php
class UserClassTempsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM user_class_temps ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM user_class_temps WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $id_user=mysqli_real_escape_string($this->connection,$post['id_user']);
        $id_class =mysqli_real_escape_string($this->connection,$post['id_class']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO user_class_temps(id,id_user, id_class,created_at, updated_at) 
         VALUES( '".$id."', '".$id_user."','".$id_class ."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $id_user=mysqli_real_escape_string($this->connection,$post['id_user']);
        $id_class =mysqli_real_escape_string($this->connection,$post['id_class']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE user_class_temps SET `id`='" . $id. "',`id_user`='" . $id_user . "', `id_class`='" . $id_class. "', `updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);   
    }

    public function detail($id) {
        
		$query = "SELECT * FROM user_class_temps WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>