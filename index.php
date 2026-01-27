<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <!-- Font Awesome CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Portfolio</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about-section">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#projects">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#skills">skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#portfolio-section">Competitions & Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!-- section 1 -->
    <section id="hero">
        <h1>Welcome to my creative universe —</h1>
        <p>where every click unveils a new story, a new skill, a new spark.</p>
        <a href="#about-section" class="cta-button">Ready to explore what I can do?</a>
    </section>

    <!-- Floating Letters -->
    <div class="floating-letters" id="floating-letters"></div>
    <!-- section 2 -->
    <section id="about-section" style="padding-top: 50px;">
        <div class="section-title">
            <h2>About Me</h2>
            <div class="title-underline"></div>
        </div>
        <div class="about-container">
            <div class="about-content ">
                <h3>Hi, I'm Wieam Aarika</h3>
                <div class="typewriter-container">
                    <span class="typewriter-text" id="typewriter"></span>
                </div>
                <p class="about-description">
                    I'm a passionate junior developer with a creative spirit. I love building elegant, functional web applications and I'm always learning new technologies to grow. I also have a strong interest in robotics and mobile development. Let's build the future together.
                </p>
                <div class="button-container">
                    <a href="#contact" class="btn btn-primary">Hire Me</a>
                    <a href="cv.php" class="btn btn-primary">My CV</a>
                    
                </div>
            </div>

            <div class="about-image">
                <div class="image-container">
                    <img src="./pictures/image.png" alt="Wieam Aarika - Mobile Developer">
                </div>
            </div>
        </div>
    </section>
    <!-- projects -->
    <section class="portfolio-section" id="projects">
        <div class="section-title">
            <h2>My Own Projects</h2>
            <div class="title-underline"></div>
        </div>
<div class="projects-container">
    <div class="projects-grid">

        <!-- KinderWorld -->
        <div class="project-item" data-project="education">
            <img src="./pictures/kinderworld.png" alt="KinderWorld" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">KinderWorld</h3>
                <p class="project-description">
                    KinderWorld is an educational application designed for young children to learn letters, numbers, shapes, and colors in a fun, safe, and interactive way.
                </p>
            </div>
        </div>

        <!-- Swiply -->
        <div class="project-item" data-project="social">
            <img src="./pictures/swiply.png" alt="Swiply" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">Swiply</h3>
                <p class="project-description">
                    Swiply is a social mobile app that helps people make new friends through a simple and modern swipe-based system, offering a smooth and engaging user experience.
                </p>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="project-item" data-project="portfolio">
            <img src="./pictures/rihlaapp.png" alt="rihlaapp" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">Rihlaapp</h3>
                <p class="project-description">
                    A personal organasation app thats help me to organize my daily tasks.
                </p>
            </div>
        </div>

        <!-- Hydromatle -->
        <div class="project-item" data-project="mobile">
            <img src="./pictures/hydromatle.png" alt="Hydromatle" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">Hydromatle</h3>
                <p class="project-description">
                    HydroMate is an Android application designed and developed from scratch to help users track their daily water intake and stay hydrated.
                </p>
            </div>
        </div>

        <!-- Bankify -->
        <div class="project-item" data-project="finance">
            <img src="./pictures/Bankify.png" alt="Bankify" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">Bankify</h3>
                <p class="project-description">
                    A modern banking web application integrating advanced performance optimization and strong security solutions.
                </p>
            </div>
        </div>

        <!-- TaxiBeex -->
        <div class="project-item" data-project="transport">
            <img src="./pictures/taxibee.png" alt="TaxiBeex" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">TaxiBeex</h3>
                <p class="project-description">
                    A smart ride-booking platform that connects passengers with drivers for fast, reliable, and safe transportation.
                </p>
            </div>
        </div>

        <!-- Safe Ride -->
        <div class="project-item" data-project="web">
            <img src="./pictures/safeRide.png" alt="Safe Ride" class="project-image">
            <div class="project-overlay">
                <h3 class="project-title">Safe Ride</h3>
                <p class="project-description">
                    Safe Ride is a web platform designed to promote secure and reliable travel experiences.
                </p>
            </div>
        </div>

    </div>
