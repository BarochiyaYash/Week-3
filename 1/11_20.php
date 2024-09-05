<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>



    <header>
        <nav>
            <div class="main-title">
                <h1>Section 11 TO Section 20</h1>
            </div>
        </nav>
    </header>
    <main>
        <section class="border">
            <h2 class="title">Section 11. Advanced Array Operations</h2>
            <div class="content">




                <h4 class="sub">Array_map</h4>
                <div class="content">
                    <?php
                    function myfunction($v)
                    {
                        return ($v * $v);
                    }

                    $a = array(1, 2, 3, 4, 5);
                    print_r(array_map("myfunction", $a));
                    ?>
                </div>




                <h4 class="sub">Array Filter ( print_r(array_filter($a1, "test_odd")); )</h4>
                <div class="content">
                    <?php
                    function test_odd($var)
                    {
                        return ($var & 1);
                    }

                    $a1 = array(1, 3, 2, 3, 4, 1, 3, 1);
                    print_r(array_filter($a1, "test_odd"));
                    ?>
                </div>




                <h4 class="sub">Array Reduce ( print_r(array_reduce($a, "myfunction1")); )</h4>
                <div class="content">
                    <?php
                    function myfunction1($v1, $v2)
                    {
                        return $v1 . "-" . $v2;
                    }
                    $a = array("Dog", "Cat", "Horse");
                    print_r(array_reduce($a, "myfunction1"));
                    ?>
                </div>



            </div>
        </section>





        <section class="border">
            <h2 class="title">Section 12. Organizing PHP files</h2>
            <div class="content">




                <h4 class="sub">Include - include 'nav.php';</h4>
                <div class="content">
                    <?php
                    echo "The include construct allows you to load the code from another file into a file. Here’s the
                    syntax of the include construct:";
                    ?>
                </div>



                <h4 class="sub">Make for Make - include_once 'footer.php'</h4>
                <div class="content">
                    <?php
                    echo "The include_once keyword is used to embed PHP code from another file. If the file is not found, a warning is shown and the program continues to run. If the file was already included previously, this statement will not include it again.";
                    ?>
                </div>





                <h4 class="sub">require - require 'nav.php';</h4>
                <div class="content">
                    <?php
                    echo "require will produce a fatal error (E_COMPILE_ERROR) and stop the script<br><br>";
                    echo "include will only produce a warning (E_WARNING) and the script will continue";
                    ?>
                </div>




                <h4 class="sub">__DIR__</h4>
                <div class="content">
                    <?php
                    echo __DIR__ . "";
                    ?>
                </div>




                <h4 class="sub">Variable Variables <br><br>$my_var = 'title';<br>
                    $$my_var = 'PHP variable variables';<br>
                    echo $title;</h4>
                <div class="content">
                    <?php
                    $my_var = 'title';
                    $$my_var = 'PHP variable variables';

                    echo $title;
                    ?>
                </div>


            </div>
        </section>





        <section class="border">
            <h2 class="title">Section 13. State Management</h2>
            <div class="content">




                <h4 class="sub">Cookies - setcookie(name, value, expire, path, domain, secure, httponly)</h4>
                <div class="content">
                    <?php
                    echo 'setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");' // 86400 = 1 day
                        ?>
                    <br><br>
                    if(!isset($_COOKIE[$cookie_name])) {<br>
                    echo "Cookie named '" . $cookie_name . "' is not set!";<br>
                    } else {<br>
                    echo "Cookie '" . $cookie_name . "' is set!<br>";<br>
                    echo "Value is: " . $_COOKIE[$cookie_name];<br>
                    }<br>
                </div>




                <h4 class="sub">Session</h4>
                <div class="content">
                    session_start();<br>
                    // store scalar value<br>
                    $_SESSION['user'] = 'admin';<br>
                    // store an array<br>
                    $_SESSION['roles'] = ['administrator', 'approver', 'editor'];<br>
                    <br><br>
                    // destroy the session
                    <br>
                    session_destroy();
                </div>





            </div>
        </section>





        <section class="border">
            <h2 class="title">Section 14. Processing Forms</h2>
            <div class="content">




                <h4 class="sub">PHP Form</h4>
                <div class="content">
                    <form action="11_20.php" method="POST">
                        $email_data = $_POST['email'];<br><br>
                        $email_data = $_GET['email'];<br>
                        <button type="submit">Submit</button>
                    </form>
                </div>





                <h4 class="sub">filter_has_var</h4>
                <div class="content">
                    // check the name variable in the post request
                    if (filter_has_var(INPUT_POST, 'name')) {
                    echo 'The name variable exists:' . htmlspecialchars($_POST['name']);
                    } else {
                    echo 'The name is required!';
                    }
                </div>





                <h4 class="sub">filter_var</h4>
                <div class="content">
                    <?php
                    $url = "https://www.example.com/index.php?name=John Doe";
                    $sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
                    echo $sanitized_url;
                    ?>
                </div>










                <h4 class="sub">filter_input</h4>
                <div class="content">
                    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        E-mail: <input type="text" name="email">
                        <input type="submit" name="submit" value="Submit">
                    </form>

                    <?php
                    if (isset($_GET["email"])) {
                        if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
                            echo ("Email is valid");
                        } else {
                            echo ("Email is not valid");
                        }
                    }
                    ?>

                </div>





                <h4 class="sub">Checkbox</h4>
                <div class="content">
                    <br>// sanitize the value
                    <br>$agree = filter_input(INPUT_POST, 'agree', FILTER_SANITIZE_STRING);
                    <br>
                    <br>// check against the valid value
                    <br>if ($agree) {
                    <br>echo 'Thank you for joining us!';
                    <br>} else {
                    <br>$errors['agree'] = 'To join us, you need to agree to the TOS.';
                    <br>}
                </div>





                <h4 class="sub">Multiple Checkboxes</h4>
                <div class="content">

                </div>





                <h4 class="sub">PHP Radio Button</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">
                    <?php

                    $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);

                    ?>

                    <?php if ($color): ?>
                        <p>You selected <span style="color:<?php echo $color ?>"><?php echo $color ?></span></p>
                        <p><a href="index.php">Back to the form</a></p>
                    <?php else: ?>
                        <p>You did not select any color</p>
                    <?php endif ?>
                </div>





                <h4 class="sub">PHP CSRF</h4>
                <div class="content">
                    $_SESSION['token'] = bin2hex(random_bytes(35));<br><br>
                    OUTPUT<br>
                    c4724e490407a1770efcc4ea19776c06e0bd4614a9dd37900f5eb001581dffee9b377a
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                        <header>
                            <h1>Fund Transfer</h1>
                        </header>
                        <div>
                            <label for="amount">Amount (between $1-$5000):</label>
                            <input type="number" name="amount" value="<?= $inputs['amount'] ?? '' ?>" id="amount"
                                placeholder="Enter the transfered amount">
                            <small><?= $errors['amount'] ?? '' ?></small>
                        </div>

                        <div>
                            <label for="recipient_account">Recipient Account:</label>
                            <input type="number" name="recipient_account"
                                value="<?= $inputs['recipient_account'] ?? '' ?>" id="recipient_account"
                                placeholder="Enter the recipient account">
                            <small><?= $errors['recipient_account'] ?? '' ?></small>
                        </div>

                        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
                        <button type="submit">Transfer Now</button>
                    </form>


                    <br>$token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
                    <br>
                    <br>if (!$token || $token !== $_SESSION['token']) {
                    <br>// show an error message
                    <br>echo '<p class="error">Error: invalid form submission</p>';
                    <br>// return 405 http status code
                    <br>header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
                    <br>exit;
                    <br>}
                    <br>
                    <br>// Validate amount
                    <br>$amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_NUMBER_INT);
                    <br>$inputs['amount'] = $amount;
                    <br>
                    <br>if ($amount) {
                    <br>$amount = filter_var(
                    <br>$amount,
                    <br>FILTER_VALIDATE_INT,
                    <br>['options' => ['min_range' => 1, 'max_range' => 5000]]
                    <br>);
                    <br>
                    <br>if (!$amount) {
                    <br>$errors['amount'] = 'Please enter a valid amount (from $1 to $5000)';
                    <br>}
                    <br>} else {
                    <br>$errors['amount'] = 'Please enter the transfered amount.';
                    <br>}
                    <br>
                    <br>// validate account (simple)
                    <br>$recipient_account = filter_input(INPUT_POST, 'recipient_account', FILTER_SANITIZE_NUMBER_INT);
                    <br>
                    <br>$inputs['recipient_account'] = $recipient_account;
                    <br>
                    <br>if ($recipient_account) {
                    <br>$recipient_account = filter_var($recipient_account, FILTER_VALIDATE_INT);
                    <br>
                    <br>if (!$recipient_account) {
                    <br>$errors['recipient_account'] = 'Please enter a valid recipient account';
                    <br>}
                    <br>// validate the recipient account against the database
                    <br>// ...
                    <br>} else {
                    <br>$errors['recipient_account'] = 'Please enter the recipient account.';
                    <br>}
                </div>





                <h4 class="sub">PHP Flash Messages</h4>
                <div class="content">

                </div>





                <h4 class="sub">PHP PRG (Post-Redirect-Get)</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>





                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>




            </div>
        </section>





        <section class="border">
            <h2 class="title">Section 15. Login System ( Understand The Theoretical Concepts )</h2>
            <div class="content">




                <h4 class="sub">Registration Form</h4>
                <div class="content">

                </div>




                <h4 class="sub">Login</h4>
                <div class="content">

                </div>




                <h4 class="sub">Email Verification</h4>
                <div class="content">

                </div>




                <h4 class="sub">Remember Me</h4>
                <div class="content">

                </div>


            </div>
        </section>



        <section class="border">
            <h2 class="title">Section 16. Working with Files</h2>
            <div class="content">




                <h4 class="sub">PHP Open File</h4>
                <div class="content">


                    <br>$filename = 'readme.txt';
                    <br>
                    <br>if (!file_exists($filename)) {
                    <br> die("The file $filename does not exist.");
                    <br>}
                    <br>
                    <br>$f = fopen($filename, 'r');
                    <br>if ($f) {
                    <br> // process the file
                    <br> // ...
                    <br> echo 'The file ' . $filename . ' is open';
                    <br> fclose($f);
                    <br>}

                </div>





                <h4 class="sub">PHP File Exists</h4>
                <div class="content">

                </div>





                <h4 class="sub">Registration Form</h4>
                <div class="content">

                </div>




            </div>
        </section>




        <section class="border">
            <h2 class="title">Section 15. Login System ( Understand The Theoretical Concepts )</h2>
            <div class="content">




                <h4 class="sub">Registration Form</h4>
                <div class="content">

                </div>





                <h4 class="sub">Registration Form</h4>
                <div class="content">

                </div>





                <h4 class="sub">Registration Form</h4>
                <div class="content">

                </div>




            </div>
        </section>






        <section class="border">
            <h2 class="title">Section 18. String operations</h2>
            <div class="content">




                <h4 class="sub">PHP strlen</h4>
                <div class="content">
                    <?php
                    $messages = "This is M!";
                    echo "$messages = ";
                    echo strlen($messages);
                    ?>
                </div>





                <h4 class="sub">PHP substr</h4>
                <div class="content">
                    <?php
                    $sub_message = "THIS IS MAKE FOR YOU!";
                    echo $sub_message . "<br><br>";
                    echo 'substr($sub_message, 0, 7) - - - ' . substr($sub_message, 0, 7);
                    echo "<br><br>";
                    echo 'substr($sub_message, 5, 7) - - - ' . substr($sub_message, 5, 7);
                    echo "<br><br>";
                    echo 'substr($sub_message, 5) - - - ' . substr($sub_message, 5);
                    echo "<br><br>";
                    echo 'substr($sub_message, -5) - - - ' . substr($sub_message, -5);
                    echo "<br><br>";
                    echo 'substr($sub_message, -7,-5) - - - ' . substr($sub_message, -7, -5);
                    ?>
                </div>





                <h4 class="sub">PHP strpos</h4>
                <div class="content">
                    <?php
                    $str = 'To do or not to do';
                    echo $str . "<br><br>";
                    $position = strpos($str, 'do', 4);

                    echo $position;
                    ?>
                </div>







                <h4 class="sub">PHP str_replace</h4>
                <div class="content">
                    <?php
                    $str = 'Hi, hi, hi';
                    $new_str = str_replace('hi', 'bye', $str, $count);

                    echo $count; // 2 
                    ?>
                </div>







                <h4 class="sub">PHP implode</h4>
                <div class="content">
                    <?PHP


                    $columns = ['first_name', 'last_name', 'email'];
                    $header = implode(', ', $columns);

                    echo $header;

                    ?>
                </div>







                <h4 class="sub">php explode</h4>
                <div class="content">
                    <?php
                    $str = 'first_name,last_name,email,phone';
                    $headers = explode(',', $str);

                    print_r($headers);
                    ?>
                </div>








                <h4 class="sub">PHP trim</h4>
                <div class="content">
                    <?php
                    $str = ' PHP  ';
                    $new_str = trim($str);

                    var_dump($new_str);
                    ?>
                </div>








                <h4 class="sub">PHP ltrim</h4>
                <div class="content">

                </div>








                <h4 class="sub">Registration Form</h4>
                <div class="content">

                </div>




            </div>
        </section>


    </main>

</body>

</html>