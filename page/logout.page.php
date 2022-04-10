<?php
    setcookie('login_cookie', '', time() -3600, '/');
    session_destroy();
    header('Location:'.APP_URL.'index.php?page=index');