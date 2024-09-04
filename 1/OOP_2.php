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
                // $apple1 = new Fruit1("Apple", "Black");
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








            <h4 class="sub">Constants</h4>
            <div class="content">
                <?php
                class Goodbye
                {
                    const LEAVING_MESSAGE = "Thank you for visiting My Profile!";
                    public function byebye()
                    {
                        echo self::LEAVING_MESSAGE;
                    }
                }

                $goodbye = new Goodbye();
                $goodbye->byebye();
                ?>
            </div>








            <h4 class="sub">Abstract Classes</h4>
            <div class="content">
                <?php
                abstract class aa
                {
                    public $name;
                    public function __construct($name)
                    {
                        $this->name = $name;
                    }
                    abstract function info();
                }
                class bb extends aa
                {
                    public function info()
                    {
                        echo "I am From BB" . $this->name . "<br>";
                    }
                }
                class cc extends aa
                {
                    public function info()
                    {
                        echo "I am From CC" . $this->name . "<br>";
                    }
                }
                class dd extends aa
                {
                    public function info()
                    {
                        echo "I am From DD" . $this->name . "<br>";
                    }
                }
                $obj1 = new bb(" Yash");
                $obj1->info();

                $obj2 = new cc(" Yash_2");
                $obj2->info();

                $obj3 = new dd(" Yash_3");
                $obj3->info();


                echo "<br><br>";
                echo "<br><br>";
                abstract class ab_new
                {
                    public $name;
                    abstract public function add_name($name);
                }
                class ab_new_2 extends ab_new
                {
                    public function add_name($name, $sp = " ", $com = " From Adobe")
                    {
                        $this->name = $name;
                        echo $name . $sp . $com . ". <br><br>";
                    }
                }
                $obj1 = new ab_new_2;
                $obj1->add_name("Yash");
                $obj2 = new ab_new_2;
                $obj2->add_name("Max", " ", "From Google");

                ?>
            </div>




            <h4 class="sub">Interfaces</h4>
            <div class="content">
                <?php

                interface Animal
                {
                    public function makeSound();
                    public function age();
                }

                class cat implements Animal
                {
                    public function makeSound()
                    {
                        echo "Cat Make's Sound!!<br><br>";
                    }
                    public function age()
                    {
                        echo "Cat Age is 22.<br><br>";
                    }
                }
                class dog implements Animal
                {
                    public function makeSound()
                    {
                        echo "Dog Make's Sound!!<br><br>";
                    }
                    public function age()
                    {
                        echo "Dog Age is 25<br><br>";
                    }
                }

                $obj_cat = new cat();
                $obj_cat->makeSound();

                $obj_dog = new dog();
                $obj_dog->makeSound();

                $obj_cat->age();
                $obj_dog->age();




                ?>
            </div>




            <h4 class="sub">Traits</h4>
            <div class="content">
                <?php

                trait message1
                {
                    public function msg1()
                    {
                        echo "OOP is fun! ";
                    }

                }

                trait message2
                {
                    public function msg2()
                    {
                        echo "OOP reduces code duplication!";
                    }
                }

                class Welcome
                {
                    use message1;
                }

                class Welcome2
                {
                    use message1, message2;
                }

                $obj = new Welcome();
                $obj->msg1();
                echo "<br>";

                $obj2 = new Welcome2();
                $obj2->msg1();
                $obj2->msg2();
                ?>
            </div>




            <h4 class="sub">Static Methods</h4>
            <div class="content">
                <?php
                class test_static
                {
                    public static function print_new()
                    {
                        echo "I am From STATIC FUNCTION USING __CONST Call";
                    }
                    public function __construct()
                    {
                        self::print_new();
                    }
                }
                new test_static();


                echo "<br><br><br><br>";
                echo "Use for 2 Methord";
                echo "<br><br>";
                class A
                {
                    public static function welcome()
                    {
                        echo "Hello World";
                        echo " Bro!";
                    }
                }
                class B
                {
                    public function message()
                    {
                        A::welcome();
                    }
                }

                $obj = new B();
                echo $obj->message();
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