<?php
class UsersModel extends databases
{
    public function list() {
        $sql="SELECT * FROM users ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM users WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $class_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $email_verified_at=mysqli_real_escape_string($this->connection,$post['email_verified_at']);
        $password=mysqli_real_escape_string($this->connection,$post['password']);
        $remember_token =mysqli_real_escape_string($this->connection,$post['remember_token']); 
        $type=mysqli_real_escape_string($this->connection,$post['type']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $phone =mysqli_real_escape_string($this->connection,$post['phone']);
        $address=mysqli_real_escape_string($this->connection,$post['address']);
        $facebook=mysqli_real_escape_string($this->connection,$post['facebook']);
        $note =mysqli_real_escape_string($this->connection,$post['note']);
        $register_course_id=mysqli_real_escape_string($this->connection,$post['register_course_id']);
        $price_id=mysqli_real_escape_string($this->connection,$post['price_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO users(id,name, email,class_id,email_verified_at, password,remember_token,type,status, phone,address,facebook,note,register_course_id,price_id,created_at, updated_at) 
         VALUES( '".$id."', '".$name."','".$email ."', '".$class_id."', '".$email_verified_at."', '".$password."','".$remember_token ."', '".$type."', '".$status."', '".$phone."','".$address."','".$facebook."','".$note."','".$register_course_id."','".$price_id."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $name=mysqli_real_escape_string($this->connection,$post['name']);
        $class_id =mysqli_real_escape_string($this->connection,$post['course_id']);
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $email_verified_at=mysqli_real_escape_string($this->connection,$post['email_verified_at']);
        $password=mysqli_real_escape_string($this->connection,$post['password']);
        $remember_token =mysqli_real_escape_string($this->connection,$post['remember_token']); 
        $type=mysqli_real_escape_string($this->connection,$post['type']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $phone =mysqli_real_escape_string($this->connection,$post['phone']);
        $address=mysqli_real_escape_string($this->connection,$post['address']);
        $facebook=mysqli_real_escape_string($this->connection,$post['facebook']);
        $note =mysqli_real_escape_string($this->connection,$post['note']);
        $register_course_id=mysqli_real_escape_string($this->connection,$post['register_course_id']);
        $price_id=mysqli_real_escape_string($this->connection,$post['price_id']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE users SET `id`='" . $id. "',`name`='" . $name . "', `email`='" . $email. "',`email_verified_at`='" . $email_verified_at . "',`password`='" . $password. "',`remember_token`='" . $remember_token . "', `class_id`='" . $class_id. "',`type`='" . $type . "',`status`='" . $status. "',`phone`='" . $phone . "',`address`='" . $address. "',`facebook`='" . $facebook. "',`note`='" . $note. "',`register_course_id`='" . $register_course_id. "',`price_id`='" . $price_id. "', `updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);   
    }

    public function detail($id) {
        
		$query = "SELECT * FROM users WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>