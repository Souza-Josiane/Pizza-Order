    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Pizza Nossa</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

            <meta name="description" content="A concise and accurate summary of the document content is to appear here">
            <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
        </head>
        <body>

            <!--Title of the page-->
            <header>
                <?php
                include('globalHeader.php');
                ?>
            </header>

            <!--Main content with section-->
            <main>
                <section>
                    <!--Form to order pizza-->
                    <form id="area" method="post" class="orderPizzaNossa">

                        <!--Date of the order-->
                        <fieldset>
                            <div id="date-field">
                                <?php
                                    date_default_timezone_set('America/Toronto');
                                    $now = new DateTime('now'); //Current moment
                                    $CurrentDate = $now->format('Y-m-d');
                                ?>
                                <input type="date" name="daydate" value="<?php echo $CurrentDate; ?>" min="<?php echo $CurrentDate; ?>" max="<?php echo $CurrentDate; ?>" id="date">
                            </div>
                        </fieldset>

                        <!--Content of the order - <fieldset> with legend-->
                        <fieldset>
                            <legend>
                                Your Order
                            </legend>

                            <!--Kind of pizza - Whole or slice-->
                            <div id="wholeSlicePizza">
                                <input type="radio" name="wholeSlicePizza" id="wholePizza" value="Whole Pizza" checked>
                                <label for="wholePizza">Whole Pizza</label>

                                <input type="radio" name="wholeSlicePizza" id="slicePizza" value="Slice">
                                <label for="slicePizza">Slice</label>

                                <figure>
                                    <img src="images/menu-pizza.png" width="110" alt="Menu-pizza">
                                </figure>
                            </div>

                            <!--Number of pizzas-->
                            <div>
                                <label for="numberPizza">Number of Pizza or slice:</label>
                                <input type="number" name="numberPizza" id="numberPizza" min="1" max="30" required>

                                <label for="shape">Shape:</label>
                                <input type="text" name="shape" id="shape" placeholder="Square, round or slice">

                                <label for="size-select">Size:</label>
                                <select name="size" id="size-select">
                                    <option value="">--Please choose an option--</option>
                                    <option value="small">Small</option>
                                    <option value="medio">Medio</option>
                                    <option value="large">Large</option>
                                    <option value="slice">Slice</option>
                                </select>
                            </div>

                            <!--Toppings available-->
                            <br>
                            <div>
                                <label name="toppingsPizza">Toppings:</label>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Pepperoni" id="pepperoni" checked>
                                    <label for="pepperoni">Pepperoni</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Mushrroms" id="mushrroms">
                                    <label for="mushrroms">Mushrroms</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Magherita" id="magherita">
                                    <label for="magherita">Magherita</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Onions" id="onions">
                                    <label for="onions">Onions</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Cheese" id="cheese">
                                    <label for="cheese">Cheese</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Tomato" id="tomato">
                                    <label for="tomato">Tomato</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="toppings[]" value="Mozzarella" id="mozzarella">
                                    <label for="mozzarella">Mozzarella</label>
                                </div>
                            </div>

                            <!--Style Crust-->
                            <br>
                            <div>
                                <label name="styleCrustPizza">Style Crust:</label>
                                <div>
                                    <input type="checkbox" name="styleCrust[]" id="deepDish" value="Deep dish" checked>
                                    <label for="deepDish">Deep dish</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="styleCrust[]" id="thickCrust" value="Thick crust">
                                    <label for="thickCrust">Thick crust</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="styleCrust[]" id="thinCrust" value="Thin crust">
                                    <label for="thinCrust">Thin crust</label>
                                </div>
                            </div>

                            <!--How the customer wants to receiv the order-->
                            <br>
                            <div>
                                <div name="typeDeliveryPizza">
                                    <input type="radio" name="typeDelivery[]" id="takeOut" value="Take out" checked>
                                    <label for="takeOut">Take out</label>

                                    <input type="radio" name="typeDelivery[]" id="delivery" value="Delivery">
                                    <label for="delivery">Delivery</label>

                                    <input type="radio" name="typeDelivery[]" id="eat-in" value="Eat in">
                                    <label for="eat-in">Eat in</label>
                                </div>
                            </div>

                        </fieldset>

                        <!--Personal information-->
                        <fieldset>
                            <legend>Your Details</legend>
                            <div name="customerDetailsPizza">
                                <div>
                                    <label for="fName">First name:</label>
                                    <input type="text" name="fName" size="20" id="fName" placeholder="First name" required>
                                    
                                    <label for="lName">Last name:</label>
                                    <input type="text" name="lName" size="20" id="lName" placeholder="Last name" required>
                                </div>

                                <br>
                                <div>
                                    <label for="phone">Phone number:</label>
                                    <input type="tel" name="pnumber" id="phone" placeholder="(999)999-9999" required>
                                </div>

                                <br>
                                <div>
                                    <label for="address">Address:</label>
                                    <input type="text" name="c_address" id="address" size="25" placeholder="#, St. and postal code">
                                </div>
                            </div>
                        </fieldset>

                        <!--Textarea for additional information and button to submit the order or reset-->
                        <fieldset>
                            <legend>Additional</legend>
                            <textarea name="additional" id="additional" cols="60" rows="10"></textarea>
                        </fieldset>
                        <div class="button-submit-reset">
                            <button name="submit" type="submit" id="submit">Submit</button>
                            <button name="reset" type="reset" id="reset">Reset</button>
                        </div>
                    </form>

                    <div class="submit-message">
                        <?php
                            require_once('database.php');

                            if(!empty($_POST)){
                                $daydate = $_POST['daydate'];
                                $wholeSlicePizza = $_POST['wholeSlicePizza'];
                                $numberPizza = $_POST['numberPizza'];
                                $shape = $_POST['shape'];
                                $size = $_POST['size'];

                                //$toppings = $_POST['toppings'];
                                //Checks if the 'toppings' field is defined in $_POST
                                if (isset($_POST['toppings'])) {
                                    $allToppings = $_POST['toppings'];
                                    //Converts the array to a string if necessary.
                                    $toppings = implode(", ", $allToppings);
                                } else {
                                    echo "No toppings selected.";
                                }
                                
                                //$styleCrust = $_POST['styleCrust'];
                                //Checks if the 'styleCrust' field is defined in $_POST
                                if (isset($_POST['styleCrust'])) {
                                    $allStyleCrust = $_POST['styleCrust'];
                                    //Converts the array to a string if necessary.
                                    $styleCrust = implode($allStyleCrust);
                                } else {
                                    echo "No style crust selected.";
                                }

                                $typeDelivery = $_POST['typeDelivery'];

                                //$typeDelivery = $_POST['typeDelivery'];
                                //Checks if the 'typeDelivery' field is defined in $_POST
                                if (isset($_POST['typeDelivery'])) {
                                    $allTypeDelivery = $_POST['typeDelivery'];
                                    //Converts the array to a string if necessary.
                                    $typeDelivery = implode($allTypeDelivery);
                                } else {
                                    echo "No type of delivery selected.";
                                }

                                $fname = $_POST['fName'];
                                $lname = $_POST['lName'];
                                $pnumber = $_POST['pnumber'];
                                $c_address = $_POST['c_address'];                                
                                $additional = $_POST['additional'];

                                $queryResult = $connectionOperation-> registerOrder ($daydate, $wholeSlicePizza, $numberPizza, $shape, $size, $toppings, $styleCrust, $typeDelivery, $fname, $lname, $pnumber, $c_address, $additional);
                                if($queryResult){
                                    echo "<p>Successfully inserted data</p>";
                                }else{
                                    echo "<p>Failed to insert data</p>";
                                }
                            }
                        ?>
                    </div>
                </section>
            </main>

            <!--Footer where the copyright is placed-->
            <footer>
                <?php
                include('globalFooter.php');
                ?>
            </footer>
            <script src="js/script.js"></script>
        </body>
    </html>