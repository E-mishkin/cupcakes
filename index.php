<?php
    /**
     * Author: Evgenii Mishkin
     * Date: 01/13/2020
     * URL: http://emishkin.greenriverdev.com/328/cupcakes/index.php
     * Description: An index page containing an order form with the user’s name,
     * a list of checkboxes for the various cupcake options, and an Order button.
     */

    // Turn on error reporting - this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cupcakes</title>
</head>
<body>

    <form id="cupcakes-form" action="confirmation.php" method="post">

        <div class="container">
            <div class="form-group">
                <h1>Cupcake Fundraiser</h1>
                <label for="city">Your name: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Please input your name.">
            </div>

            <!-- Flavor checkboxes -->
            <div class="form-group">
                <p>Cupcake flavors:</p>
                <div class="form-check">

                    <?php
                        $cupcakes = array("grasshopper"=>"The Grasshopper", "whiskey"=>"Whiskey Maple Bacon",
                            "carrot"=>"Carrot Walnut", "salted"=>"Salted Caramel Cupcake", "red"=>"Red Velvet",
                            "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

                        foreach ($cupcakes as $key=>$text) {
                            echo "<input class=\"form-check-input\" type=\"checkbox\" value='$text' name=\"cupcakes[]\">";
                            echo "<label class=\"form-check-label\" for='$key'>$text</label><br>";
                        }
                    ?>

                </div>
            </div>

            <button id="submit" type="submit" class="btn btn-primary">Order</button>
        </div>
    </form>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>