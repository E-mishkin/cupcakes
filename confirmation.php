<?php
    /**
     * Author: Evgenii Mishkin
     * Date: 01/13/2020
     * URL: http://emishkin.greenriverdev.com/328/cupcakes/confirmation.php
     * Description: This is a cupcakes.php confirmation page.
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

    <title>Cupcakes confirmation file</title>
</head>
<body>

    <div class="form-group m-5">

        <?php
            //field
            $name = $_POST['name'];

            //Validate the data
            $isValid = true;

            //Validate name field
            if (!empty($_POST['name'])) {

            } else {
                echo "<p class='text-danger'>Name is required</p>";
                $isValid = false;
            }

            //Validate flavor field
            $cupcakesArray = array("grasshopper", "whiskey", "carrot", "salted", "red", "lemon", "tiramisu");
            if (isset($_POST['cupcakes'])) {
                if (in_array($_POST['cupcakes'], $cupcakesArray)) {

                }
            } else {
                echo "<p class='text-danger'>Please check any cupcake</p>";
                $isValid = false;
            }

            //Print conformation if data is valid
            if ($isValid) {
                echo "<p class='mb-2'>Thank you, $name, for your order!</p><br>";
                echo "<p>Order Summary:";
                echo "<ul>";
                $cupcakes = $_POST['cupcakes'];
                $sum = 0;
                foreach ($cupcakes as $cupcake) {
                    echo "<li>".$cupcake."</li>";
                    $sum++;
                }
                echo "</ul>";
                $finalPrice = $sum * 3.50;
                $finalPriceFloat = number_format((float)$finalPrice, 2, '.', '');

                echo "<p>Order Total: $$finalPriceFloat";
            }
        ?>

    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
