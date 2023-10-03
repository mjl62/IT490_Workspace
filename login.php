<?php 

    $error = "";
    // functions


    function attemptLogin() {

        $user = $_POST["username"];
        $pass = $_POST["password"];

        // TODO Hash pw, check against hash in db
        $db_hash = password_hash("GoodPassword", PASSWORD_BCRYPT);
        
        $host  = $_SERVER['HTTP_HOST'];
        
        if (password_verify($pass, $db_hash)) {
	    // Set cookie for login message
            header('Location: index.php');
        }
        else {
            // Set cookie for incorrect login
            header('Location: login.php');
        }
    }


    function checkLogin() {
        // TODO add a real check here for login
        $loggedin = true;
        if ($loggedin) {
            return true;
        }
        return false;
    }

    if (checkLogin()) {
        // set cookie saying "You're already logged in."
        header('Location: /IT490/');
    }
    else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            attemptLogin();
        }
    }
    
    
?>


<html>
<body>
    <form method="post" action="login.php">
        <input type="text" placeholder="Username" name="username" required></input>
        <input type="password" placeholder="Password" name="password" required></input>
        <input type="submit" value="Login"></input>
    </form>



</body>

</html>
