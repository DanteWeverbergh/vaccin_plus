<?php

require_once 'models/UserModel.php';

class UserController {

    

    function index() {
        include BASE_DIR . '/views/pages/login.php';
    }

    function login () {
        //login

       
        

        $email = $_POST['email'];
        $password = $_POST['password'];

       if(isset($email) && isset($password)) {
           $user = User::login($email, $password);

           if($user !== false) {
               $_SESSION['user_id'] = $user->user_id;
               header('location: /vaccin/admin');
           } else {
               echo 'Er is iets fout gelopen bij het aanmelden, probeer opnieuw';
           }
       }


    
    }

    function logout() {
        session_destroy();
        header('location: /vaccin');
    }
}