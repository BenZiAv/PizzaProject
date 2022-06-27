
<?php
    require_once('../src/config.php');
    include '../src/inc/header.php'; 
?>

<body>
<div>
    <?php
    if (isset($_POST['creatUser'])){
        $firstname=     $_POST['firstName'];
        $lastname=      $_POST['lastName'];
        $phonenumber=   $_POST['phonenumber'];
        $email=         $_POST['mail'];
        $password=      $_POST['passWord'];
    }
    ?>
</div>
<div>
    <form action="register.php" class="form" method="post">


        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Sign Up</h1>
                    <hr calss="mb-3">

                    <label for="firstName">First name:</label>
                    <input class="form-control" type="text" name="firstName" required>

                    <label for="lastName">Last name:</label>
                    <input class="form-control" type="text" name="lastName" required>

                    <label for="phonenumber">Phone-Number:</label>
                    <input class="form-control" type="text" name="phonenumber" required>

                    <label for="mail">Email:</label>
                    <input class="form-control" type="email" name="mail" required>

                    <label for="passWord">Password:</label>
                    <input class="form-control" type="password" name="passWord" required>

                    <label for="rePass">Re-password:</label>
                    <input class="form-control" type="password" name="rePass" required>

                    <hr calss="mb-3">
                    
                    <input class="btn btn-primary" type="submit" name="creatUser" value="Sign Up">
                </div>
            </div>
        </div>
    </form>
</div>

<?php include '../src/inc/footer.php'; ?>