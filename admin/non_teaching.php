<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Title Here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Asset\css\megastyle.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .person-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
            border: 2px solid #3498db; /* Blue border color for the person container */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for the person container */
        }

        .person {
            width: 48%;
            max-width: 200px; /* Set a maximum width for the images */
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .person:hover {
            transform: scale(1.05);
        }

        .person img {
            width: 100%;
            height: auto;
            border-radius: 8px; /* Rounded corners for the image */
            background-color: #3498db; /* Blue background color */
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for the image */
        }

        .person:hover img {
            transform: scale(1.1); /* Enlarge the image on hover */
        }

        .content {
            width: 48%;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 0 0 8px 8px;
            background-color: cyan; /* Blue background color */
            color: #fff; /* White text color */
            transition: background-color 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for the content */
        }

        .person:hover .content {
            background-color: #2980b9; /* Darker blue background on hover */
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }

        /* Add this CSS for the hover effect on text inside the content */
        .person:hover .content h2,
        .person:hover .content p {
            color: #fff; /* Change text color on hover */
        }

        /* Add this CSS for the hover effect on the entire person container */
        .person-container:hover {
            border-color: #2980b9; /* Change border color on hover */
        }

    </style>
</head>

<body>
<img src="..\Asset\img\header.png" width="100%">
<marquee scrollamount="10"><p><font size="8px" style="Times New Roman" color="red">Bachelor of Computer Applications (Co-Ed) </font></p></marquee>
<hr>

<div class="container">

        <!-- Clerk Mam - -->
        <div class="person-container">
            <div class="person">
                <img src="../admin/faculty/clerk_mam.jpg" alt="Clerk Mam">
            </div>
            <div class="content">
                <h2>Clerk Mam</h2>
            </div>
        </div>

        <!-- Veersheety Sir -->
        <div class="person-container">
            <div class="person">
                <img src="../admin/faculty/veersheety.jpg" alt="Veersheety Sir">
            </div>
            <div class="content">
                <h2>Veersheety</h2>
            </div>
        </div>

        <!-- Veersheety Sir - MCA -->
        <div class="person-container">
            <div class="person">
                <img src="../admin/faculty/aunty.jpg" alt="Veersheety Sir">
            </div>
            <div class="content">
                <h2>Aunty</h2>
            </div>
        </div>

    </div>

</body>
</html>