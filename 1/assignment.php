<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>

<body>
    <p>
    <h1>Assignment:</h1>
    <h3>1. Generates a multiplication table using loops.</h3>
    </p>





    <form action="" method="POST">
        <input type="text" name="table_need" />

        <button type="submit" name="submit_ok">Submit</button>
    </form>
    <br>
    <br>

    <?php
    //Check Submit Click
    if (isset($_POST['submit_ok'])) {
        //Check value is not Empty
        if (!($_POST['table_need']) == "") {
            $table_make = (int) $_POST['table_need'];

            //Check is Positive Only
            if ($table_make > 0) {
                for ($i = 1; $i <= 10; $i++) {
                    echo "$table_make * " . "$i = " . ($table_make * $i) . "<br><br>";
                }
            }
            //Check Number is Not a Nagative
            elseif ($table_make < 0) {
                echo "Please Enter Positive Number Only!!";
            }

        }
        //Check value is not Zero
        elseif ($_POST['table_need'] == "0") {
            echo "Please Do Not Enter Zero. Enter Positive Number Only!!";
        } else {
            echo 'Please Enter Number in Text Box!!';
        }
    }
    ?>

    <p>
    <h3>2. Checks if a number is even or odd using conditional statements.</h3>

    <form action="" method="POST">
        <input type="text" name="number_check" />
        <button type="submit" name="submit_check">Submit</button>
    </form>
    <br>
    <br>
    <?php
    //Check Submit Click
    if (isset($_POST["submit_check"])) {

        //Check Value is not Empty
        if ($_POST["number_check"] != "") {
            $number_check_var = (int) $_POST["number_check"];

            if ($number_check_var < 0) {
                echo "$number_check_var is Negative Number.";
            } elseif ($number_check_var > 0) {
                echo "$number_check_var is Positive Number.";
            } else {
                echo "$number_check_var is Zero.";
            }
        } else {
            echo "Please Enter Number in Text Box!!";
        }
    }
    ?>
    </p>
</body>

</html>