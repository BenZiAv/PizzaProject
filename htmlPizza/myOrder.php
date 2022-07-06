<?php
    include 'config2.php';

    if(isset($_POST['addOrder'])){
        $size = $_POST['pizzaSize'];
        $option1 = $_POST['op1'];
        if(empty($option1)) $option1 = "None";
        $option2 = $_POST['op2'];
        if(empty($option2)) $option2 = "None";
        $option3 = $_POST['op3'];
        if(empty($option3)) $option3 = "None";
        $option4 = $_POST['op4'];
        if(empty($option4)) $option4 = "None";
        $option5 = $_POST['op5'];
        if(empty($option5)) $option5 = "None";
        $option6 = $_POST['op6'];
        if(empty($option6)) $option6 = "None";
        $option7 = $_POST['op7'];
        if(empty($option7)) $option7 = "None";
        $option8 = $_POST['op8'];
        if(empty($option8)) $option8 = "None";
        $option9 = $_POST['op9'];
        if(empty($option9)) $option9 = "None";
        $option10 = $_POST['op10'];
        if(empty($option10)) $option10 = "None";
        $option11 = $_POST['op11'];
        if(empty($option11)) $option11 = "None";

        $drinks = $_POST['drink1'];
        if(empty($drinks)) $drinks = "None";

        $query = "INSERT INTO orders (Olives,Mushroom,Onion,DoubleCheese,Tuna,Olives2,Corn,Pineaple,Chedder,Eggplant,BlackOlives,Drinks) VALUES ('$option1','$option2','$option3','$option4','$option5','$option6','$option7','$option8','$option9','$option10','$option11','$drinks')";
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
