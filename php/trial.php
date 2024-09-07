<!DOCTYPE html>
<html>
    <head>
        <title>Trial</title>
        <link rel="stylesheet" href="trial.css">
        <!-- Google Font -->
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
    rel="stylesheet"
  />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="filter.css" />
    </head>
    <body>
        
        <nav id="navbar" class="navigation">
            <div id="logo">
                <img src="SI logo.jpeg" alt="startup logo.com">
            </div>
            <ul>
                <li class="item"><a href="#home">HOME</a></li>
                <li class="item"><a href="#services">STARTUPS</a></li>
                <li class="item"><a href="#About">ABOUT US</a></li>
                <li class="item"><a href="index2.php">CONTACT US</a></li>
                <li class="item"><a href="index3.php">APPLY NOW</a></li>
                <!--<label for="search">Search</label>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="type to search">
                </div>-->
                <!-- HTML -->
                <div id="user-info" class="hidden">
                <span id="username"></span>
                <button id="logout-button" >LOGOUT</button>
            </div>

            </ul>
        </nav>
        <section id="home">
            <div id="heading" class="circle" >
                <h1>STARTUP <br>INITIATIVE</h1>
        </div>
        <div class="welcome">
            <h5>WELCOME ...!</h5>
        </div>
        <div id="heading1" class="circlex">
            <h6>Navigate the Web, Discover Opportunities: <br> Your Gateway to Information and Employment.</h6>
        </div>
            <div  id="heading2" class="circle " class="edit" >
                <h6>Discover tomorrow's startups, today. <br>
                    We help you find early-stage startups before they make it big.</h6>
        </div>
        <div class="cont" >
            <div class="wrapper" >
                <div id="search-container" class="filter-box">
                    <input
                      type="search"
                      id="search-input"
                      placeholder="Search here.."
                    />
                    <button id="search">Search</button>
                  </div>
        
              <div id="buttons">
                <button class="button-value" onclick="filterProduct('all')">All</button>
                <!-- <button class="button-value" onclick="filterProduct('Employment')">
                  Employment
                </button> -->
                <!-- <button class="button-value" onclick="filterProduct('Investment')">
                    Investment
                  </button> -->
                <button class="button-value" onclick="filterProduct('Tech')">
                  Tech
                </button>
                <button class="button-value" onclick="filterProduct('Medical')">
                  Medical
                </button>
                <br>
                <button class="button-value" onclick="filterProduct('Education')">
                    Education
                  </button>
                <button class="button-value" onclick="filterProduct('Consultancy')">
                    Consultancy
                  </button>
                <button class="button-value" onclick="filterProduct('Others')">
                    Others
                  </button>
                
              </div>
              <div id="products"></div>
            </div>
        </div>
        </section>

        <section id="services-container">
            <h1 class="h-primary center"><center>STARTUPS</center></h1>
            <div id="services">
                <div class="box">
                    <img src="byjus.jpeg" alt="">
                    <h2 class="h-secondary center">BYJUS</h2>
                    <p class="center">"Fall in love with learning"</p>
                        <a href="byjus.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="pharmeasy.jpeg" alt="">
                    <h2 class="h-secondary center">PHARMA EASY</h2>
                    <p class="center">"Making healthcare accessible and affordable"</p>
                        <a href="pharmaeasy.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="drawinbox.jpeg" alt="">
                    <h2 class="h-secondary center">DRAWINBOX</h2>
                    <p class="center">"Unleash your creativity with art made easy"</p>
                        <a href="drawinbox.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="cyient.jpeg" alt="">
                    <h2 class="h-secondary center">CYLIENT</h2>
                    <p class="center">"Designing tomorrow together"</p>
                        <a href="cyient.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="innovapptive.jpeg" alt="">
                    <h2 class="h-secondary center">INNOVAPPTIVE</h2>
                    <p class="center">"Transforming the digital enterprise"</p>
                        <a href="innovapptive.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="valuelabs.jpeg" alt="">
                    <h2 class="h-secondary center">VALUELABS</h2>
                    <p class="center">"Delivering exponential value"</p>
                        <a href="valuelabs.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="zenoti.jpeg" alt="">
                    <h2 class="h-secondary center">ZENOTI</h2>
                    <p class="center">"Powering the beauty and wellness industry"</p>
                        <a href="zenoti.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="commlab India.jpeg" alt="">
                    <h2 class="h-secondary center">COMMLAB INDIA</h2>
                    <p class="center">"Unlocking the power of eLearning"</p>
                        <a href="commlab.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="nowfloats.jpeg" alt="">
                    <h2 class="h-secondary center">NEWFLOATS</h2>
                    <p class="center">"Digital presence made easy"</p>
                        <a href="nowfloats.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="mygate.jpeg" alt="">
                    <h2 class="h-secondary center">MYGATE</h2>
                    <p class="center">"Your trusted gatekeeper"</p>
                        <a href="mygate.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="t-hub.jpeg" alt="">
                    <h2 class="h-secondary center">T-HUB</h2>
                    <p class="center">"Fueling innovation"</p>
                        <a href="thub.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="inforich.jpeg" alt="">
                    <h2 class="h-secondary center">INFORICH</h2>
                    <p class="center">"Empowering businesses with technology"</p>
                        <a href="inforich.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="smartron.jpeg" alt="">
                    <h2 class="h-secondary center">SMARTRON</h2>
                    <p class="center">"Designed and engineered in India"</p>
                        <a href="smartron.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="techwave.jpeg" alt="">
                    <h2 class="h-secondary center">TECHWAVE</h2>
                    <p class="center">"Accelerating digital transformation"</p>
                        <a href="techwave.html" class="hlink">CLICK HERE</a>
                </div>
                <div class="box">
                    <img src="instasafe.jpeg" alt="">
                    <h2 class="h-secondary center">INSTASAFE</h2>
                    <p class="center">"Secure your digital world"</p>
                        <a href="instasafe.html" class="hlink">CLICK HERE</a>
                </div>
            </div>
        </section>
        <section id="About">
            <h1 class="h-au"><center>ABOUT US</center></h1>
            Welcome to Startup Initiative!
<br>
            At Startup Initiative, we are passionate about startups and the opportunities they bring. Our mission is to be the go-to platform for discovering and exploring the exciting world of startups. Whether you're an aspiring entrepreneur, a job seeker, or simply someone interested in the startup ecosystem, we have you covered.
<br>
            Startup Initiative serves as a central hub for accessing detailed information about startups.
<br>
            Ready to embark on your startup journey or explore new opportunities within this exciting ecosystem? Start browsing our platform, discover inspiring startups, and find your next adventure!
        </section>
        
        <script>
            // Get a reference to the button
const redirectButton = document.getElementById("logout-button");

// Add a click event listener to the button
redirectButton.addEventListener("click", () => {
  // Redirect to the desired HTML file
  window.location.href = "trial2.html";
});

        </script>
        <script src="index.js"></script>
        <script src="filter.js"></script>
    </body>
</html>