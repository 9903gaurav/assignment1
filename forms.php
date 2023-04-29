<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['inputEmail4'];
    $password = $_POST['inputPassword4'];
    $add1 = $_POST['inputAddress'];
    $add2 = $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];
    $zip = $_POST['inputZip'];

    function validate($name)
    {
        if ($name === "" or $name === null) {
            return false;
        } else {
            return true;
        }
    }

    if (validate($email)) {
        if (validate($email)) {
            if (validate($password)) {
                if (validate($password)) {
                    if (validate($add1)) {
                        if (validate($city)) {
                            if (validate($state)) {
                                if (validate($zip)) {
                                    $success = "Form Submiited Successfully";
                                } else {
                                    $error = "Please Enter Zip code";
                                }
                            } else {
                                $error = "Please Enter State";
                            }
                        } else {
                            $error = "Please Enter City";
                        }
                    } else {
                        $error = "Please Enter Address";
                    }
                } else {
                    $error = "Please Enter Valid Password";
                }
            } else {
                $error = "Please Enter Password";
            }
        } else {
            $error = "Please Enter Valid Email";
        }
    } else {
        $error = "Please Enter Email";
    }
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Assignment</title>
    <!-- Bootstrap Linking -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container my-3 centerText">
        <h1 class="centerText1">Part 2</h1>
    </div>
    <div class="container my-5 p-3 border border-1">
        <p id="error_message" style="color:rgb(255,0,0); font-size: 12px;">
            <?php
            if (isset($error)) {
                echo $error;
            } ?>
        </p>
        <p id="success_message" style="color:rgb(0,255,0); font-size: 12px;">
            <?php
            if (isset($success)) {
                echo $success;
            } ?>
        </p>
        <form class="row g-3" id="mainForm" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="inputEmail4" >
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="inputPassword4" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,10}" required>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St" required>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name="inputCity" id="inputCity" required>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <input type="text" class="form-control" name="inputState" id="inputState" required>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="inputZip" id="inputZip" required minlength="6" maxlength="6">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" onsubmit="validateForm()" name="submit">Sign in</button>
            </div>
        </form>
    </div>
</body>
<script src="script.js"></script>

</html>