<?php
    include 'config2.php';

    if(isset($_POST['addOrder'])){
        $size = $_POST['pizzaSize'];
        $option1 = $_POST['op1'];
        $option2 = $_POST['op2'];
        $option3 = $_POST['op3'];
        $option4 = $_POST['op4'];
        $option5 = $_POST['op5'];
        $option6 = $_POST['op6'];
        $option7 = $_POST['op7'];
        $option8 = $_POST['op8'];
        $option9 = $_POST['op9'];
        $option10 = $_POST['op10'];
        $option11 = $_POST['op11'];

        $query = "INSERT INTO orders (Olives,Mushroom,Onion,DoubleCheese,Tuna,Olives2,Corn,Pineaple,Chedder,Eggplant,BlackOlives) VALUES ('$option1','$option2','$option3','$option4','$option5','$option6','$option7','$option8','$option9','$option10','$option11')";
        $query_run = mysqli_query($con, $query);

        if ($query_run){
            $_SESSION['status'] = "Inserted";
            header("Location: order.php");
        }
        else{
            $_SESSION['status'] = "Did not Inserted";
            header("Location: order.php");
        }
    }
