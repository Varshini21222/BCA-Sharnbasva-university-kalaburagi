<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Asset\css\megastyle.css">
        <link rel="stylesheet" type="text/css" href="Asset\css\foter.css">

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

        </style>

    </head>
    <body>
        <img src="Asset\img\header.png" width="100%">
        <div id="navbar" class="mt-0 mb-2 d-md-block d-none">
            <div class="container">
                <div class="d-flex justify-content-right align-items-center">
                    <div class="menu-item"></div>
                    <div class="menu-item">
                        <a href="index.php" class="menu-link">HOME </a>
                    </div>
    
                    <div class="menu-item">
                        <a href="contact.php" class="menu-link">Contact Us<i class="fa fa-caret-down"></i></a>
                    </div>
                    
                    <div class="menu-item">
                        <a href="about.php" class="menu-link">About Us</a>
                    </div>
                    <div class="menu-item">
                        <a href="admin\login.php" class="menu-link">Login</a>
                    </div>
                    <div class="menu-item">
                        <a href="register.php" class="menu-link">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <marquee scrollamount="10"><p><font size="8px" style="Times New Roman" color="red">Bachelor of Computer Applications (Co-Ed) </font></p></marquee><hr>

        <div id="slider-container">
        <div id="image-slider">
            <img class="slider-image" src="admin/gallery/IMG-20220815-WA0022.jpg" alt="Image 1">
            <img class="slider-image" src="admin/gallery/IMG20220812170725.jpg" alt="Image 2">
            <img class="slider-image" src="admin/gallery/IMG-20220815-WA0034.jpg" alt="Image 3">
            <img class="slider-image" src="admin/faculty/back.jpg" alt="Image 3">
            <img class="slider-image" src="admin/gallery/faculty1.jpg" alt="Image 4">
            <img class="slider-image" src="admin/gallery/hod.jpg" alt="Image 5">
            <img class="slider-image" src="admin/gallery/sahana.jpg" alt="Image 6">
            <img class="slider-image" src="admin/gallery/kg_patil.jpg" alt="Image 7">
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

        setInterval(nextSlide, 3000); // Change slide every 5 seconds
        </script>

        <!-- Add this section at the end of your HTML body -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <img src="Asset\img\foter.png" alt="University Logo">
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