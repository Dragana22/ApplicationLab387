<?php

class Register
{
    public function register_user($fullname, $email, $password)
    {
        $user = new User();
        if($user->search($email)==NULL) {


            $password = hash("sha256", $password);
            $success = $user->add($fullname, $email, $password);
            if ($success == true) {
                return true;
            }
        }
        return false;

    }

}