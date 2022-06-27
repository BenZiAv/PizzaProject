<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Pizza</title>
    </head>
	<style>
		/* Navbar container */
.navbar {
    overflow: hidden;
    background-color: #349beb;
    font-family: Calibri;
  }
  
  /* Links inside the navbar */
  .navbar a {
    float: left;
    font-size: 20px;
    color: #0c336b;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* The dropdown container */
  .dropdown {
    float: left;
    overflow: hidden;
  }
  
  /* Dropdown button */
  .dropdown .dropbtn {
    font-size: 20px;
    border: none;
    outline: none;
    color: #0c336b;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit; /* Important for vertical align on mobile phones */
    margin: 0; /* Important for vertical align on mobile phones */
  }
  
  /* Add a red background color to navbar links on hover */
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }
  
  /* Dropdown content (hidden by default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #349beb;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    float: none;
    color: #0c336b;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  /* Add a grey background color to dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }
	</style>
	  <div class="navbar">
      <a href="\userForm.php"><i>Profile</i></a>
      <a href="../public/order.php"><i>Order</i></a>
      <a href="https://www.independent.co.uk/topic/pizza"><i>Pizza News</i></a>
      <a href="#deals"><i>Hot deals</i></a>
			<a href="../public/Register.php">Register</a>
			<a href="LogIn.html">Log In</a>
			<a href = "PHP/logout.php" tite = "Logout">Logout</a>
	  </div>

