<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Password Update</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
            require("config.php");

            if(isset($_GET['email']) && isset($_GET['reset_token']))
            {
                date_default_timezone_set('Asia/kolkata');
                $date=date("Y-m-d");
                $query="SELECT * FROM `users` WHERE `email`='$_GET[email]' AND `reset_token`='$_GET[reset_token]' AND `reset_token_expire`='$date'";
                $result=mysqli_query($con,$query);
                if($result)
                {
                    echo"
                    <!doctype html>
                    <html lang='en'>

                    <head>
                        <meta charset='utf-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <title>Login Page</title>
                        <link rel='icon' type='image/x-icon' href='../Asset/img/sb.png'>
                        <link href='../Asset/css/bootstrap.css' rel='stylesheet'>
                        <link href='../Asset/css/login.css' rel='stylesheet'>
                        <style>
                            form {
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    text-align: center;
                                    font-family: 'Times New Roman', Times, serif;
                                }
                        </style>
                    </head>

                        <body>
                     <form method='POST'>
                     <center>
                     <h3>Create New Password</h3><br>
                     <input type='password' placeholder='New Password' class='form-control' name='password'><br>
                     <button type='submit' class='w-100 btn btn-lg btn-primary mt-2' name='updatepassword'>UPDATE</button>
                     <input type='hidden' name='email' value='$_GET[email]'>
                     </form>
                     </center>";
                }
                else
                {
                    echo"
                        <script>
                        alert('Server Down! try again later');
                        window.location.href='login.php';
                        </script>
                        ";
                }
            }
        ?>
        <?php 
            if(isset($_POST['updatepassword']))
            {
                $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $update="UPDATE `users` SET `password`='$pass', `reset_token_expire`=NULL, `reset_token`=NULL WHERE `email`='$_POST[email]'";
                if(mysqli_query($con,$update))
                {
                    echo"
                        <script>
                            alert('Password Updated Successfully');
                            window.location.href='login.php';
                        </script>
                        ";
                }
                else
                {
                    echo"
                        <script>
                            alert('Server Down! try again later');
                            window.location.href='login.php';
                        </script>
                        ";
                }
            }
        ?>
    </body>
</html>