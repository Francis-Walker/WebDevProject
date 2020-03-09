<?php
include ('db_connect.php');
//echo "validateLogin";
$un = $_POST['username'];
$pw = md5($_POST['password']);
validateLogin($un,$pw);


    function validateLogin($username, $password){

       // echo '<br>'.$username.'<br>';
        //echo '<br>'.$password.'<br>';
        $mysqli = connectToDb();

        $query = "SELECT * FROM employers WHERE FarmID = '".$username
        ."' and PasswordHash = '".$password."'";

        $result = $mysqli->query($query);
       // print_r($result);
        //echo'<br>';
        //echo 'random';
        //print_r($result->fetch_array());
        if ($result->num_rows==1)
        {
            echo 'Successful, Please click Okay to go to Dashboard';
            $action_page ="../index.php";


        }
        else
        {
            echo 'login Failed, Please click Okay to go to login';
            $action_page ="../login.php";

           // return false;
        }

        echo '<form name="user_redirect" id="user_redirect" method="POST"'
            . 'action="' . $action_page . '">'
            .'<input type="hidden" name="username" value='.$username.'>'
            .  '<button> Okay</button>'
            . '</form>';

   // <button class="float-left submit-button" >Home</button>
//</form>

    }