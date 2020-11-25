<?php
include_once ("AdminPermissionsEntity.php");
class AdminPermissionsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_permissions ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){

        $sql="DELETE FROM admin_permissions WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO admin_permissions( id, name, slug, http_method, create_at, updated_at,http_path) VALUES('".$post["id"]."','".$post["name"]."','".$post["slug"]."','".$post["http_method"]."', '".$post["created_at"]."', '".$post["updated_at"]."', '".$post["http_path"]."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update ($post){
        $sql="UPDATE admin_permissions SET `id`='" . $post['id'] . "', `name`='" . $post['name'] . "', `slug`='" . $post['slug'] . "', `http_method`='" . $post['http_method'] . "', `http_path`='" . $post['http_path'] . "', `create_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id']; 
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM admin_permissions WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    }


 
    
}
?>