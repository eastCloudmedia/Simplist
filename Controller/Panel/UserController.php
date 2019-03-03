<?php


namespace Controller\Panel;


use Core\Configurations\Routing;
use Model\Logic\MainLogic\UserFunction;
use Route\Show\View;

class UserController
{
    private $Data;

    public function __construct()
    {
        $this->Data = new UserFunction();

    }

    public function Login($Input = null)
    {
        if (isset($_POST['submit']) && isset($_POST['Username']) && isset($_POST['Password'])) {
            $this->Data->Login();
        } else {
            if (isset($_GET['Logout']) && strtolower($_GET['Logout']) == strtolower("True")) {
                if (isset($_COOKIE['Username'])) {
                    setcookie("Username", null, time() - 3600, "", $_SERVER['HTTP_HOST'], Routing::$SecureProtocol, true);
                    setcookie("Firstname",null,time()-3600,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                    setcookie("LoginToken",null,time()-3600,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                    setcookie("lcsrn_Validation",null,time()-3600,"",$_SERVER['HTTP_HOST'],Routing::$SecureProtocol,true);
                    $Viewbag = ['Success' => 'You Logged out successfully!!'];
                    View::Process("Panel.User.Login", $Viewbag);

                } else {
                    View::Process("Panel.User.Login");
                }
            } else {
                $Viewbag = $Input;
                View::Process("Panel.User.Login",$Viewbag);
            }
        }
    }

    public function Signup()
    {
        if (isset($_POST['submit']) && isset($_POST['Username']) && isset($_POST['Password'])  && isset($_POST['rePassword'])&& isset($_POST['Firstname']) && isset($_POST['Lastname'])&& isset($_POST['Email']) && $_POST['Password'] == $_POST['rePassword'])
        {
            $this->Data->Register();
        }
        else
        {

            View::Process("Panel.User.Signup");
        }
    }

    public function Lock()
    {
        $this->Data->LockScreen();
        View::Process("Panel.User.Lockscreen");
    }
}