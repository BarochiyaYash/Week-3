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


    <section class="border">
        <h2 class="title">PHP Functions</h2>
        <div class="content">

            <h4 class="sub">Make for Make</h4>
            <div class="content">
                <?php
                function add_number($a, $b)
                {
                    echo "Addtion of $a + $b is ", ($a + $b) . "<br><brF>";
                }
                add_number(10, 20);
                add_number(10, 22);

                echo "<br><br>";
                echo "<br><br>";
                echo "<u>Defalt Value</u>";
                echo "<br><br>";

                function def_value($a = 55)
                {
                    if ($a == 55) {
                        echo "I am with Defalt Value";
                        echo "<br><br>";
                    } else {
                        echo ($a);
                        echo "<br><br>";
                    }
                }
                def_value(22);
                def_value();
                def_value(18);



                function spred(...$a)
                {
                    foreach ($a as $item) {
                        echo "$item\n";
                    }
                }
                spred(1, 2, 3, 4, 11, 6, 10, 8, 9);
                ?>

            </div>
        </div>
    </section>



    <section class="border">
        <h2 class="title">Array</h2>
        <div class="content">

            <h4 class="sub">indexed Arrays</h4>
            <div class="content">
                <?php

                $arr = array("Yash", "Kumar", "Barochiya");
                echo $arr[0] . "<br>";
                echo $arr[1] . "<br>";
                echo $arr[2] . "<br><br>";
                echo $arr[0] = "Yashkumar Barochiya";

                echo "<br><br>";
                $arr1 = array(12, 23, 41, 55, 67, 98);
                foreach ($arr1 as $item) {
                    echo ($item) . "<br>";
                }
                echo "<br><br>";
                $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
                echo $car["brand"] . "<br>";
                echo $car["model"] . "<br>";
                echo $car["year"] . "<br>";
                ?>
            </div>


            <h4 class="sub">Add Array Items</h4>
            <div class="content">
                <?php

                $fruits = array("Apple", "Banana", "Cherry");
                foreach ($fruits as $item) {

                    echo $item . "<br>";
                }
                echo "<br><br>";
                $fruits[] = "Good";
                foreach ($fruits as $item) {

                    echo $item . "<br>";
                }
                echo "<br><br>";


                array_push($fruits, "f1", "f2", "f3");
                foreach ($fruits as $item) {

                    echo $item . "<br>";
                }
                echo "<br><br>";
                echo "<br><br>";
                ?>
            </div>


            <h4 class="sub">Delete Array Items</h4>
            <div class="content">
                <?php
                $cars = array("Volvo", "BMW", "Toyota");
                foreach ($cars as $item) {

                    echo $item . "<br>";
                }
                echo "<br><br>";


                array_splice($cars, 1, 1);
                foreach ($cars as $item) {

                    echo $item . "<br>";
                }
                echo "<br><br>";
                ?>

                +
            </div>

        </div>
    </section>





    <section class="border">
        <h2 class="title">OOP in PHP</h2>
        <div class="content">





            <h4 class="sub">Classes and Objects</h4>
            <div class="content">
                <?php

                class Fruit
                {

                    public $name;
                    public $color;

                    function set_name($name)
                    {
                        $this->name = $name;
                    }

                    function set_color($color)
                    {
                        $this->color = $color;
                    }
                    function print_data()
                    {
                        echo "<br> Name -> " . $this->name;
                        echo "<br> Color -> " . $this->color;
                    }
                }
                $apple = new Fruit();
                $apple->set_name("Apple");
                $apple->set_color("Red");
                $apple->print_data();
                ?>
            </div>







            <h4 class="sub">Constructor</h4>
            <div class="content">
                <?php
                class Fruit1
                {
                    public $name;
                    public $color;
                    function __construct($name, $color)
                    {
                        $this->name = $name;
                        $this->color = $color;
                    }
                    function __destruct()
                    {
                        echo "The fruit is {$this->name} and the color is {$this->color}.";
                    }
                }
                $apple1 = new Fruit1("Apple", "Black");
                ?>
            </div>








            <h4 class="sub">Inheritance</h4>
            <div class="content">
                <?php
                echo "Single...";

                class in_a
                {
                    public $name;

                }
                class in_b extends in_a
                {
                    public $surname;

                    function add_data($name, $surname)
                    {
                        $this->name = $name;
                        $this->surname = $surname;
                    }

                    function view_data()
                    {
                        echo "<br><br>";
                        echo $this->name . "<br>";
                        echo $this->surname . "<br>";
                    }
                }

                $emp1 = new in_b();
                $emp1->add_data("Yash", "Barochiya");
                $emp1->view_data();



                echo "<br><br>";
                echo "<br><br>";
                echo "Multi Level...";

                class in_a1
                {
                    public $name;

                }
                class in_b1 extends in_a1
                {
                    public $surname;

                }

                class in_c1 extends in_b1
                {
                    public $city;

                    function add_data($name, $surname, $city)
                    {
                        $this->name = $name;
                        $this->surname = $surname;
                        $this->city = $city;
                    }

                    function view_data()
                    {
                        echo "<br><br>";
                        echo "Name = " . $this->name . "<br>";
                        echo "Surname = " . $this->surname . "<br>";
                        echo "City = " . $this->city . "<br>";
                    }
                }

                $emp1 = new in_c1();
                $emp1->add_data("Yash", "Barochiya", "Rajkot");
                $emp1->view_data();




                echo "<br><br>";
                echo "<br><br>";
                echo "Hierarchical Inheritance...";

                class in_a2
                {
                    public $name;

                }
                class in_b2 extends in_a2
                {
                    public $surname;

                }

                class in_c2 extends in_a2
                {
                    public $city;

                    function add_data($name, $city)
                    {
                        $this->name = $name;
                        $this->city = $city;
                    }

                    function view_data()
                    {
                        echo "<br><br>";
                        echo "Name = " . $this->name . "<br>";
                        echo "City = " . $this->city . "<br>";
                    }
                }

                $emp1 = new in_c2();
                $emp1->add_data("Yash", "Rajkot");
                $emp1->view_data();


                ?>
            </div>








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









    <main>






    </main>

    <script src="./assets/js/script.js"></script>
</body>

</html>