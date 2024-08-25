<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Asset/css/bootstrap.css">
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
    </style>
    </head>
    <body>
        <center>
            <h3>Reset Password</h3>
            <button id="openPopup" class="btn btn-lg btn-primary mt-5">Forgot Password</button>
    </center>

    <div class="popup-container" id="popupContainer">
        <div class="popup-content">
            <h3>Reset Password</h3>
            <form method="POST" action="resetpass.php">
                <div class="form-floating mt-3">
                    <input type="text" placeholder="Enter the Registered Email" class="form-control" name="email" id="email"><br>
                    <label for="email">Enter the Registered Email</label>
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" name="resetpass">Send Link</button>
                    <span class="invalid-feedback"></span>
                </div>
            </form>
            <button id="closePopup" class="btn btn-secondary mt-3">Close</button>
        </div>
    </div>
    <script>
        document.getElementById('openPopup').addEventListener('click', function() {
            document.getElementById('popupContainer').style.display = 'flex';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popupContainer').style.display = 'none';
        });
    </script>
    </body>
</html>