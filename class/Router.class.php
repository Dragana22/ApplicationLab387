<?php

class Router
{

    /**
     *
     * Method for loading pages inside the application with check for user type/status.
     * @param string $page_name The name of the page which should be loaded inside the application.
     * @return string It returns requested page's content if page is found, otherwise it returns content of the index page.
     * Be aware that all PHP code will be executed before returning the content of the page.
     *
     */
    public function load(string $page_name)
    {
        $is_user_logged_in = AuthGuard::is_user_logged_in();
        //Declare page class
        $page = new Page();

        # If page empty return index
        if ($page_name === '') {
            $page->load("index")->output("full");
            return;
        }


        //Array of all pages by status
        $list_array = File::get("file", "pages", "php", true);

        // Here we have a whitelist for all pages non-logged in user can access (basically all outer pages which don't require started session)
        //Create a new array with non important pages $key for the array 0

        $whitelist_for_external = $list_array[0];
        $pagesWithoutModules = $list_array[1];

        if (in_array($page_name, $whitelist_for_external, true) == true) {
            $page_conent = $page->load($page_name)->output("");
            echo $page_conent;
        } else if (in_array($page_name, $pagesWithoutModules, true) == true && $is_user_logged_in) {
            $page_conent = $page->load($page_name)->output("full");
            echo $page_conent;
        } else {
            $page_conent = $page->load("index")->output("");
            echo $page_conent;
        }

    }

    public function ajax($data)
    {

        if ($data['endpoint'] == "login") {
            $response = ['success' => false, 'message' => 'Nije tacna sifra ili email'];
            $login_controller = new LoginController();
            if ($login_controller->try_to_login($data['email'], $data['password'], $data['remember-me'])) {
                $response = ['success' => true, 'message' => 'Uspijesno ste logovani'];
            }
            return json_encode($response);

        }

        if ($data['endpoint'] == 'register') {
            $register_controller = new Register();
            $response = ['success' => false, 'message' => 'Korisnik vec postoji'];
            if ($register_controller->register_user($data['username'], $data['email'], $data['password'])) {
                $response = ['success' => true, 'message' => 'Registrovani ste'];
            }
            return json_encode($response);
        }
        return 'Ne postoji putanja';
    }
}
