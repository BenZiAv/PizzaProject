<?php include '../src/inc/header.php'; ?>
<body>
    <h1>Make your order now!</h1>
    <form id="order" action="#order.php"> 
        <select name="pizzaSize" id="pizzaSize">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
            <option value="xl">XL</option>
        </select>
        </br>
        <h3>Whats on your pizza?</h3>
        </br>
        <div id="optins">
            <input type="checkbox" id="op1" name="op1" value="olives">
            <label for="op1">Olives</label>
            <input type="checkbox" id="op1a" name="op1a" value="half">
            <label for="op1a">Half Pizza</label>
            <input type="checkbox" id="op1b" name="op1b" value="all">
            <label for="op1b">All Pizza</label>
        </br>
            <input type="checkbox" id="op2" name="op2" value="shrooms">
            <label for="op2">Mushrooms</label>
            <input type="checkbox" id="op2a" name="op2a" value="half">
            <label for="op2a">Half Pizza</label>
            <input type="checkbox" id="op2b" name="op2b" value="all">
            <label for="op2b">All Pizza</label>
        </br>
            <input type="checkbox" id="op3" name="op3" value="onion">
            <label for="op3">Onion</label>
            <input type="checkbox" id="op3a" name="op3a" value="half">
            <label for="op3a">Half Pizza</label>
            <input type="checkbox" id="op3b" name="op13" value="all">
            <label for="op3b">All Pizza</label>
        </br>
            <input type="checkbox" id="op4" name="op4" value="doubleChees">
            <label for="op4">Double Cheese</label>
            <input type="checkbox" id="op4a" name="op4a" value="half">
            <label for="op4a">Half Pizza</label>
            <input type="checkbox" id="op4b" name="op4b" value="all">
            <label for="op4b">All Pizza</label>
        </br>
            <input type="checkbox" id="op5" name="op5" value="tuna">
            <label for="op5">Tuna</label>
            <input type="checkbox" id="op5a" name="op5a" value="half">
            <label for="op5a">Half Pizza</label>
            <input type="checkbox" id="op5b" name="op5b" value="all">
            <label for="op5b">All Pizza</label>
        </br>
            <input type="checkbox" id="op1" name="op1" value="olives">
            <label for="op1">Olives</label>
            <input type="checkbox" id="op1a" name="op1a" value="half">
            <label for="op1a">Half Pizza</label>
            <input type="checkbox" id="op1b" name="op1b" value="all">
            <label for="op1b">All Pizza</label>
        </br>
            <input type="checkbox" id="op6" name="op6" value="KoRn">
            <label for="op6">Corn</label>
            <input type="checkbox" id="op6a" name="op6a" value="ha6f">
            <label for="op6a">Half Pizza</label>
            <input type="checkbox" id="op6b" name="op6b" value="all">
            <label for="op6b">All Pizza</label>
        </br>
            <input type="checkbox" id="op7" name="op7" value="pineaple">
            <label for="op7">Pineaple</label>
            <input type="checkbox" id="op7a" name="op7a" value="half">
            <label for="op7a">Half Pizza</label>
            <input type="checkbox" id="op7b" name="op7b" value="all">
            <label for="op7b">All Pizza</label>
        </br>
            <input type="checkbox" id="op8" name="op8" value="chedder">
            <label for="op8">Chedder</label>
            <input type="checkbox" id="op8a" name="op8a" value="half">
            <label for="op8a">Half Pizza</label>
            <input type="checkbox" id="op8b" name="op8b" value="all">
            <label for="op8b">All Pizza</label>
        </br>
            <input type="checkbox" id="op9" name="op9" value="eggplant">
            <label for="op9">Eggplant</label>
            <input type="checkbox" id="op9a" name="op9a" value="half">
            <label for="op9a">Half Pizza</label>
            <input type="checkbox" id="op9b" name="op9b" value="all">
            <label for="op9b">All Pizza</label>
        </br>
            <input type="checkbox" id="op10" name="op10" value="blackolives">
            <label for="op1">Black Olives</label>
            <input type="checkbox" id="op10a" name="op10a" value="half">
            <label for="op10a">Half Pizza</label>
            <input type="checkbox" id="op10b" name="op10b" value="all">
            <label for="op10b">All Pizza</label>
        </br>
        </div>
        <h3>Drinks</h3>
        <div id="drinks">
            <input type="checkbox" id="drink1" name="drink1" value="cocacola">
            <label for="drink1">Coca-Cola</label>
            <input type="checkbox" id="drink2" name="drink2" value="colazero">
            <label for="drink2">Coca-Cola Zero</label>
            <input type="checkbox" id="drink3" name="drink3" value="sprite">
            <label for="drink3">Sprite</label>
            <input type="checkbox" id="drink4" name="drink4" value="fanta">
            <label for="drink4">Fanta</label>
            <input type="checkbox" id="drink5" name="drink5" value="grape">
            <label for="drink5">Grape</label>
            <input type="checkbox" id="drink6" name="drink6" value="orange">
            <label for="drink6">Orange</label>
        </div>
        <input type="submit" value="Submit Order">
    </form>

<?php include '../src/inc/footer.php'; ?>