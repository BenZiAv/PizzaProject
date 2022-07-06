<?php include 'header.php'; ?>

<body>
    <h1>Make your order now!</h1>
    <form id="order" action="myOrder.php" method="POST"> 
        <select name="pizzaSize" id="pizzaSize">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
            <option value="xl">X-Large</option>
        </select>
        </br>
        <h3>Whats on your pizza?</h3>
        </br>
        <div id="optins"> 
            <a for="op1">Olives</a>
            <input type="checkbox" id="op1" name="op1" value="half">
            <label for="op1a"> Half Pizza</label>
            <input type="checkbox" id="op1" name="op1" value="all">
            <label for="op1b">All Pizza</label>
        </br>
            
            <a for="op2">Mushrooms</a>
            <input type="checkbox" id="op2" name="op2" value="half">
            <label for="op2a">Half Pizza</label>
            <input type="checkbox" id="op2" name="op2" value="all">
            <label for="op2b">All Pizza</label>
        </br>
            
            <a for="op3">Onion</a>
            <input type="checkbox" id="op3" name="op3" value="half">
            <label for="op3a">Half Pizza</label>
            <input type="checkbox" id="op3" name="op3" value="all">
            <label for="op3b">All Pizza</label>
        </br>

            <a for="op4">Double Cheese</a>
            <input type="checkbox" id="op4" name="op4" value="half">
            <label for="op4a">Half Pizza</label>
            <input type="checkbox" id="op4" name="op4" value="all">
            <label for="op4b">All Pizza</label>
        </br>
            
            <a for="op5">Tuna</a>
            <input type="checkbox" id="op5" name="op5" value="half">
            <label for="op5a">Half Pizza</label>
            <input type="checkbox" id="op5" name="op5" value="all">
            <label for="op5b">All Pizza</label>
        </br>
            
            <a for="op6">Olives2</a>
            <input type="checkbox" id="op6" name="op6" value="half">
            <label for="op1a">Half Pizza</label>
            <input type="checkbox" id="op6" name="op6" value="all">
            <label for="op1b">All Pizza</label>
        </br>
            
            <a for="op7">Corn</a>
            <input type="checkbox" id="op7" name="op7" value="ha6f">
            <label for="op6a">Half Pizza</label>
            <input type="checkbox" id="op7" name="op7" value="all">
            <label for="op6b">All Pizza</label>
        </br>
            <a for="op8">Pineaple</a>
            <input type="checkbox" id="op8" name="op8" value="half">
            <label for="op7a">Half Pizza</label>
            <input type="checkbox" id="op8" name="op8" value="all">
            <label for="op7b">All Pizza</label>
        </br>
            <a for="op9">Chedder</a>
            <input type="checkbox" id="op9" name="op9" value="half">
            <label for="op8a">Half Pizza</label>
            <input type="checkbox" id="op9" name="op9" value="all">
            <label for="op8b">All Pizza</label>
        </br>
            <a for="op10">Eggplant</a>
            <input type="checkbox" id="op10" name="op10" value="half">
            <label for="op9a">Half Pizza</label>
            <input type="checkbox" id="op10" name="op10" value="all">
            <label for="op9b">All Pizza</label>
        </br>
            <a for="op11">Black Olives</a>
            <input type="checkbox" id="op11" name="op11" value="half">
            <label for="op10a">Half Pizza</label>
            <input type="checkbox" id="op11" name="op11" value="all">
            <label for="op10b">All Pizza</label>
        </br></br></br>
        </div>
        <h3>Drinks</h3>
        <div id="drink">
            <input type="checkbox" id="drink1" name="drink1" value="cocacola">
            <label for="drink1">Coca-Cola</label></br>
            <input type="checkbox" id="drink2" name="drink2" value="colazero">
            <label for="drink2">Coca-Cola Zero</label></br>
            <input type="checkbox" id="drink3" name="drink3" value="sprite">
            <label for="drink3">Sprite</label></br>
            <input type="checkbox" id="drink4" name="drink4" value="fanta">
            <label for="drink4">Fanta</label></br>
            <input type="checkbox" id="drink5" name="drink5" value="grape">
            <label for="drink5">Grape</label></br>
            <input type="checkbox" id="drink6" name="drink6" value="orange">
            <label for="drink6">Orange</label></br>
        </div></br></br></br>
        <input type="submit" name="addOrder" value="Submit Order">
    </form>

    <?php include 'footer.php'; ?>
