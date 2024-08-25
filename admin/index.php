<?php include('auth.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..\Asset\css\megastyle.css">
        <link rel="stylesheet" type="text/css" href="..\Asset\css\foter.css">


        <style>

            #slider-container {
            width: 100%;
            overflow: hidden;
            }

            #image-slider {
            display: flex;
            transition: transform 1s ease-in-out;
            }

            .slider-image {
            width: 100%;
            height: auto;
            filter: blur(4px); /* Adjust the blur amount as needed */
            }

        /* Menu item styling */
        .menu-item {
            margin-right: 20px;
        }

        .menu-link {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .menu-link:hover {
            color: #ffcc00;
        }

        /* Dropdown styling */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #555;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .menu-item:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #666;
        }

        </style>

    </head>
    <body>
        <img src="..\Asset\img\header.png" width="100%">
        <div id="navbar" class="mt-0 mb-2 d-md-block d-none">
            <div class="container">
                <div class="d-flex justify-content-right align-items-center">
                    <div class="menu-item"></div>

                    <div class="menu-item">
                        <a href="#" class="menu-link">HOME </a>
                    </div>
    
                    <div class="menu-item" id="facultyDropdown" >
                        <a href="#" class="menu-link" id="Tech">Faculty<i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="..\\admin\teaching.php">Teaching Faculty</a>
                            <a href="..\\admin\non_teaching.php">Non-Teaching Faculty</a>
                        </div>
                    </div>

                    <div class="menu-item" id="courceDropdown" >
                        <a href="#" class="menu-link" id="Tech">Course<i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="..\admin\cource\first.html">I Semester</a>
                            <a href="..\admin\cource\second.html">II Semester</a>
                            <a href="..\admin\cource\third.html">III Semester</a>
                            <a href="..\admin\cource\four.html">IV Semester</a>
                            <a href="..\admin\cource\fifth.html">V Semester</a>
                            <a href="..\admin\cource\six.html">VI Semester</a>
                        </div>
                    </div>

                    <div class="menu-item">
                        <a href="gallery.php" class="menu-link">Gallery </a>
                    </div>

                    <div class="menu-item">
                        <a href="placement.php" class="menu-link">Placements</a>
                    </div>

                    <div class="menu-item">
                        <a href="logout.php" class="menu-link">Logout</a>
                    </div>

                </div>
            </div>
        </div>
        <marquee scrollamount="10"><p><font size="8px" style="Times New Roman" color="red">Bachelor of Computer Applications (Co-Ed) </font></p></marquee><hr>

        <div id="slider-container">
        <div id="image-slider">
            <img class="slider-image" src="../admin/gallery/IMG-20220815-WA0022.jpg" alt="Image 1">
            <img class="slider-image" src="../admin/gallery/IMG20220812170725.jpg" alt="Image 2">
            <img class="slider-image" src="../admin/faculty/back.jpg" alt="Image 3">
            <img class="slider-image" src="../admin/gallery/faculty1.jpg" alt="Image 4">
            <img class="slider-image" src="../admin/gallery/hod.jpg" alt="Image 5">
            <img class="slider-image" src="../admin/gallery/sahana.jpg" alt="Image 6">
            <img class="slider-image" src="../admin/gallery/kg_patil.jpg" alt="Image 7">
            <!-- Add more images as needed -->
        </div>
        </div>

        <script>
            const slider = document.getElementById('image-slider');
            let currentIndex = 0;

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slider.children.length;
                updateSlider();
            }

            function updateSlider() {
                const translateValue = -currentIndex * 100 + '%';
                slider.style.transform = 'translateX(' + translateValue + ')';
            }

            setInterval(nextSlide, 3000); // Change slide every 3 seconds
        </script>


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