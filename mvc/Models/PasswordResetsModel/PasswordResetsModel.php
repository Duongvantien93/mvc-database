<?php
include_once ("PasswordResetsEntity.php");
class PasswordResetsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM password_resets ORDER BY email";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($email){
        $sql="DELETE FROM password_resets WHERE email='" . $email . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $token=mysqli_real_escape_string($this->connection,$post['token']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
         $sql = "INSERT INTO password_resets(email,token, created_at) VALUES( '".$email."', '".$token."', '".$created_at."')";
        $result = mysqli_query($this->connection, $sql); 
    }

    public function update($post){
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $token=mysqli_real_escape_string($this->connection,$post['token']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $sql="UPDATE password_resets SET `email`='" . $email. "',`token`='" . $token . "', `created_at`='" . $created_at. "' WHERE email='".$email."'";
        $result = mysqli_query($this->connection, $sql);

    }
    public function detail($email) {
        
		$query = "SELECT * FROM password_resets WHERE email='".$email."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>