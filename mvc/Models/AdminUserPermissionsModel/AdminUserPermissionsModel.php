<?php
include_once ("AdminUserPermissionsEntity.php");
class AdminUserPermissionsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_user_permissions ORDER BY user_id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($user_id){
        $sql="DELETE FROM admin_user_permissions WHERE user_id=" . $user_id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO admin_user_permissions(user_id,permission_id, created_at, updated_at) VALUES( '".$post['permission_id']."', '".$post['user_id']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE admin_user_permissions SET `user_id`='" . $post['user_id'] . "', `permission_id`='" . $post['permission_id'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE user_id=".$post['user_id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($user_id) {
        
		$query = "SELECT * FROM admin_user_permissions WHERE user_id='" . $user_id . "'";
        return $results = $this->connection->query($query);
    }


 
    
}
?>