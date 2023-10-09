<!DOCTYPE html>
<html>
<?php 
    require("validate.php");
    
    function attemptLogin() {
	echo "Attempting Login";
        $user = $_POST["username"];
        $pass = $_POST["password"];
	echo "Your user is " . $user . " and your password is " . $pass . "!";
	if (validateUser($user, $pass)) {
		echo "Logged in!";
	}	
	else {
		echo "Not logged in!";
	}
/*
        // TODO Hash pw, check against hash in db
        $db_hash = password_hash("GoodPassword", PASSWORD_BCRYPT);

        $host  = $_SERVER['HTTP_HOST'];

        if (password_verify($pass, $db_hash)) {
            // Set cookie for login message
            header("Location: Index.php");

        }
        else {
            // Set cookie for incorrect login
            header("Location: Login.php");
	}

 */
    }


    function checkLogin() {
        // TODO add a real check here for login
        $loggedin = false;
        if ($loggedin) {
            return true;
        }
        return false;
    }
/*
    if (checkLogin()) {
        // set cookie saying "You're already logged in."
        // proceed from there
    }
    else {
 */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            attemptLogin();
	}
   /*
    }
    */
?>
<head>
  <title> Test Login Page </title>
  <link rel="stylesheet" href="styleSheet.css">
</head>
<main>
  <div>
    <!-- LOGIN FORM -->
    <h1>Login</h1>
    <form action="Login.php" method="post">
      <label>Username:</label>
      <input type="text" name="username" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="password" value="">
      <br>
      <input type="submit" value="login">
    </form>
    <p>
      <?php echo $login_message; ?>
    </p>
  </div>
</main>

</html>
