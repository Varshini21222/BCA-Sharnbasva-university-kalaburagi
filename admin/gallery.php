<?php include('auth.php'); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Asset/css/megastyle.css">
    <link rel="stylesheet" type="text/css" href="..\Asset\css\foter.css">


    <style>
        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: -1.25%; /* To compensate for margin on each image */
        }

        .image-container img {
            width: 24.5%; /* Adjust width as needed */
            margin: 1%; /* Adjust margin as needed */
            box-sizing: border-box; /* Include padding and border in the width */
        }

        .image-container img:hover {
            transform: scale(1.1); /* Increase size on hover */
        }

    </style>
</head>
<body>
    <img src="../Asset/img/header.png" width="100%">
    <marquee scrollamount="10"><p><font size="8px" style="Times New Roman" color="red">Bachelor of Computer Applications (Co-Ed) </font></p></marquee>
    <hr>

    <div class="image-container">
        <img src="../admin/gallery/IMG-20220815-WA0022.jpg" alt="Image 1">
        <img src="../admin/gallery/IMG-20220815-WA0043.jpg" alt="Image 2">
        <img src="../admin/gallery/IMG-20220815-WA0028.jpg" alt="Image 3">
        <img src="../admin/gallery/IMG20220812170725.jpg" alt="Image 4">
        <img src="../admin/gallery/IMG20220815095910.jpg" alt="Image 5">
        <img src="../admin/gallery/1662535995764.jpg" alt="Image 6">
        <img src="../admin/gallery/sahana.jpg" alt="Image 7">
        <img src="../admin/gallery/kg_patil.jpg" alt="Image 9">
        <img src="../admin/gallery/hod.jpg" alt="Image 10">
        <img src="../admin/gallery/faculty1.jpg" alt="Image 11">
    </div>
    <br><br>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="..\Asset\img\foter.png" alt="University Logo">
                </div>
                <div class="footer-info">
                    <h4>Sharnbasva University Kalaburagi</h4>
                    <p>Email: sharnbasvauniversity@gmail.com</p>
                    <p>Address: Vidya Nagar, Kalaburagi, Karnataka, India</p>
                    <p>&copy; 2023 All rights reserved | Sharnbasva University Kalaburagi</p>
                    <p>Design and Developed by Varshini and Shraddha</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
