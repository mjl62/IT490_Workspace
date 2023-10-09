<!DOCTYPE html>
<!-- THIS IS JUST TO TEST THE FORMS ON WEBPAGE -->
<html>

<head>
  <title> Test Registration Page </title>
  <link rel="stylesheet" href="styleSheet.css">
</head>
<main>
  <div>
  

  <div>
    <!-- REGISTER FORM -->
    <h1>Register! </h1>
    <form action="matt.php" method="post">

      <label>Email:</label>
      <input type="text" name="emailReg" value="">
      <br>
      <label>First Name:</label>
      <input type="text" name="firstName" value="">
      <br>
      <label>Last Name:</label>
      <input type="text" name="lastName" value="">
      <br>
      <label>Username:</label>
      <input type="text" name="usernameReg" value="">
      <br>
      <label>Password:</label>
      <input type="password" name="passwordReg" value="">
      <br>
      <label>Enter Password Again:</label>
      <input type="password" name="passwordCheck" value="">
      <br>
      <input type="submit" value="register">
    </form>
  </div>
</main>

</html>