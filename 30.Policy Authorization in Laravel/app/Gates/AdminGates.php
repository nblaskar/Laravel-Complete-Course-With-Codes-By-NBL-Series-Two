<?php
// Define A Separate Class Based Gate Authorization Here
namespace App\Gates;
class AdminGates{
    public function check_admin($user){
        if($user->email === 'admin@gmail.com'){
            return true;
        }else{
            return false;
        }
    }
}