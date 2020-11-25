<?php
include_once ("AdminOperationLogEntity.php");
class AdminOperationLogModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_operation_Log ORDER BY ID";
        return $result= mysqli_query($this->connection,$sql);

    }
    public function delete($id){

        $sql="DELETE FROM admin_operation_Log WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
        if ($result) {
            echo "Delete successfully"."<br>";
            echo '<a href="../../">back</a>';
        } else {
            echo "sorry baby";
        }
    }

    public function add($post){
        $sql = "INSERT INTO admin_operation_log(id, user_id, path, method, ip, input, created_at,updated_at) VALUES('".$post["id"]."','".$post["user_id"]."','".$post["path"]."','".$post["method"]."', '".$post["ip"]."', '".$post["input"]."', '".$post["created_at"]."', '".$post["updated_at"]."')";
        $result = mysqli_query($this->connection, $sql);
      
    }

    public function update ($post){
        $sql="UPDATE admin_operation_Log SET `id`='" . $post['id'] . "', `user_id`='" . $post['user_id'] . "', `path`='" . $post['path'] . "', `method`='" . $post['method'] . "', `ip`='" . $post['ip'] . "', `created_at`='" . $post['created_at'] . "', `updated_at`='" . $post['updated_at'] . "' WHERE id=".$post['id']; 
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($id) 
	{
        
		$query = "SELECT * FROM admin_operation_Log WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
        
       if ($results) {
           echo"xxxxxxxxxxxxx";
       }
    }


 
    
}
?>