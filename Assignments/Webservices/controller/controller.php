<?php
//   echo "con page";
require_once('model/model.php');
// $_SERVER('PATH_INFO');
class controller extends model
{   
    public function __construct()
    {
        parent::__construct();
        if(isset($_SERVER['PATH_INFO']))
        {
            switch ($_SERVER['PATH_INFO'])
             {
                case "/home":
                    
                    require_once('view/home.php');
                    break;

                case "/register":
                    // print_r($_REQUEST);
                    if($_SERVER['REQUEST_METHOD'] == "POST")  {
                        $FormDataObject = json_decode(file_get_contents('php://input'));
                        // print_r($FormDataObject);

                        // $FormDataObject = $_REQUEST;
                        // $FormDataObject = array_pop($FormDataObject);
                        $FormDataObject = array(
                            "name" => $FormDataObject->name,
                            "email" => $FormDataObject->email,
                            "password" => $FormDataObject->password,
                        );
                        $Response = $this->insert("users", $FormDataObject);
                        // echo json_encode($Response);    
                    } else {
                       
                    }
                    require_once('view/register.php');
                    break;

                case "/login":

                    require_once('view/login.php');
                    break;

                case "/upload":

                    require_once('view/upload.php');
                    break;

                case "/gallery":

                    require_once('view/gallery.php');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        else{
            header('location:home');
        }


    }


}

$objj = new controller;
?>