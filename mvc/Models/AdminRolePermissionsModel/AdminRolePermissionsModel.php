<?php
include_once ("AdminRolePermissionsEntity.php");
class AdminRolePermissionsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_role_permissions ORDER BY role_id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($role_id){
        $sql="DELETE FROM admin_role_permissions WHERE role_id=" . $role_id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO admin_role_permissions(role_id,permission_id, created_at, updated_at) VALUES( '".$post['role_id']."', '".$post['permission_id']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE admin_role_permissions SET `role_id`='" . $post['role_id'] . "', `permission_id`='" . $post['permission_id'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE role_id=".$post['role_id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($role_id) {
        
		$query = "SELECT * FROM admin_role_permissions WHERE role_id='" . $role_id . "'";
        return $results = $this->connection->query($query);
    }


 
    
}
?>