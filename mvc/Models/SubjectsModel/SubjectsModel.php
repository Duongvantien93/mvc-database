<?php
class SubjectsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM subjects ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM subjects WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $course_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $image=mysqli_real_escape_string($this->connection,$post['image']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $number_session=mysqli_real_escape_string($this->connection,$post['number_session']);
        $price =mysqli_real_escape_string($this->connection,$post['price']); 
        $promotion_price=mysqli_real_escape_string($this->connection,$post['promotion_price']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $is_free =mysqli_real_escape_string($this->connection,$post['is_free']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO subjects(id,name, image,course_id,description, number_session,price,promotion_price,status, is_free,created_at, updated_at) 
         VALUES( '".$id."', '".$name."','".$image ."', '".$course_id."', '".$description."', '".$number_session."','".$price ."', '".$promotion_price."', '".$status."', '".$is_free."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $course_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $image=mysqli_real_escape_string($this->connection,$post['image']);
        $description=mysqli_real_escape_string($this->connection,$post['description']);
        $number_session=mysqli_real_escape_string($this->connection,$post['number_session']);
        $price =mysqli_real_escape_string($this->connection,$post['price']); 
        $promotion_price=mysqli_real_escape_string($this->connection,$post['promotion_price']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $is_free =mysqli_real_escape_string($this->connection,$post['is_free']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE subjects SET `id`='" . $id. "',`name`='" . $name . "', `image`='" . $image. "',`description`='" . $description . "',`course_id`='" . $course_id. "',`number_session`='" . $number_session . "', `price`='" . $price. "',`promotion_price`='" . $promotion_price . "',`status`='" . $status. "',`is_free`='" . $is_free . "', `updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
        var_dump($post);    
    }

    public function detail($id) {
        
		$query = "SELECT * FROM subjects WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>