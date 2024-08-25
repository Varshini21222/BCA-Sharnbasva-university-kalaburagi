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

<!-- Prof. HOD Sir - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/hod.jpg" alt="Prof. HOD Sir">
    </div>
    <div class="content">
        <h2>Prof. Sridhar Anakal</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Malammaa Mam - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/malamma.jpg" alt="Malammaa Mam">
    </div>
    <div class="content">
        <h2>Prof. Mallammaa Patil</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- anu  -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/anu.jpg" alt="Sunita Mam">
    </div>
    <div class="content">
        <h2>Prof. Annapurana Math</h2>
        <p>Qualifications: MA (Master of Arts), BEd (Bachelor of Education)</p>
    </div>
</div>

<!-- KG patil sir - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/kgpatil.jpg" alt="Malammaa Mam">
    </div>
    <div class="content">
        <h2>Prof. Kalyanrao Patil</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Manjunath Sir - BE, M.Tech -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/manjunath.jpg" alt="Manju Sir">
    </div>
    <div class="content">
        <h2>Prof. Manjunath Reddy</h2>
        <p>Qualifications: BE (Bachelor of Engineering), M.Tech (Master of Technology)</p>
    </div>
</div>

<!-- Prasanth Sir - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/prashanth.jpg" alt="Prasanth Sir">
    </div>
    <div class="content">
        <h2>Prof. Prasanth Mutta</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Sagare Sir - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/sagare.jpg" alt="Sagare Sir">
    </div>
    <div class="content">
        <h2>Prof. Sharanabasappa Sagare</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Shalini Mam - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/shalini.jpg" alt="Shanli Mam">
    </div>
    <div class="content">
        <h2>Prof. Shalini Malipatil</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Preeti Mam - M.Tech -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/preeti.jpg" alt="Preeti Mam">
    </div>
    <div class="content">
        <h2>Prof. Preeti</h2>
        <p>Qualifications: M.Tech (Master of Technology)</p>
    </div>
</div>

<!-- Ratna Mam - MSc Computer Science -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/ratna.jpg" alt="Ratna Mam">
    </div>
    <div class="content">
        <h2>Prof. Ratna Pyati</h2>
        <p>Qualifications: MSc (Master of Science) Computer Science</p>
    </div>
</div>

<!-- Reshma Mam - MCom -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/reshma.jpg" alt="Reshma Mam">
    </div>
    <div class="content">
        <h2>Prof. Reshma Karoor</h2>
        <p>Qualifications: MCom (Master of Commerce)</p>
    </div>
</div>

<!-- Vishwanath Sir - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/vishwanath.jpg" alt="Vishvanath Sir">
    </div>
    <div class="content">
        <h2>Prof. Vishwanath Koodi</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Shivalingappa Sir - M.Tech -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/sivalingappa.jpg" alt="Shivalingappa Sir">
    </div>
    <div class="content">
        <h2>Prof. Shivalingappa</h2>
        <p>Qualifications: M.Tech (Master of Technology)</p>
    </div>
</div>

<!-- Sharnu Sir - MCA -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/sharanu.jpg" alt="Sharnu Sir">
    </div>
    <div class="content">
        <h2>Prof. Sharnugowda C</h2>
        <p>Qualifications: MCA (Master of Computer Applications)</p>
    </div>
</div>

<!-- Kannada Sir - MA, NET -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/kannada.jpg" alt="Kannada Sir">
    </div>
    <div class="content">
        <h2>Prof. shrishail</h2>
        <p>Qualifications: MA (Master of Arts), NET (National Eligibility Test)</p>
    </div>
</div>

<!-- Sunita Mam - MA, BEd -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/sunita.jpg" alt="Sunita Mam">
    </div>
    <div class="content">
        <h2>Prof. Sunita Patil</h2>
        <p>Qualifications: MA (Master of Arts), BEd (Bachelor of Education)</p>
    </div>
</div>

<!-- Rani Mam - MA, BEd -->
<div class="person-container">
    <div class="person">
        <img src="../admin/faculty/rani.jpg" alt="Rani Mam">
    </div>
    <div class="content">
        <h2>Prof. Rani</h2>
        <p>Qualifications: MA (Master of Arts), BEd (Bachelor of Education)</p>
    </div>
</div>

</div>

</body>
</html>