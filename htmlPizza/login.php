<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="/htmlPizza/style.css" />
</head>
<body>
    <?php include '/xampp/htdocs/PizzaProject/htmlPizza/header.php'; ?>
<?php
// If form submitted, insert values into the database.
if (isset($_POST['mail'])){

$mail = stripslashes($_REQUEST['mail']); // removes backslashes
$mail = mysqli_real_escape_string($con,$mail); //escapes special characters in a string

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);

$firstname = stripslashes($_REQUEST['firstname']);
$firstname = mysqli_real_escape_string($con,$firstname);

$lastname = stripslashes($_REQUEST['lastname']);
$lastname = mysqli_real_escape_string($con,$lastname);

$phonenumber = stripslashes($_REQUEST['phonenumber']);
$phonenumber = mysqli_real_escape_string($con,$phonenumber);


//Checking is user existing in the database or not
$query = "SELECT * FROM `users` WHERE mail='$mail' and password='".md5($password)."'";
$result = mysqli_query($con,$query) or die(mysqli_error());
$rows = mysqli_num_rows($result);
if($rows==1){
$_SESSION['mail'] = $mail;
header("Location: main.php"); // Redirect user to main.php
}else{
echo "<div class='form'><h3>Email/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
}
}else{
?>
<div class="form">
    <h1>Log In</h1>
    <form  class="login" action="" method="post" name="login">
        <input type="mail" name="mail" placeholder="Email" required /><br />
        <input type="password" name="password" placeholder="Password" required /><br />
        
        <input name="submit" type="submit" value="Login" />
    </form>
    <p>Not registered yet? <a href='register.php'>Register Here</a></p>
    <br /><br />
</div>
<?php } ?>

<?php include '/xampp/htdocs/PizzaProject/htmlPizza/footer.php'; ?>

</body>
</html>