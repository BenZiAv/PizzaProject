<?php include '/xampp/htdocs/PizzaProject/htmlPizza/header.php'; ?>

<body>
    <header id="header">
      
    </header>
    <div class="top"><a href="#header" class="a1">^</a></div>

<div class="main-conteiner">
    <nav>
        <ul><a href="#deals"><i>Hot deals</i></a></ul>
        <ul><a href="#pizza"><i>Pizza</i></a></ul>
        <ul><a href="#drinks"><i>Drinks</i></a></ul>
        <ul><a href="#Additives"><i>Additives</i></a></ul>
        <ul><a href="C:\xampp\htdocs\PizzaProject\htmlPizza\main.php"><i>My orders</i></a></ul>
    </nav>
    <main>
       
        <div id="deals">
            <div class="deal-conteiner">
                <a href="#popupDeal">
                <h2>Family</h2>
                <div><img class="deal-foto"  src="../res/deal-familyjpg.jpg" alt="family"></div>
                <p>120ש"ח<br>two large pizza with cola + 2 Additives</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDeal">
                <h2>Big Israel</h2>
                <div><img class="deal-foto" src="../res/deal1.jpg" alt="bigIsrael"></div>
                <p>180ש"ח<br>two Huge pizza with 2 cola + 4 Additives</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDeal">
                <h2>personal</h2>
                <div><img class="deal-foto" src="../res/isheet.jpg" alt="isheet"></div>
                <p>45ש"ח<br>one small pizza with cola 0.5l + 1 Additive</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDeal">
                <h2>corparation Deal</h2>
                <div><img class="deal-foto" src="../res/corparative.jpg" alt="corporative"></div>
                <p>200ש"ח<br>tree large pizza with cola + 6 Additives</p></a>
            </div>
        </div>
        <h2>Create your pizza</h2>
        <div id="pizza">
            <div class="deal-conteiner">
                <a href="#popupPizza">
                <h2>Huge</h2>
                <div><img class="pizza-foto" src="../res/pizzaH.jpg" alt="pizzaH"></div>
                <p>70ש"ח</p></a>
            </div>

            <div class="deal-conteiner">
                <a href="#popupPizza">
                <h2>Large</h2>
                <div><img class="pizza-foto" src="../res/pizzaL.jpg" alt="pizzaL"></div>
                <p>50ש"ח</p></a>
            </div>

            <div class="deal-conteiner">
                <a href="#popupPizza">
                <h2>personal</h2>
                <div><img class="pizza-foto" src="../res/isheet2.jpg" alt="pizzaP"></div>
                <p>35ש"ח</p></a>
            </div>
        </div>
        <div id="drinks">
            <div class="deal-conteiner">
                <a href="#popupDrinks">
                <h2>Cola</h2>
                <div><img class="Drink-foto" src="../res/cola.jpg" alt="cola"></div>
                <p>12ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDrinks">
                <h2>Sprite</h2>
                <div><img class="Drink-foto" src="../res/sprite.jpg" alt="sprite"></div>
                <p>12ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDrinks">
                <h2>Juce</h2>
                <div><img class="Drink-foto" src="../res/juce.jpg" alt="juce"></div>
                <p>10ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDrinks">
                <h2>Fanta</h2>
                <div><img class="Drink-foto" src="../res/isheet2.jpg" alt="pizzaP"></div>
                <p>12ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupDrinks">
                <h2>Nestea</h2>
                <div><img class="Drink-foto" src="../res/nestea.jpg" alt="nestea"></div>
                <p>9ש"ח</p></a>
            </div>
        </div>
        <div id="Additives">
            <div class="deal-conteiner">
                <a href="#popupAdditives">
                <h2>mushrooms</h2>
                <div><img class="Additives-foto" src="../res/mushrooms.jpg" alt="mushrooms"></div>
                <p>5ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupAdditives">
                <h2>onion</h2>
                <div><img class="Additives-foto" src="../res/onion.jpg" alt="onion"></div>
                <p>5ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupAdditives">
                <h2>tuna</h2>
                <div><img class="Additives-foto" src="../res/tuna.jpg" alt="tuna"></div>
                <p>5ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupAdditives">
                <h2>bulgarit</h2>
                <div><img class="Additives-foto" src="../res/bulgarit.jpg" alt="bulgarit"></div>
                <p>5ש"ח</p></a>
            </div>
            <div class="deal-conteiner">
                <a href="#popupAdditives">
                <h2>tomatto</h2>
                <div><img class="Additives-foto" src="../res/tomatto.jpg" alt="tomatto"></div>
                <p>5ש"ח</p></a>
            </div>
        </div>
    </main>
</div>

    <footer>
        <?php include '/xampp/htdocs/PizzaProject/htmlPizza/footer.php'; ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="pizza.js"></script>
</body>
<div id="popupDeal" class="popup">
    <a href="#deals" class="popup_area"></a>
    <div class="popur_body">
        <div class="popup_content">
            <a href="#header" class="popup_close">x</a>
            <button class="btn-popup" type="submit" onclick="">add to orders</button>
        </div>
    </div>
</div>

</html>