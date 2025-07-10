<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-p0XJ7pFvN+HpJr+3bSxWJZ2QOZ4SzWnccDdGy5WrAv8eNR8F/9+aWQQYvF+bvC1ebB+v6CVPfH/NXAlCP9xB4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
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
                                        <a class="nav-link" href="#portfolio-section">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#skills">skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#competitions">Competitions & Events</a>
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
    <section id="hero">
        <h1>Welcome to my creative universe —</h1>
        <p>where every click unveils a new story, a new skill, a new spark.</p>
        <a href="#about-section" class="cta-button">Ready to explore what I can do?</a>
    </section>

    <!-- Floating Letters -->
    <div class="floating-letters" id="floating-letters"></div>
    <!-- about-section -->
    <section id="about-section " >
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
                    <a href="#cv" class="btn btn-secondary">My CV</a>
                </div>
            </div>

            <div class="about-image">
                <div class="image-container">
                    <img src="./pictures/me.jpg" alt="Wieam Aarika - Full Stack Developer">
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio-section">
        <div class="title-container">
            <h1 class="main-title">
                <span id="typewriter" class="typewriter">Projects</span>
                <div class="title-underline"></div>

            </h1>
        </div>

        <div class="projects-container">
            <div class="projects-grid">
                <div class="project-item" data-project="ecommerce">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=500&h=600&fit=crop" alt="E-Commerce App" class="project-image">
                    <div class="project-overlay">
                        <h3 class="project-title">E-Commerce App</h3>
                        <p class="project-description">Full-stack MERN shop with real-time cart and payment integration</p>
                    </div>
                </div>

                <div class="project-item" data-project="dashboard">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500&h=600&fit=crop" alt="Analytics Dashboard" class="project-image">
                    <div class="project-overlay">
                        <h3 class="project-title">Analytics Dashboard</h3>
                        <p class="project-description">React dashboard with interactive charts and real-time data visualization</p>
                    </div>
                </div>

                <div class="project-item" data-project="mobile">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=500&h=800&fit=crop" alt="Mobile App" class="project-image">
                    <div class="project-overlay">
                        <h3 class="project-title">Mobile Social App</h3>
                        <p class="project-description">React Native app with social features, real-time messaging and photo sharing</p>
                    </div>
                </div>

                <div class="project-item" data-project="ai">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=500&h=600&fit=crop" alt="AI Platform" class="project-image">
                    <div class="project-overlay">
                        <h3 class="project-title">AI Platform</h3>
                        <p class="project-description">Machine learning platform with Python backend and TensorFlow integration</p>
                    </div>
                </div>

                <div class="project-item" data-project="blockchain">
                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?w=500&h=600&fit=crop" alt="Blockchain App" class="project-image">
                    <div class="project-overlay">
                        <h3 class="project-title">Blockchain DApp</h3>
                        <p class="project-description">Decentralized application with Smart contracts and Web3 integration</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center;">
                <button class="export-btn" onclick="exportProjects()">Export More</button>
            </div>
        </div>
    </section>
    <section id="skills">
        <div class="skills-container">
            <h1 class="skills-title">MY SKILLS</h1>

            <div class="carousel-container">
                <!-- First Row - Moving Right to Left -->
                <div class="carousel-row row-1">
                    <div class="carousel-track">
                        <div class="skill-item skill-Mysql">
                            <div class="skill-icon"><img src="./pictures/mysql.png" > </div>
                            <div class="skill-name">Mysql</div>
                        </div>
                        <div class="skill-item skill-php">
                            <div class="skill-icon"><img src="./pictures/php.png" ></div>
                            <div class="skill-name">php</div>
                        </div>
                        <div class="skill-item skill-html">
                            <div class="skill-icon"><img src="./pictures/html.png" ></div>
                            <div class="skill-name">HTML5</div>
                        </div>
                        <div class="skill-item skill-Flutter">
                            <div class="skill-icon"><img src="./pictures/flutter-removebg-preview.png" ></div>
                            <div class="skill-name">Flutter</div>
                        </div>
                        <div class="skill-item skill-react">
                            <div class="skill-icon"><img src="./pictures/react.png" ></div>
                            <div class="skill-name">React</div>
                        </div>
                        <div class="skill-item skill-pycharm">
                            <div class="skill-icon"><img src="./pictures/pycharm.png" ></div>
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
                            <div class="skill-icon"><img src="./pictures/mysql.png" > </div>
                            <div class="skill-name">Mysql</div>
                        </div>
                        <div class="skill-item skill-php">
                            <div class="skill-icon"><img src="./pictures/php.png" ></div>
                            <div class="skill-name">php</div>
                        </div>
                        <div class="skill-item skill-html">
                            <div class="skill-icon"><img src="./pictures/html.png" ></div>
                            <div class="skill-name">HTML5</div>
                        </div>
                        <div class="skill-item skill-Flutter">
                            <div class="skill-icon"><img src="./pictures/flutter-removebg-preview.png" ></div>
                            <div class="skill-name">Flutter</div>
                        </div>
                        <div class="skill-item skill-react">
                            <div class="skill-icon"><img src="./pictures/react.png" ></div>
                            <div class="skill-name">React</div>
                        </div>
                        <div class="skill-item skill-pycharm">
                            <div class="skill-icon"><img src="./pictures/pycharm.png" ></div>
                            <div class="skill-name">pycharm</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./includes/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>