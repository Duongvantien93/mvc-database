<?php
include_once ("PriceEntity.php");
class PriceModel extends databases
{
    public function list() {
        $sql="SELECT * FROM price ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM price WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO Price(id,price, note, title, created_at, updated_at) VALUES( '".$post['id']."', '".$post['price']."', '".$post['note']."', '".$post['title']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE price SET `id`='" . $post['id'] . "',`price`='" . $post['price'] . "',`note`='" . $post['note'] . "',`title`='" . $post['title'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM price WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>