<?php
include_once ("MigrationsEntity.php");
class MigrationsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM migrations ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM migrations WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $migration=mysqli_real_escape_string($this->connection,$post['migration']);
        $batch=mysqli_real_escape_string($this->connection,$post['batch']);
         $sql = "INSERT INTO migrations(id,migration, batch) VALUES( '".$id."', '".$migration."', '".$batch."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $migration=mysqli_real_escape_string($this->connection,$post['migration']);
        $batch=mysqli_real_escape_string($this->connection,$post['batch']);
        $sql="UPDATE migrations SET `id`='" . $id. "',`migration`='" . $migration . "', `batch`='" . $batch. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM migrations WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>