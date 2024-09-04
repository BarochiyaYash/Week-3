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




                <h4 class="sub">Cookies</h4>
                <div class="content">

                </div>




                <h4 class="sub">Session</h4>
                <div class="content">

                </div>





            </div>
        </section>





        <section class="border">
            <h2 class="title">PHP Functions</h2>
            <div class="content">




                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>




            </div>
        </section>





        <section class="border">
            <h2 class="title">PHP Functions</h2>
            <div class="content">




                <h4 class="sub">Make for Make</h4>
                <div class="content">

                </div>




            </div>
        </section>






    </main>

</body>

</html>