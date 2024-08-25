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
    <style>
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .btn-secondary{
            border: none;
            background-color: red;
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
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" value="Login">Sign in</button>
            <center><br>
            <span id="year"></span> Sharnbasva University,Kalaburagi <br>
            <span class="fw-semibold">Designed & Developed by Department of</span><br>
            <span class="fw-bolder"><span class="fs-4">B</span>achelor of Computer Applications.</span> <br>   
            </p>
            <!--<span class="fw-semibold"> Forgot Password ?&nbsp<a href="forgotpass.php"> Reset </a></span><br>-->

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
                            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" style="width: 100px; name="resetpass">Send Link</button>
                            <span class="invalid-feedback"></span>
                        </div>
                    </form>
                    <button id="closePopup" class="btn btn-secondary mt-3">Close</button>
                </div>
            </div>
        </center>
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
        document.getElementById('openPopup').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('popupContainer').style.display = 'flex';
        });

        document.getElementById('closePopup').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('popupContainer').style.display = 'none';
        });
    </script>
    </main>
</body>

</html>