</div>

    </section>
    <!-- section 3 -->
    <section id="portfolio-section" style="padding-top: 30px;">
        <div class="section-title">
            <h2> Competitions & Events</h2>
            <div class="title-underline"></div>
        </div>
        <!-- Background Resort -->
        <div class="background-resort"></div>

        <!-- Glow Effects -->
        <div class="glow-blue"></div>

        <!-- Dashed Frame -->
        <div class="dashed-frame"></div>

        <!-- Main Container -->
        <div class="container MainContainer">
            <div class="cards-grid">
           <div class="physical-card card-1">
                    <img src="./pictures/me.jpg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-2">
                    <img src="./pictures/certif.jpg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-3">
                    <img src="./pictures/chefstad.jpg" alt="portfolio" class="project-image">

                </div>
 
                <!-- Physical Cards -->
                <div class="physical-card card-1">
                    <img src="./pictures/agadir.jpg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-2">
                    <img src="./pictures/stad1.jpg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-3">
                    <img src="./pictures/compititio.jpg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-4">
                    <img src="./pictures/forum.jpg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-5">
                    <img src="./pictures/formatrice.jpeg" alt="portfolio" class="project-image">

                </div>
                 <div class="physical-card card-5">
                    <img src="./pictures/formatrice2.jpeg" alt="portfolio" class="project-image">

                </div>
                 <div class="physical-card card-5">
                    <img src="./pictures/stand.jpeg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-5">
                    <img src="./pictures/stadier_caf.jpeg" alt="portfolio" class="project-image">

                </div>
                <div class="physical-card card-5">
                    <img src="./pictures/stand3.jpeg" alt="portfolio" class="project-image">

                </div>
            </div>
        </div>

    </section>
    <!-- section 4 -->
    <section id="skills">
        <div class="skills-container">
            <h1 class="skills-title">MY SKILLS</h1>
            <div class="carousel-container">
                <!-- First Row - Moving Right to Left -->
                <div class="carousel-row row-1">
                    <div class="carousel-track">
                        <div class="skill-item skill-Mysql">
                            <div class="skill-icon"><img src="./pictures/mysql.png"> </div>
                            <div class="skill-name">Mysql</div>
                        </div>
                        <div class="skill-item skill-php">
                            <div class="skill-icon"><img src="./pictures/php.png"></div>
                            <div class="skill-name">php</div>
                        </div>
                        <div class="skill-item skill-html">
                            <div class="skill-icon"><img src="./pictures/html.png"></div>
                            <div class="skill-name">HTML5</div>
                        </div>
                        <div class="skill-item skill-Flutter">
                            <div class="skill-icon"><img src="./pictures/flutter-removebg-preview.png"></div>
                            <div class="skill-name">Flutter</div>
                        </div>
                        <div class="skill-item skill-react">
                            <div class="skill-icon"><img src="./pictures/react.png"></div>
                            <div class="skill-name">React</div>
                        </div>
                        <div class="skill-item skill-pycharm">
                            <div class="skill-icon"><img src="./pictures/pycharm.png"></div>
                            <div class="skill-name">pycharm</div>
                        </div>

                        <!-- Duplicated for seamless loop -->
                        <div class="skill-item skill-javascript">
                            <div class="skill-icon"><img src="./pictures/js.png" alt=""> </div>
                            <div class="skill-name">javascript</div>
                        </div>
                        <div class="skill-item skill-dart">
                            <div class="skill-icon"><img src="./pictures/dart.png" alt="dart"> </div>
                            <div class="skill-name">Dart</div>
                        </div>
                        <div class="skill-item skill-Python">
                            <div class="skill-icon"><img src="./pictures/python-logo-png_seeklogo-273830-removebg-preview.png" alt="python"> </div>
                            <div class="skill-name">Python</div>
                        </div>
                        <div class="skill-item skill-Kotlin">
                            <div class="skill-icon"><img src="./pictures/ko114k438-kotlin-logo-kotlin-logo-png-transparent-amp-svg-vector-freebie-supply-removebg-preview.png" alt="kotlin"> </div>
                            <div class="skill-name">Kotlin</div>
                        </div>
                        <div class="skill-item skill-git">
                            <div class="skill-icon"><img src="./pictures/git.png" alt="git"> </div>
                            <div class="skill-name">Git</div>
                        </div>
                        <div class="skill-item skill-vscode">
                            <div class="skill-icon"><img src="./pictures/vscode.png" alt="vscode"> </div>
                            <div class="skill-name">vscode</div>
                        </div>

                    </div>
                </div>
                <!-- Second Row - Moving Left to Right -->
                <div class="carousel-row row-2">
                    <div class="carousel-track">
                        <div class="skill-item skill-javascript">
                            <div class="skill-icon"><img src="./pictures/js.png" alt="javascript"> </div>
                            <div class="skill-name">javascript</div>
                        </div>
                        <div class="skill-item skill-dart">
                            <div class="skill-icon"><img src="./pictures/dart.png" alt="dart"> </div>
                            <div class="skill-name">Dart</div>
                        </div>
                        <div class="skill-item skill-Python">
                            <div class="skill-icon"><img src="./pictures/python-logo-png_seeklogo-273830-removebg-preview.png" alt="python"> </div>
                            <div class="skill-name">Python</div>
                        </div>
                        <div class="skill-item skill-Kotlin">
                            <div class="skill-icon"><img src="./pictures/ko114k438-kotlin-logo-kotlin-logo-png-transparent-amp-svg-vector-freebie-supply-removebg-preview.png" alt="kotlin"> </div>
                            <div class="skill-name">Kotlin</div>
                        </div>
                        <div class="skill-item skill-git">
                            <div class="skill-icon"><img src="./pictures/git.png" alt="git"> </div>
                            <div class="skill-name">Git</div>
                        </div>
                        <div class="skill-item skill-vscode">
                            <div class="skill-icon"><img src="./pictures/vscode.png" alt="vscode"> </div>
                            <div class="skill-name">vscode</div>
                        </div>

                        <!-- Duplicated for seamless loop -->
                        <div class="skill-item skill-Mysql">
                            <div class="skill-icon"><img src="./pictures/mysql.png"> </div>
                            <div class="skill-name">Mysql</div>
                        </div>
                        <div class="skill-item skill-php">
                            <div class="skill-icon"><img src="./pictures/php.png"></div>
                            <div class="skill-name">php</div>
                        </div>
                        <div class="skill-item skill-html">
                            <div class="skill-icon"><img src="./pictures/html.png"></div>
                            <div class="skill-name">HTML5</div>
                        </div>
                        <div class="skill-item skill-Flutter">
                            <div class="skill-icon"><img src="./pictures/flutter-removebg-preview.png"></div>
                            <div class="skill-name">Flutter</div>
                        </div>
                        <div class="skill-item skill-react">
                            <div class="skill-icon"><img src="./pictures/react.png"></div>
                            <div class="skill-name">React</div>
                        </div>
                        <div class="skill-item skill-pycharm">
                            <div class="skill-icon"><img src="./pictures/pycharm.png"></div>
                            <div class="skill-name">pycharm</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 5 -->
    <section class="contact-section" id="contact">

        <div class="container ">

            <div class="contact-content">
                <!-- Contact Form -->
                <div class="contact-form">
                    <h1 class="form-title">Send Me a Message</h1>
                    <form id="contactForm" action="mail.php" method="POST">
                        <div class="form-group">
                            <label for="fullName">Full name :</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone :</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Leave a Message :</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Submit Form</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <h2 class="info-title">GET IN TOUCH</h2>
                    <h3 class="info-subtitle">Let's Connect & Collaborate!</h3>
                    <p class="info-description">
                        Have a project in mind or just want to say HI? My inbox is open to creative conversations,
                        tech talk, or anything in between.
                    </p>
                    <ul class="contact-details">
                        <li>
                            <span class="icon p-3"><i class="fas fa-map-marker-alt"></i></span>
                            Salé, Rabat - Morocco
                        </li>
                        <li>
                            <span class="icon p-3"><i class="fas fa-envelope"></i></span>
                            aarikawieam@gmail.com
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>PORTFOLIO</h3>
                    <p>Creating digital experiences with purpose and passion. Explore a portfolio built with clean code, creative design, and a touch of innovation.</p>
                </div>
                <div class="footer-section">
                    <h3>SERVICES</h3>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">App Prototyping</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Branding & Identity</a></li>
                        <li><a href="#">Frontend Development</a></li>
                        <li><a href="#">Portfolio Building Help</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about-section">About me</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#portfolio-section">Competitions & Events</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Follow me</h3>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/wiam-aarika-a2977432b/" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/wieam-ar" class="social-icon"> <i class="fab fa-github" style="color: wheat;"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-section d-fles justify-center ">
                <p class="text-center">
                    &copy;Tous Droit Reserver-Wiam AARIKA
                </p>
            </div>
        </div>
    </footer>

    <script src="./includes/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>