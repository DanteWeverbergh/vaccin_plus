<?php

require_once 'models/CenterModel.php';
require_once 'models/Vaccin_model.php';
require_once 'models/UserModel.php';

class VaccinController {

    function index($center_id) {


        $centers = Center::getAllCenters();
        $total1 = Vaccin::countVaccins(1);
        $total2 = Vaccin::countVaccins(2);
        $total3 = Vaccin::countVaccins(3);


        include BASE_DIR . '/views/pages/home.php';
    }

    function detail($center_id) {

        $center = Center::getCenterById($center_id);
        $vaccins = Vaccin::getAvailableVaccinByCenterId($center_id);
        $total = Vaccin::countVaccins($center_id);


        include BASE_DIR . '/views/pages/detail.php';
    }

    function claim($center_id) {

        $center = Center::getCenterById($center_id);

        $total1 = Vaccin::countVaccins(1);
        $total2 = Vaccin::countVaccins(2);
        $total3 = Vaccin::countVaccins(3);
        

        

        include BASE_DIR . '/views/pages/claim.php';
    }

    function claimed($center_id) {


        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {


            $data = [];

           $data['name'] = $_POST['name'];
           $data['email'] = $_POST['email'];
           $data['phone'] = $_POST['phone'];
           $data['rijksregisternr'] = $_POST['rijksregisternr'];

          $vaccin_id = Vaccin::vaccinRes($data, $center_id);
        }



        include BASE_DIR . '/views/pages/claimed.php';


    }

    function instructions() {

       
        if(!empty($_SESSION['user_id'])) {

            $user_id = $_SESSION['user_id'];
            $user = User::getById($user_id);
            $center_id = $user->center_id;
            $center = Center::getCenterById($user->center_id);


           
            //checken of we al een pdf hebben geupload
            if(empty($center->pdf)) {
                include BASE_DIR . '/views/pages/instructions.php';
            } else {



                include BASE_DIR . '/views/pages/pdf_uploaded.php';
            }


            if(isset($_FILES['pdf'])) {


           

                //folder aanmaken per vaccinatiecentrum
              $upload_dir = BASE_DIR . '/pdf/' . $center_id . '/';

              if(! is_dir($upload_dir)){
                  mkdir($upload_dir);
              } 
                

              $tmp_location = $_FILES['pdf']['tmp_name'];
              //oude naam bestand
              $old_name = $_FILES['pdf']['name'];
              //file info
              $file_info = pathinfo($old_name);
              //extensie ophalen
              $extension = $file_info['extension'];

              

            

              if($extension == 'pdf') {
                //unieke naam aanmaken voor pdf
                $pdf = uniqid() . '.' . $extension;

                $new_location = $upload_dir . $pdf;

                move_uploaded_file($tmp_location, $new_location);

                $check = Center::uploadPdf($pdf, $center_id);

                if($check) {
                    echo 'bestand geupload';
                }



              } else {
                  echo '<h1>Je kan dit bestandstype niet uploaden, probeer opnieuw met een pdf</h1>';
              }

            }


            
        } else {

           
            $center = Center::getCenterById(1);

            if(empty($center->pdf)) {
                include BASE_DIR . '/views/_partials/no_admin.php';
            } else {
                include BASE_DIR . '/views/pages/pdf_uploaded.php';
            }




           
        }



        
    }

    function admin() {

        $user_id = $_SESSION['user_id'];
        
        $user = User::getById($user_id);
        $center = Center::getCenterById($user->center_id);

        $vaccins = Vaccin::getAllVaccinsByCenterIdDesc($user->center_id);


        

        include BASE_DIR . '/views/pages/admin.php';
    }
}