<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="calendar.css">
    
    <title>Latinx Health Student Assoc.</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <img class="nav-logo" src="/LHSA/Assets/logo.png">
            
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="#">Events</a>
                <a href="#">About</a>
                <a href="#">Gallery</a>
                <a href="#">Resources</a>
                <a href="#">Transport</a>
            </div>
        </nav>
    </header>

    <section class="hero-section">
        <div class="heroText">
            <h1>Latinx Health</h1>
            <h1>Student Association</h1>

            <div>
                <a class="callToAction join" href="register.html" >Become a Member</a>
                <a class="callToAction learn" href="#">Learn More</a>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h2>What have we been up to?</h2>

        <div class="calendar-grid">
            <div></div>

        </div>
        
        <p>At LHSA we like to provide our members with everything from volunteering opportunities to hands on clinical practice in order to make them the best pre-health students possible. Check out some of our most recent activities below!</p>

        <!-- Gallery -->

    </section>

    <section class="section-break">
        <div class="break-grid-container">
            <img src="/LHSA/Assets/camera-icon.png" class="break-icon">

            <div>
                <div class="break-caption">See more highlights from our past events</div>
        
                <a class="button" href="#">Go to Gallery</a>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h2>Our Latest Event</h2>

        <?php
            echo "PHP goes here";
            echo "commited branch"
        ?>

        <div class="calendar-container">
            <div class="event-title">
                ASTEC Lab Tour
            </div>

            <div class="date-container">
                <div class="month">Sept</div>
                <div class="day">20</div>
            </div>

            <div class="time-location">
                <div class="time">
                    <b>Time</b>: 3:30PM - 5:30PM
                </div>

                <div class="location">
                    <b>Location</b>: Health Sciences Library
                </div>

                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
           
        </div>
    </section>

    <section class="section-break">
        <div class="break-grid-container">
            <img src="/LHSA/Assets/calendar-icon.png" class="break-icon">
    
            <div>
                <div class="break-caption">Take a look at everything we've done</div>
                <a class="button" href="#">Events</a>
            </div>
        </div>
    </section>

    <section class="content-section">
        <h2>Our Mission</h2>

        <p>The Latinx Health Student Association is an organization built to inspire, empower, and motivate Latino students to succeed in healthcare professions such as medicine, nursing, pharmacy, and more.</p>

        <p>​At LHSA We thrive to empower minority students in pre-health and to help them achieve their full potential by giving them resources and opportunities to achieve success in their respective fields. In doing so, we hope to promote diversity and develop culturally competent healthcare providers that will one day help alleviate the health problems and necessities of marginalized communities.</p>

        
    </section>

    <section class="section-break">

        <div class="break-grid-container">
            <img src="/LHSA/Assets/search-icon.png" class="break-icon">

            <div>
                <div class="break-caption">Learn more about LHSA</div>
                <a class="button" href="#">About</a>
            </div>
        </div>

    </section>

    <section class="content-section">
        <h2>We Have Resources For You</h2>

        <div class="resource-grid-container">
            <div>
                <a href="#">
                    <img class="resource-thumbnail" src="/LHSA/Assets/linkThumbnails/aamcPremed.png">
                </a>
                <br>
                <a href="#">AAMC Pre-Med</a>
            </div>
            <div>
                <a href="#">
                    <img class="resource-thumbnail" src="/LHSA/Assets/linkThumbnails/ODI.png">
                </a>
                <br>
                <a href="#">Office of Diversity & Inclusion</a>
            </div>
        </div>
    </section>

    <footer>
        <p>Need to contact us? Send us an email or follow us on social media. Or contact one of our <a href="#">members</a> directly.</p>

        <div class="social-grid-container">
            <div>
                <a href="https://www.facebook.com/LHSA.ua">
                    <img class="social-icon" src="/LHSA/Assets/Icons/facebook-social-icon.png">
                </a>
            </div>
            <div>
                <a href="https://www.instagram.com/lhsaua/">
                    <img class="social-icon" src="/LHSA/Assets/Icons/instagram-social-icon.png">
                </a>
            </div>
            <div>
                <a href="mailto:lhsaua@gmail.com">
                    <img class="social-icon" src="/LHSA/Assets/Icons/email-social-icon.png">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>