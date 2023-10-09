<?php 

$server = "mysql:host=127.0.0.1;port=3306;dbname=testdb";
$user = "proj";
$pass = "projPass123";

try {
	global $server, $user, $pass;
	$pdo = new PDO($server, $user, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "Connection success!";

}

catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

function validateUser($login_user, $login_pass) {
	try {
		echo "trying";
		$query = "SELECT * FROM Users WHERE username = :username;";
		echo "a";
		$statement = $pdo->prepare($query);
		echo "b";
		$statement->bindParam(":username", $login_user);
		$statement->execute();		
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if ($login_pass == $result["password"]) {
		return true;
			echo "Login correct!";
		}
		else {
			return false;
			echo "Login incorrect!";
		}
	}
	catch (PDOException $e) {
		echo "Failed: " . $e->getMessage();
	
	}
	}

	function attemptRegister() {
		// Username not taken
		// Email not taken
		// Legitimate email
		// Pass meets requrements
		// all fields filled

		$query = "SELECT * FROM USERS WHERE username='" . $_POST["username"] . "';";
		$result = $connect->query($query);	
	}

?>




