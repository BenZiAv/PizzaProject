
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

        $sql = "INSERT INTO users (firstname, lastname, phonenumber, email, password) VALUES(?,?,?,?,?)";
        $srmtinsert = $db->prepare($sql);
        $result = $srmtinsert->execute([$firstname, $lastname, $phonenumber, $email, $password]);
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
                    <input class="form-control" id="firstName" type="text" name="firstName" required>

                    <label for="lastName">Last name:</label>
                    <input class="form-control" id="lastName" type="text" name="lastName" required>

                    <label for="phonenumber">Phone-Number:</label>
                    <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

                    <label for="mail">Email:</label>
                    <input class="form-control" id="email" type="email" name="mail" required>

                    <label for="passWord">Password:</label>
                    <input class="form-control" id="password" type="password" name="passWord" required>

                    <label for="rePass">Re-password:</label>
                    <input class="form-control" id="rePasswd" type="password" name="rePass" required>

                    <hr calss="mb-3">
                    
                    <input class="btn btn-primary" type="button" id="register" name="creatUser" value="Sign Up">
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){
            
            Swal.fire({
                        'title': 'Success',
                        'text': 'You have successfuly registerd.',
                        'type': 'success'
                    })

            if(valid){
            

                var firstname   = $('#firstname').val();
                var lastname    = $('#lastname').val();
                var phonenumber = $('#phonenumber').val();
                var email       = $('#email').val();
                var password    = $('#password').val();

                e.preventDefault();

                $.ajax({
                    
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname,lastname: lastname,phonenumber: phonenumber,email: email,password: password},
                    success: function(data){
                        Swal.fire({
                            'title': 'Success',
                            'text': 'You have successfuly registerd.',
                            'type': 'success'
                        })
                    },

                    error: function(data){
                    Swal.fire({
                        'title': 'Errors',
                        'text': 'There was an error while saving data.',
                        'type': 'error'
                    })
                    }
                });
            }else{
                
            }
        });


    });
</script>

<?php include '../src/inc/footer.php'; ?>