<?php
class UserHandling extends Database{

    function  loginCheck($userName,$passWord){
        $user_safe = $this->connProduct->real_escape_string($userName);
        $pass_safe = $this->connProduct->real_escape_string($passWord);
         
        $sqlString = $this->connProduct->prepare("SELECT `username`, `password` FROM `user` WHERE `username`=?;");
        $sqlString->bind_param("s",$user_safe);
        $sqlString->execute();
        $result =$sqlString->get_result();
        
        if($result->num_rows==1){
            $userDB=$result->fetch_assoc();
            $password = trim(unpack("A80",$userDB['password'])[1]);
            if($userDB['username']===$userName && $password===$pass_safe){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}