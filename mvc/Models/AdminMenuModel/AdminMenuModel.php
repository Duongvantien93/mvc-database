<?php
include_once ("AdminMenuEntity.php");
class AdminMenuModel extends databases
{
    public function list() {
        $sql="SELECT * FROM admin_menu ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }
    public function delete($id){

        $sql="DELETE FROM admin_menu WHERE id=" . $id;
         $result= mysqli_query($this->connection,$sql);
        if ($result) {
            echo "Delete successfully"."<br>";
            echo '<a href="../../">back</a>';
        } else {
            echo "sorry baby";
        }
    }
    public function add($post){
        $sql = "INSERT INTO admin_menu (parent_id, uri , permission ,icon, title)  VALUES('".$post["parent_id"]."','".$post["uri"]."','".$post["permission"]."','".$post["icon"]."', '".$post["title"]."')";
        $result = mysqli_query($this->connection, $sql);  

    }

    public function update ($post){
        $sql="UPDATE admin_menu SET `title`='" . $post['title'] . "', `permission`='" . $post['permission'] . "', `icon`='" . $post['icon'] . "', `uri`='" . $post['uri'] . "', `parent_id`='" . $post['parent_id'] . "' WHERE id=".$post['id']; 
        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
          
            echo 'sorry baby';
        } 
    }
    public function detail($id) 
	{
        
		$query = "SELECT * FROM admin_menu WHERE id='" . $id . "'";
        return $results = $this->connection->query($query);
        
       if ($results) {
           echo"xxxxxxxxxxxxx";
       }
    }


 
    
}
?>