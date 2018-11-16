<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Name is required";
      } else {
        $username = test_input($_POST["username"]);
        $_SESSION["user"] = $username;


      }
      if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
      } else {
        $password = test_input($_POST["password"]);
        Redirect('http://localhost:8080/ContentToBeContentAbout/index.php', false);
      }
     
}
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<h2>Login</h2>
<p><span class="error">* required field</span></p>
  User Name: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
 
  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  
  <br><br>
  <input type="submit" name="submit" value="Log In">
  <a href="http://localhost:8080/ContentToBeContentAbout/create.php">Create Account</a>
</form>


</body>
</html>