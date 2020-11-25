<?php
include_once ("AdminUsersEntity.php");
class AdminUsersModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_users ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM admin_users WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
         $sql = "INSERT INTO admin_users(id,username, password, name, avatar, remember_token, created_at, updated_at) VALUES( '".$post['id']."', '".$post['username']."', '".$post['password']."', '".$post['name']."', '".$post['avatar']."', '".$post['remember_token']."', '".$post['created_at']."', '".$post['updated_at']."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $sql="UPDATE admin_users SET `id`='" . $post['id'] . "', `username`='" . $post['username'] . "', `password`='" . $post['password'] . "', `name`='" . $post['name'] . "', `avatar`='" . $post['avatar'] . "', `remember_token`='" . $post['remember_token'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id'];
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) {
        
		$query = "SELECT * FROM admin_users WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>