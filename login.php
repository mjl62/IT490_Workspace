<?php 
setcookie("Testcookie", "This is a test", 86400, '...localhost', NULL);
    // functions
    function checkLogin() {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        // TODO Hash pw, check against hash in db
        $db_hash = password_hash("GoodPassword", PASSWORD_BCRYPT);
        
        $host  = $_SERVER['HTTP_HOST'];
        
        if (password_verify($pass, $db_hash)) {
            // Generate key, store in cookies and db, this will be session key
            header('Location: index.php');

        }
        else {
            // Store error in cookie to be deleted when page is reached, 
            // give it a life of 5 minutes or something
            setcookie("log_err_cookie", "Login Unsuccessful", 300, '/');
            // header('Location: login.php');
        }
        
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        checkLogin();
        
    
    }
    
?>


<html>
<body>
    <?php 
    echo $_COOKIE["Testcookie"];
    if (isset($_COOKIE["Testcookie"])) {
        echo $_COOKIE["Testcookie"];
        //setcookie("log_err_cookie", "", time() - 3600);
    }
    ?>
    <form method="post" action="login.php">
        <input type="text" placeholder="Username" name="username" required></input>
        <input type="password" placeholder="Password" name="password" required></input>
        <input type="submit" value="Login"></input>
    </form>



</body>

</html>