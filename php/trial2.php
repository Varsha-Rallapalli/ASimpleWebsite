 <!DOCTYPE html>
<html>
    <head>
        <title>Trial2</title>
        <link rel="stylesheet" href="trial2.css">
    </head>
    <body>
        
        <nav id="navbar2" class="navigation">
            <div id="logo2">
                <img src="SI logo.jpeg" alt="startup logo.com">
            </div>
            <ul>
                <li class="item"><a href="#home2">HOME</a></li>
                <li class="item"><a href="#services2">STARTUPS</a></li>
                <li class="item"><a href="#About2">ABOUT US</a></li>
                <!-- <li class="item"><a href="#Contact2">CONTACT US</a></li> -->

                <a href="login.php"><button id="button2">LOGIN/SIGN UP</button></a>

            </ul>
        </nav>
        <section id="home2">
            <div id="heading2" class="circle" >
                <h1>STARTUP <br>INITIATIVE</h1>
        </div>
        <div class="circle">
            <p>Navigate the Web, Discover Opportunities: <br> Your Gateway to Information and Employment.</p>
        </div>
            <div  id="heading22" class="circle" >
                <h6>Discover tomorrow's startups, today. <br>
                    We help you find early-stage startups before they make it big.</h6>
        </div>
        </section>

        <section id="services-container2">
            <h1 class="h-primary center"><center>STARTUPS</center></h1>
            <div id="services2">
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
            </div>
            <div class="extra">
                <marquee behavior="scroll" direction="left" loop="infinite" scrollamount="10">
                    FOR MORE INFORMATION, LOGIN! &#x1F4A5; ENHANCE YOUR EXPERIENCE.&#x1F4A5; EXPLORE INNOVATIVE STARTUPS AND THEIR IMPACTFUL SOLUTIONS.
                </marquee>
            </div>
        </section>
            
        <section id="About2">
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
            // JavaScript code to handle login/logout functionality
    
            // Check if the user is already logged in
            function checkLoggedIn() {
                const isLoggedIn = localStorage.getItem("loggedIn");
                if (isLoggedIn) {
                    const username = localStorage.getItem("username");
                    showLoggedInState(username);
                } else {
                    showLoggedOutState();
                }
            }
    
            // Show the logged-in state
            function showLoggedInState(username) {
                document.getElementById("user-info").classList.remove("hidden");
                document.getElementById("username").textContent = username;
                document.getElementById("logout-button").addEventListener("click", logout);
                document.getElementById("login-button").classList.add("hidden");
            }
    
            // Show the logged-out state
            function showLoggedOutState() {
                document.getElementById("user-info").classList.add("hidden");
                document.getElementById("username").textContent = "";
                document.getElementById("logout-button").removeEventListener("click", logout);
                document.getElementById("login-button").classList.remove("hidden");
            }
    
            // Handle logout
            function logout() {
                localStorage.removeItem("loggedIn");
                localStorage.removeItem("username");
                showLoggedOutState();
            }
    
            // Call the checkLoggedIn function on page load
            checkLoggedIn();
            const searchInput = document.getElementById("search");
            searchInput.addEventListener("input", handleSearch);
    
            function handleSearch(event) {
                const searchTerm = event.target.value.toLowerCase();
                
                // Hide all the startup boxes
                const startupBoxes = document.querySelectorAll(".box");
                startupBoxes.forEach(box => {
                    const title = box.querySelector("h2").textContent.toLowerCase();
                    if (title.includes(searchTerm)) {
                        box.style.display = "block";
                    } else {
                        box.style.display = "none";
                    }
                });
            }
        </script>
        <script src="index.js"></script>
    </body>
</html> 
