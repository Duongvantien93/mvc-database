<?php
include_once ("SettingsEntity.php");
class SettingsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM settings ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM settings WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO settings(id,status, content, code, created_at, updated_at) VALUES( '".$post['id']."', '".$post['status']."', '".$post['content']."', '".$post['code']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE settings SET `id`='" . $post['id'] . "', `status`='" . $post['status'] . "', `code`='" . $post['code'] . "', `content`='" . $post['content'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM settings WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>