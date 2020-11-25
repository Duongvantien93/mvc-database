<?php
class DocumentsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM documents ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM documents WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO documents(id,full_name, email, created_at, updated_at) VALUES( '".$post['id']."', '".$post['full_name']."', '".$post['email']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE documents SET `id`='" . $post['id'] . "', `full_name`='" . $post['full_name'] . "', `email`='" . $post['email'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM documents WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>