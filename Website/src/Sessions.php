<?php namespace src;?>
<?php



require "User.php" ;
class Sessions
{
    function session(){
        if(isset($_POST['Submit'])){
            if(($_POST['Username'] == $username) &&
                ($_POST['Password']== $password)){

                $_SESSION['Username'] = $username;
                $_SESSION['Active'] = true;
                header("location: index.php");
                exit;
            }
            else
                echo'Incorrect Username or Password';

        }
    }
    public function killSession(){
        $_SESSION = [];
        if(ini_get('session.use_cookies')){
            $params = session_get_cookie_params();
            setcookie(session_name(),'',time() - 42000,
                $params['path'], $params['domain'],$params['secure'],$params['httponly']);

        }
        session_destroy();
    }
    public function forgetSession(){
        $this ->killSession();
        header("location:../public/login.php");
        exit;
    }

}

