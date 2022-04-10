<?php

class AuthGuard
{
    public static function is_user_logged_in()
    {
        $cookie_id = Cookie::get('login_cookie');
        if (!empty($cookie_id)) {
            $user_id = $cookie_id;
        }
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!empty($user_id) || !empty($_SESSION['user'])) {
            return true;
        }
        return false;
    }

}




