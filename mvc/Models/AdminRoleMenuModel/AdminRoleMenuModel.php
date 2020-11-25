<?php
include_once ("AdminRoleMenuEntity.php");
class AdminRoleMenuModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_role_menu ORDER BY role_id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($role_id){
        $sql="DELETE FROM admin_role_menu WHERE role_id=" . $role_id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO admin_role_menu(role_id,menu_id, created_at, updated_at) VALUES( '".$post['role_id']."', '".$post['menu_id']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE admin_role_menu SET `role_id`='" . $post['role_id'] . "', `menu_id`='" . $post['menu_id'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE role_id=".$post['role_id']."' AND menu_id=".$post['menu_id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($role_id) {
        
		$query = "SELECT * FROM admin_role_menu WHERE role_id='" . $role_id . "'";
        return $results = $this->connection->query($query);
    }


 
    
}
?>