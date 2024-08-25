<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid username or password.";
            exit();
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Form fields are not set correctly.";
        exit();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="../Asset/img/sb.png">
    <link href="../Asset/css/bootstrap.css" rel="stylesheet">
    <link href="../Asset/css/login.css" rel="stylesheet">
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
            <img class="mb-4" src="../Asset/img/sb.png" alt="" width="150" height="150">
            <h1 class="h3 mb-3 fw-normal">Login</h1>
        </center>
        <form action="" method="post" id="loginForm">       
            
            
            <div class="form-floating mt-2">
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username" placeholder="username">
                <label for="floatingSelect">Username</label>
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-floating mt-2">
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password">
                <label for="password">Password</label>
                <span class="invalid-feedback"></span>
                <div class="password-toggle-icon" id="togglePassword">
                    <i class="fa-regular fa-eye-slash fa-sm" style="color: #656667;"></i>
                </div>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" value="Login">Sign in</button>
            <center><br>
            <span id="year"></span> Sharnbasva University,Kalaburagi <br>
            <span class="fw-semibold">Designed & Developed by Department of</span><br>
            <span class="fw-bolder"><span class="fs-4">B</span>achelor of Computer Applications.</span> <br>   
            </p>
            <!-- Don't delete this comment this is a backup code for password reset -->
            <!-- Also don't delete the don't_delete_me.php file from admin folder -->
            <!--<span class="fw-semibold"> Forgot Password ?&nbsp<a href="don't_delete_me.php"> Reset </a></span><br>-->
            </center>
        </form>
        <center>
        <span class="fw-semibold"> Forgot Password ?&nbsp</span><a href="#" id="openPopup">Reset</a><br>
        <span class="fw-semibold"> Don't have an account ?&nbsp<a href="../register.php">Register</a></span>
            <div class="popup-container" id="popupContainer">
                <div class="popup-content">
                    <h3>Reset Password</h3>
                    <form method="POST" action="resetpass.php">
                        <div class="form-floating mt-3">
                            <input type="text" placeholder="Enter the Registered Email" class="form-control" name="email" id="email"><br>
                            <label>Enter the Registered Email</label>
                            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" name="resetpass">Send Link</button>
                            <span class="invalid-feedback"></span>
                        </div>
                    </form>
                    <button id="closePopup" class="btn btn-secondary mt-3">Close</button>
                </div>
            </div>
        </center>
        <script>
            document.getElementById('openPopup').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popupContainer').style.display = 'flex';
            });

            document.getElementById('closePopup').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('popupContainer').style.display = 'none';
            });
        </script>
        <script>
            $(document).ready(function(){
                $("#loginForm").submit(function(e){
                    e.preventDefault();
    
                    // Get form data
                    var formData = $(this).serialize();
    
                    // Send an AJAX request to login.php
                    $.ajax({
                        url: 'login.php',
                        type: 'POST',
                        data: formData,
                        success: function(response){
                            // Handle the response from login.php
                        }
                    });
                });
            });
        </script>
        <script>
            document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        </script>
    </main>
</body>

</html>