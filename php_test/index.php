<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php

    include('./conn.php');

    ?>
    <?php



    if (isset($_POST['submit'])) {

        include('./conn.php');

        $firstName = filter_input(INPUT_POST, 'fName', FILTER_SANITIZE_SPECIAL_CHARS);
        $middleName = filter_input(INPUT_POST, 'mName', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastName = filter_input(INPUT_POST, 'lName', FILTER_SANITIZE_SPECIAL_CHARS);
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        $birthDate = filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $rePassword = filter_input(INPUT_POST, 'rePassword', FILTER_SANITIZE_SPECIAL_CHARS);
        $acceptTC = filter_input(INPUT_POST, 'acceptTC', FILTER_SANITIZE_SPECIAL_CHARS);


        $allowedPattern = '/^[a-zA-Z\s]+$/';
        $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $phonePattern = '/^\+?[1-9]\d{1,14}$/';
        $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/';

        $error = 0;

        if (!preg_match($allowedPattern, $firstName)) {
            $firstNameError = " (Invalid First Name) ";
            $error++;
        }

        if (!preg_match($allowedPattern, $middleName)) {
            $middleNameError = " (Invalid Middle Name) ";
            $error++;
        }

        if (!preg_match($allowedPattern, $lastName)) {
            $lastNameError = " (Invalid Last Name) ";
            $error++;
        }


        if (empty($gender)) {
            $genderError = " (Select Gender) ";
            $error++;
        }

        if (empty($city)) {
            $cityError = " (Select City) ";
            $error++;
        }

        if (!preg_match($emailPattern, $email)) {
            $emailError = " (Invalid Email) ";
            $error++;
        }

        if (!preg_match($phonePattern, $phone)) {
            $phoneError = " (Invalid Phone Number) ";
            $error++;
        }

        if (empty($birthDate)) {
            $birthDateError = " (Select Birth Date) ";
            $error++;
        }


        if (!preg_match($passwordPattern, $password)) {
            $passwordError = " (Enter Valid Password) ";
            $error++;

        } elseif (($password === $rePassword) != true) {
            $rePasswordError = " (Password Must Same) ";
            $error++;
        }
        if (!($acceptTC === "on")) {
            $acceptTCError = " (Need TO Accept T&C) ";
            $error++;
        }

        if ($error === 0) {

            $fullName = $firstName . " " . $middleName . " " . $lastName;

            $sql = "INSERT INTO user_data VALUES ('','$fullName','$gender','$city','$email','$phone','$birthDate','$password')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                $firstName = '';
                $middleName = '';
                $lastName = '';
                $gender = '';
                $city = '';
                $email = '';
                $phone = '';
                $birthDate = '';
                $password = '';
                $rePassword = '';
                $acceptTC = '';
                // Redirect to the same page to prevent resubmission
                header("Location: " . $_SERVER['PHP_SELF']);
                exit; // Stop the script to ensure redirection happens
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5 text-center">
                <h1>Testing Form</h1>
            </div>
            <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="col-md-12 p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fName" class="form-label">First Name</label>
                            <lable type="" class="text-danger">
                                <?php echo !empty($firstNameError) ? $firstNameError : '' ?>
                            </lable>
                            <input type="text" class="form-control" id="fName" name="fName" autofocus />
                        </div>
                        <div class="col-md-4">
                            <label for="mName" class="form-label">Middle Name</label>
                            <lable type="" class="text-danger">
                                <?php echo !empty($middleNameError) ? $middleNameError : '' ?>
                            </lable>
                            <input type="text" class="form-control" id="mName" name="mName" />
                        </div>
                        <div class="col-md-4">
                            <label for="lName" class="form-label">Last Name</label>
                            <lable type="" class="text-danger">
                                <?php echo !empty($lastNameError) ? $lastNameError : '' ?>
                            </lable>
                            <input type="text" class="form-control" id="lName" name="lName" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p-4">
                    <h6>Gender <lable type="" class="text-danger"><?php echo !empty($genderError) ? $genderError : '' ?>
                        </lable>
                    </h6>

                    <input type="radio" class="form-check-input" name="gender" value="male" />
                    <label for="gender" class="form-label">Male</label>

                    <br>

                    <input type="radio" class="form-check-input" name="gender" value="female" />
                    <label for="gender" class="form-label">Female</label>

                    <br>

                    <input type="radio" class="form-check-input" name="gender" value="other" />
                    <label for="gender" class="form-label">Other</label>


                </div>
                <div class="col-md-12 p-4">
                    <label for="city" class="form-label">City</label>
                    <lable type="" class="text-danger"><?php echo !empty($cityError) ? $cityError : '' ?></lable>
                    <select name="city" id="" class="form-select">
                        <option disabled value="" selected> --- Select City --- </option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Rajkot">Dhoraji</option>
                        <option value="Rajkot">Junagadh</option>
                    </select>
                </div>

                <div class="col-md-12 p-4">
                    <label for="email" class="form-label">Email</label>
                    <lable type="" class="text-danger"><?php echo !empty($emailError) ? $emailError : '' ?></lable>
                    <input type="text" class="form-control" name="email" id="email" />
                </div>

                <div class="col-md-12 p-4">
                    <label for="phone" class="form-label">Phone</label>
                    <lable type="" class="text-danger"><?php echo !empty($phoneError) ? $phoneError : '' ?></lable>
                    <input type="text" class="form-control" name="phone" id="phone" />
                </div>

                <div class="col-md-12 p-4">
                    <label for="birthDate" class="form-label">Birth Date</label>
                    <lable type="" class="text-danger"><?php echo !empty($birthDateError) ? $birthDateError : '' ?>
                    </lable>
                    <input type="date" class="form-control" name="birthDate" id="birthDate" />
                </div>


                <div class="col-md-12 p-4">
                    <label for="password" class="form-label">Password</label>
                    <lable type="" class="text-danger"><?php echo !empty($passwordError) ? $passwordError : '' ?>
                    </lable>
                    <input type="text" class="form-control" name="password" id="password" />
                    <br>
                    <label for="rePassword" class="form-label">Re-Password</label>
                    <lable type="" class="text-danger"><?php echo !empty($rePasswordError) ? $rePasswordError : '' ?>
                    </lable>
                    <input type="text" class="form-control" name="rePassword" id="rePassword" />
                </div>

                <div class="mb-3 form-check p-4">
                    <input type="checkbox" class="form-check-input" id="acceptTC" name="acceptTC">
                    <label class="form-check-label" for="acceptTC">T&C Accept</label>
                    <lable type="" class="text-danger"><?php echo !empty($acceptTCError) ? $acceptTCError : '' ?>
                    </lable>
                </div>
                <div class="mb-3 p-4">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>