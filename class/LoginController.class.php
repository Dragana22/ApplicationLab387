<?php

class LoginController
{
    public function check_user_credentials($email, $password)
    {
        $password= hash('sha256', $password);
        $user = new User();
        $user_rows = $user->search($email);
        foreach ($user_rows as $user_row) {
            if ($email == $user_row["email"] && $password == $user_row["password"]) {
                return $user_row['id'];
            }
        }
        return false;

    }

    function try_to_login($email, $password, $remember_me = 'off')
    {
        $user_id = $this->check_user_credentials($email, $password);
        if ($user_id) {
            if ($remember_me == 'on') {
                setcookie('login_cookie', $user_id, time() + 31 * 24 * 3600, '/');
            }
            session_start();
            $_SESSION['user']=$user_id;
            return true;

        }
        return false;
    }

    function __construct()
    {

    }
}






