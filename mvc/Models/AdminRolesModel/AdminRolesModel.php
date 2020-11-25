<?php
class AdminRolesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_roles ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){

        $sql="DELETE FROM admin_roles WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO admin_roles( id, name, slug, create_at, updated_at) VALUES('".$post["id"]."','".$post["name"]."','".$post["slug"]."', '".$post["created_at"]."', '".$post["updated_at"]."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update ($post){
        $sql="UPDATE admin_roles SET `id`='" . $post['id'] . "', `name`='" . $post['name'] . "', `slug`='" . $post['slug'] . "', `create_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id']; 
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM admin_roles WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    }


 
    
}
?>