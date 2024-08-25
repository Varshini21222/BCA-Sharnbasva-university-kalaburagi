<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];

    // Check if passwords match
    if ($password != $confpass) {
        echo "Passwords do not match. Please try again.";
    } else {
        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $con->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $name, $hashed_password);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $con->close();
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="Asset/css/bootstrap.css" rel="stylesheet">
        <link href="Asset/css/register.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
        <style>
            .password-toggle-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            }

            .password-toggle-icon i {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <main class="form-signin w-100 m-auto">
            <center>
                <img class="mb-4" src="Asset/img/sb.png" alt="" width="150" height="150">
                <h1 class="h3 mb-3 fw-normal">Register</h1>
            </center>
            <form action="register.php" method="post">       
                
                <div class="form-floating mt-2">
                    <input type="email" name="email" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="email" placeholder="Email ID">
                    <label for="floatingSelect">Email ID</label>
                    <span class="invalid-feedback"></span>
                </div>
                <div class="form-floating mt-2">
                    <input type="text" name="name" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="name" placeholder="name">
                    <label for="floatingSelect">Username</label>
                    <span class="invalid-feedback"></span>
                </div>
                <div class="form-floating mt-2">
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <span class="invalid-feedback"></span>
                        <div class="password-toggle-icon" id="togglePassword1">
                            <i class="fa-regular fa-eye-slash fa-sm" style="color: #656667;"></i>
                        </div>
                </div>
                <div class="form-floating mt-2">
                    <input type="password" name="confpass" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="floatingConfpass" placeholder="Confirm Password">
                    <label for="floatingPassword">Confirm Password</label>
                    <span class="invalid-feedback"></span>
                        <div class="password-toggle-icon" id="togglePassword2">
                            <i class="fa-regular fa-eye-slash fa-sm" style="color: #656667;"></i>
                        </div>
                </div>

    
                <button class="w-100 btn btn-lg btn-primary" type="submit" value="Login">Sign Up</button>
                <center>
                 
                <span id="year"></span> Sharnbasva University,Kalaburagi <br>
                <span class="fw-semibold">Designed & Developed by Department of</span><br>
                <span class="fw-bolder"><span class="fs-4">B</span>achelor of Computer Application.</span> <br>   
                </p>
                <p>Already have an Account ? <a href="admin\login.php">Login</a></p>
                </center>
            </form>
        </main>
        
        <script src="" async defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var togglePassword1 = document.getElementById('togglePassword1');
            var togglePassword2 = document.getElementById('togglePassword2');

            togglePassword1.addEventListener('click', function() {
                togglePasswordVisibility('floatingPassword', 'togglePassword1');
            });

            togglePassword2.addEventListener('click', function() {
                togglePasswordVisibility('floatingConfpass', 'togglePassword2');
            });

            function togglePasswordVisibility(inputId, toggleId) {
                var passwordInput = document.getElementById(inputId);
                var iconElement = document.getElementById(toggleId).querySelector('i.fa-regular');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    iconElement.classList.remove('fa-eye-slash');
                    iconElement.classList.add('fa-eye');
                } else {
                    passwordInput.type = 'password';
                    iconElement.classList.remove('fa-eye');
                    iconElement.classList.add('fa-eye-slash');
                }
            }
        });
        </script>
    </body>
</html>