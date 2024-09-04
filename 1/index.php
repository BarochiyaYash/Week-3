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
                <h1>PHP Basic</h1>
            </div>
        </nav>
    </header>

    <main>
        <section class="border">
            <h2 class="title">echo</h2>
            <div class="content">
                <?php
                echo "First PHP Script!";
                echo "<br>";
                echo "<br>";
                echo "PHP Version : ";
                echo phpversion();
                ?>

            </div>
        </section>




        <section class="border">
            <h2 class="title">Case Sensitivity</h2>
            <div class="content">
                <?php
                echo "ECHO";
                echo "<br>";
                echo "<br>";
                echo "ECHo";
                echo "<br>";
                echo "<br>";
                echo "However; all variable names are case-sensitive!"
                    ?>
            </div>
        </section>







        <section class="border">
            <h2 class="title">PHP Comments</h2>
            <div class="content">
                <?php
                echo "// This is a single-line comment";
                echo "<br>";
                echo "<br>";
                echo "# This is also a single-line comment";
                echo "<br>";
                echo "<br>";
                echo "/* This is a <br> multi-line comment */";
                ?>
            </div>
        </section>






        <section class="border">
            <h2 class="title">Creating (Declaring) PHP Variables</h2>
            <div class="content">
                <?php
                $a = 11;
                $b = 22;
                echo "$a + $b = ";
                echo ($a + $b);


                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";


                $a = 6;
                $b = 1.12;
                $c = ("Jone");
                $d = (true);
                $e = ([13, 52, 73, 14, 85, 16]);
                $f = (null);
                $g = $h = 11.23;

                echo var_dump($a);
                echo "<br>";
                echo "<br>";
                echo var_dump($b);
                echo "<br>";
                echo "<br>";
                echo var_dump($c);
                echo "<br>";
                echo "<br>";
                echo var_dump($d);
                echo "<br>";
                echo "<br>";
                echo var_dump($e);
                echo "<br>";
                echo "<br>";
                echo var_dump($f);
                echo "<br>";
                echo "<br>";
                echo var_dump($g);
                echo "<br>";
                echo "<br>";
                echo var_dump($h);
                ?>
            </div>
        </section>






        <section class="border">
            <h2 class="title">PHP Variables Scope</h2>
            <div class="content">
                <h4 class="sub">GLOBAL SCOPE</h4>
                <div class="content">
                    <?php
                    $global_a = "This is a Global Var";

                    function testGlobal()
                    {
                        echo ($global_a);
                    }
                    testGlobal();
                    echo "<br>";
                    echo "<br>";
                    echo $global_a;
                    ?>
                </div>

                <h4 class="sub">LOCAL SCOPE</h4>
                <div class="content">
                    <?php

                    $global_a = "I am Global Var";

                    function testLocal()
                    {
                        $local_b = "I am Local Var";
                        echo $local_b;
                    }
                    testLocal();
                    echo "<br>";
                    echo "<br>";
                    echo $global_a;
                    echo "<br>";
                    echo "<br>";
                    echo $local_b;

                    ?>
                </div>
                <h4 class="sub">Global Keyword</h4>
                <div class="content">
                    <?php
                    $x = 44;
                    $y = 22;
                    $z = 33;
                    function global_key()
                    {
                        global $x, $y, $z;
                        echo ($x . $y);
                        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                    }
                    echo $z;
                    echo " ______ Print var z";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    global_key();
                    echo " ______ Call Function";
                    echo "<br>";
                    echo "<br>";
                    echo $z;
                    echo " ______ Print z After add x y in Function usong $ GLOBALS";
                    echo "<br>";
                    echo "<br>";
                    echo "The global keyword is used to access a global variable from within a function.";
                    ?>
                </div>

                <h4 class="sub">static Keyword</h4>
                <div class="content">
                    <?php
                    function static_key_test()
                    {
                        static $x = 0;
                        echo $x;
                        $x++;
                    }
                    static_key_test();
                    echo " ______ Call 1 static_key_test()";
                    echo "<br>";
                    echo "<br>";
                    static_key_test();
                    echo " ______ Call 2 static_key_test()";
                    echo "<br>";
                    echo "<br>";
                    static_key_test();
                    echo " ______ Call 3 static_key_test()";
                    echo "<br>";
                    echo "<br>";
                    static_key_test();
                    echo " ______ Call 4 static_key_test()";
                    ?>
                </div>
            </div>
        </section>






        <section class="border">
            <h2 class="title">PHP echo and print Statements</h2>
            <div class="content">
                <h4 class="sub">echo Statement</h4>
                <div class="content">
                    <?php
                    echo "<h2>This is H2 in side echo </h2><br><br>";
                    echo "<del>Hey i am del in side echo</del><br><br>";
                    echo "Hey", " I am", " New,,<br><br>";
                    $txt1 = "Learn PHP";
                    echo "<p>Study PHP at $txt1</p><br><br>";
                    echo "Hey" . " I am" . " New...<br><br>";
                    print ("<h2>I am From print()</h2><br><br>");
                    print "<i>I am</i> " . "From" . " print()......";
                    ?>
                </div>
            </div>
        </section>






        <section class="border">
            <h2 class="title">PHP Strings</h2>
            <div class="content">
                <div class="sub">Double or Single Quotes?</div>
                <div class="content">
                    <?php
                    $quotes_check = "I check Quotes";
                    echo "Double Quotes $quotes_check<br><br>";
                    echo 'Single Quotes $quotes_check';
                    ?>
                </div>
                <h4 class="sub">String Length</h4>
                <div class="content">
                    <?php
                    echo strlen("Hello world!");
                    echo " ______ strlen('Hello world!')";
                    ?>
                </div>

                <h4 class="sub">Word Count</h4>
                <div class="content">
                    <?php
                    echo str_word_count("Hello world!");
                    echo " ______ str_word_count('Hello world!')";
                    ?>
                </div>

                <h4 class="sub">Search For Text Within a String</h4>
                <div class="content">
                    <?php
                    echo strpos("Hello world!", "world");
                    echo " ______ strpos('Hello world!', 'world') INDEX[]";
                    ?>
                </div>


                <h4 class="sub">Upper Case</h4>
                <div class="content">
                    <?php
                    $x = "Hello World!";
                    echo strtoupper($x);
                    echo ' ______ strtoupper($x)';
                    ?>
                </div>


                <h4 class="sub">Lower Case</h4>
                <div class="content">
                    <?php
                    $x = "Hello World!";
                    echo strtolower($x);
                    echo ' ______ strtolower($x)';
                    ?>
                </div>


                <h4 class="sub">Replace String</h4>
                <div class="content">
                    <?php
                    $x = "Hello World!";
                    echo str_replace("World", "Dolly", $x);
                    echo ' ______ str_replace("World", "Dolly", $x)';
                    ?>
                </div>


                <h4 class="sub">Reverse a String</h4>
                <div class="content">
                    <?php
                    $x = "Hello World!";
                    echo strrev($x);
                    echo ' ______ strrev($x)';
                    ?>
                </div>


                <h4 class="sub">Remove Whitespace</h4>
                <div class="content">
                    <?php
                    $x = " Hello World! ";
                    echo trim($x);
                    echo ' ______ $x = " Hello World! " ______ echo trim($x)';
                    ?>
                    ?>
                </div>


                <h4 class="sub">Convert String into Array</h4>
                <div class="content">
                    <?php
                    $x = "Hello World!";
                    $y = explode(" ", $x);

                    print_r($y);

                    echo ' ______ $x = "Hello World!" ______ $y = explode(" ", $x) ______ print_r($y)';
                    ?>
                </div>



                <h4 class="sub">PHP - Slicing Strings</h4>
                <div class="content">
                    <?php
                    $x = "Hello World!";
                    echo ' ______ $x = "Hello World!"<br><br>';
                    echo substr($x, 6, 5);
                    echo ' ______ substr($x, 6, 5)<br><br>';
                    echo substr($x, 6);
                    echo ' ______ substr($x, 6)<br><br>';
                    echo substr($x, -5, 3);
                    echo ' ______ substr($x, -5, 3)<br><br><br><br>';
                    $x = "Hi, how are you?";
                    echo ' ______ $x = "Hi, how are you?"<br><br>';
                    echo substr($x, 5, -3);
                    echo ' ______ substr($x, 5, -3)<br><br>';

                    ?>
                </div>




                <h4 class="sub">Escape Character</h4>
                <div class="content">
                    <?php
                    $x = "We are the so-called \"Vikings\" from the north.";
                    echo $x;
                    echo ' _____ $x = "We are the so-called \"Vikings\" from the north." ______ echo $x;';

                    ?>
                </div>




            </div>
        </section>








        <section class="border">
            <h2 class="title">PHP Numbers</h2>
            <div class="content">
                <h4 class="sub">PHP Integers</h4>
                <div class="content">
                    <?php
                    $x = 5985;
                    echo $x . " = ";
                    var_dump(is_int($x));

                    echo "<br>";

                    // Check again... 
                    $x = 59.85;
                    var_dump(is_int($x));
                    echo " ______ " . $x;

                    ?>
                </div>




                <h4 class="sub">PHP Floats</h4>
                <div class="content">
                    <?php
                    $x = 10.365;
                    var_dump(is_float($x));
                    echo " ______ " . $x;

                    ?>
                </div>




                <h4 class="sub">PHP Infinity</h4>
                <div class="content">
                    <?php
                    $x = 1.9e411;
                    var_dump($x);
                    echo ' ______ $x = 1.9e411';

                    ?>
                </div>



                <h4 class="sub">PHP NaN</h4>
                <div class="content">
                    <?php
                    $x = acos(8);
                    var_dump($x);
                    echo ' ______ $x = acos(8)';

                    ?>
                </div>





                <h4 class="sub">PHP Numerical Strings</h4>
                <div class="content">
                    <?php
                    $x = 5985;
                    var_dump(is_numeric($x));
                    echo ' ______ $x = 5985;';
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';


                    $x = "5985";
                    var_dump(is_numeric($x));
                    echo ' _____ $x = "5985";';
                    echo '<br>';
                    echo '<br>';
                    echo '<br>'

                    ;

                    $x = "59.85" + 100;
                    var_dump(is_numeric($x));
                    echo ' _____ $x = "59.85" + 100;';
                    echo '<br>';
                    echo '<br>';
                    echo '<br>'

                    ;

                    $x = "Hello";
                    var_dump(is_numeric($x));
                    echo ' ______ $x = "Hello";';
                    ?>
                </div>




                <h4 class="sub">PHP Casting</h4>
                <div class="content">




                    <h4 class="sub">Cast to String</h4>
                    <div class="content">
                        <?php
                        $a = 5;       // Integer
                        $b = 5.34;    // Float
                        $c = "25 kilometers"; // String
                        $d = "kilometers 25"; // String
                        $e = "hello"; // String
                        $f = true;    // Boolean
                        $g = NULL;    // NULL
                        
                        echo "<h2>Values</h2>";
                        echo "<br><br>";
                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";

                        # String_______________________________
                        echo '<h2>$a = (string) $a</h2>';
                        echo "<br><br>";
                        $a = (string) $a;
                        $b = (string) $b;
                        $c = (string) $c;
                        $d = (string) $d;
                        $e = (string) $e;
                        $f = (string) $f;
                        $g = (string) $g;


                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";


                        # int_______________________________
                        echo '<h2>$a = (int) $a</h2>';
                        echo "<br><br>";
                        $a = (int) $a;
                        $b = (int) $b;
                        $c = (int) $c;
                        $d = (int) $d;
                        $e = (int) $e;
                        $f = (int) $f;
                        $g = (int) $g;


                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";

                        # float_______________________________
                        echo '<h2>$a = (float) $a</h2>';
                        echo "<br><br>";
                        $a = (float) $a;
                        $b = (float) $b;
                        $c = (float) $c;
                        $d = (float) $d;
                        $e = (float) $e;
                        $f = (float) $f;
                        $g = (float) $g;


                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";

                        # bool_______________________________
                        echo '<h2>$a = (bool) $a</h2>';
                        echo "<br><br>";
                        $a = (bool) $a;
                        $b = (bool) $b;
                        $c = (bool) $c;
                        $d = (bool) $d;
                        $e = (bool) $e;
                        $f = (bool) $f;
                        $g = (bool) $g;


                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";

                        # array_______________________________
                        echo '<h2>$a = (array) $a</h2>';
                        echo "<br><br>";
                        $a = (array) $a;
                        $b = (array) $b;
                        $c = (array) $c;
                        $d = (array) $d;
                        $e = (array) $e;
                        $f = (array) $f;
                        $g = (array) $g;


                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";


                        # object_______________________________
                        echo '<h2>$a = (object) $a</h2>';
                        echo "<br><br>";
                        $a = (object) $a;
                        $b = (object) $b;
                        $c = (object) $c;
                        $d = (object) $d;
                        $e = (object) $e;
                        $f = (object) $f;
                        $g = (object) $g;


                        var_dump($a);
                        echo "<br><br>";
                        var_dump($b);
                        echo "<br><br>";
                        var_dump($c);
                        echo "<br><br>";
                        var_dump($d);
                        echo "<br><br>";
                        var_dump($e);
                        echo "<br><br>";
                        var_dump($f);
                        echo "<br><br>";
                        var_dump($g);
                        echo "<br><br>";
                        echo "<br><br>";
                        echo "<br><br>";


                        # unset_______________________________
                        echo '<h2>$a = (unset) $a</h2>';
                        echo "<br><br>";
                        echo "'(unset)' is deprecated since PHP 7.2PHP(PHP6403)";

                        ?>
                    </div>





                    <h4 class="sub">PHP Math</h4>
                    <div class="content">


                        <h4 class="sub">PHP pi() Function</h4>
                        <div class="content">
                            <?php
                            echo (pi());
                            echo ' ______ echo (pi())';
                            ?>
                        </div>





                        <h4 class="sub">PHP min() and max() Functions</h4>
                        <div class="content">
                            <?php

                            echo (min(0, 150, 30, 20, -8, -200));
                            echo ' ______ echo (min(0, 150, 30, 20, -8, -200));<br><br>';
                            echo (max(0, 150, 30, 20, -8, -200));
                            echo ' ______ echo (max(0, 150, 30, 20, -8, -200));<br><br>';
                            ?>
                        </div>





                        <h4 class="sub">PHP abs() Function</h4>
                        <div class="content">
                            <?php

                            echo (abs(-6.7));
                            echo ' ______ echo(abs(-6.7));';
                            ?>
                        </div>





                        <h4 class="sub">PHP sqrt() Function</h4>
                        <div class="content">
                            <?php

                            echo (sqrt(64));
                            echo ' ______ echo(sqrt(64));';
                            ?>
                        </div>

                    </div>






                    <h4 class="sub">PHP round() Function</h4>
                    <div class="content">
                        <?php
                        echo (round(0.60));
                        echo ' ______ echo(round(0.60));<br><br>';
                        echo (round(0.49));
                        echo ' ______ echo(round(0.49));';

                        ?>
                    </div>






                    <h4 class="sub">Random Numbers</h4>
                    <div class="content">
                        <?php
                        echo (rand());
                        echo ' ______ echo(rand());<br><br>';
                        echo (rand(10, 100));
                        echo ' ______ echo(rand(10, 100));';

                        ?>
                    </div>




                </div>
            </div>
        </section>








        <section class="border">
            <h2 class="title">PHP Constants</h2>
            <div class="content">




                <h4 class="sub">Create a PHP Constant define()</h4>
                <div class="content">
                    <?php
                    define("GREETING", "Welcome define() <- constant value");
                    echo GREETING;
                    echo ' _______ define("GREETING", "Welcome to W3Schools.com!");<br><br>';
                    define("cars", [
                        "Alfa Romeo",
                        "BMW",
                        "Toyota"
                    ]);
                    echo cars[0];
                    echo '<br><br> ______ define("cars", [<br>
                        "Alfa Romeo",<br>
                        "BMW",<br>
                        "Toyota"<br>
                    ]);';
                    ?>
                </div>






                <h4 class="sub">Magic Constants</h4>
                <div class="content">
                    <?php
                    echo __DIR__ . '<br><br>';
                    echo __FILE__ . '<br><br>';
                    function myValue()
                    {
                        return __FUNCTION__;
                    }
                    echo myValue();

                    echo ' ______ Function Name  <br><br>';
                    echo __LINE__ . ' ______ Line Number of Code <br><br>';
                    ?>
                </div>







            </div>
        </section>








        <section class="border">
            <h2 class="title">if Statements</h2>
            <div class="content">



                <h4 class="sub">Conditional Statements (The if Statement)</h4>
                <div class="content">
                    <?php
                    if (10 > 3) {
                        echo 'Yes 10 is > 3 !!';
                    }
                    echo '<br><br>';
                    $x = 11;
                    if ($x < 12) {
                        echo 'Yes $x' . " = $x is < 12 !";
                    }
                    echo '<br><br>';
                    ?>
                </div>




                <h4 class="sub">if Operators</h4>
                <div class="content">
                    <?php
                    $ifa = 16;
                    $ifb = "16";
                    if ($ifa === $ifb) {
                        echo 'Hello';
                    } else {
                        echo 'Both are 16 but one is int and other are String';
                    }
                    echo '<br><br>';
                    if ($ifa > 16 || $ifa == 16) {
                        echo 'Yeas It is > 16 || == 16';
                    }
                    echo '<br><br>';
                    ?>
                </div>





                <h4 class="sub">if...else Statements</h4>
                <div class="content">
                    <?php
                    $ifa = 10;
                    if ($ifa < 0) {
                        echo 'Number is Nagative';
                    } elseif ($ifa == 0) {
                        echo 'Number is Zero';
                    } else {
                        echo 'Number is Positive';
                    }
                    ?>
                </div>





                <h4 class="sub">Shorthand if Statements</h4>
                <div class="content">
                    <?php
                    $a = 5;

                    if ($a < 10)
                        $b = "Hello";
                    echo $b;
                    echo '<br><br>';
                    $a = 13;

                    $b = $a < 10 ? "Hello" : "Good Bye";

                    echo $b;
                    echo '<br><br> 22 > 10 is ';
                    $aa = 22 > 10 ? " True" : "False";
                    echo $aa;
                    ?>
                </div>



            </div>
        </section>




        <section class="border">
            <h2 class="title">PHP switch Statement</h2>
            <div class="content">






                <h4 class="sub">switch Statement</h4>
                <div class="content">
                    <?php


                    $switch_color = "red";
                    switch ($switch_color) {
                        case "green":
                            echo "your favorite color is Green";
                            break;
                        case "yellow":
                            echo "your favorite color is yellow";
                            break;
                        case "red":
                            echo "your favorite coloe is red";
                            break;
                        default:
                            echo "Your favorite color is neither red, yellow, nor green!";

                    }
                    ?>
                </div>


            </div>
        </section>





        <section class="border">
            <h2 class="title">Loops</h2>
            <div class="content">



                <h4 class="sub">While Loop</h4>
                <div class="content">
                    <?php

                    $i = 0;
                    while ($i < 100) {
                        $i += 10;
                        echo $i . "<br>";
                    }
                    ?>
                </div>



                <h4 class="sub">Do While</h4>
                <div class="content">
                    <?php
                    $x = 0;
                    do {
                        echo $x . "<br>";
                        $x++;
                    } while ($x < 6);

                    ?>
                </div>



                <h4 class="sub">For Loop</h4>
                <div class="content">
                    <?php
                    $a = 10;
                    for ($x = 1; $x <= $a; $x++) {
                        echo ($a + $x) . " = $x <br>";
                    }

                    ?>
                </div>




                <h4 class="sub">foreach Loop</h4>
                <div class="content">
                    <?php
                    $aa = ["A", "B", "C", "D"];
                    foreach ($aa as $x) {
                        echo $x . "<br>";
                    }
                    echo "<br><br>";
                    $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

                    foreach ($members as $x => $y) {
                        echo "$x : $y <br>";
                    }
                    ?>
                </div>




                <h4 class="sub">Break</h4>
                <div class="content">
                    <?php
                    for ($x = 0; $x < 10; $x++) {
                        if ($x == 4) {
                            break;
                        }
                        echo "The number is: $x <br>";
                    }
                    ?>
                </div>



                <h4 class="sub">Continue</h4>
                <div class="content">
                    <?php

                    $x = 0;

                    while ($x < 10) {
                        $x++;
                        if ($x == 4) {
                            continue;
                        }
                        echo "The number is: $x <br>";
                    }
                    ?>
                </div>



            </div>
        </section>







        <section class="border">
            <h2 class="title">PHP switch Statement</h2>
            <div class="content">



                <h4 class="sub">Make for Make</h4>
                <div class="content">
                    <?php


                    ?>
                </div>



                <h4 class="sub">Make for Make</h4>
                <div class="content">
                    <?php


                    ?>
                </div>

            </div>
        </section>







        <section class="border">
            <h2 class="title">PHP switch Statement</h2>
            <div class="content">



                <h4 class="sub">Make for Make</h4>
                <div class="content">
                    <?php


                    ?>
                </div>



                <h4 class="sub">Make for Make</h4>
                <div class="content">
                    <?php


                    ?>
                </div>

            </div>
        </section>





    </main>

</body>

</html>