let products = {
    data: [
      {
        productName: "Byjus",
        category: "Education",
        job:"job available",
        image: "byjus.jpeg",
      },
      {
        productName: "Byjus",
        category: "Employment",
        job:"job available",
        image: "byjus.jpeg",
      },
      {
        productName: "PharmEasy",
        category: "Medical",
        job: "job available",
        image: "pharmeasy.jpeg",
      },
      {
        productName: "PharmEasy",
        category: "Employment",
        job: "job available",
        image: "pharmeasy.jpeg",
      },
      {
        productName: "Drawinbox",
        category: "Tech",
        job: "job not available",
        image: "drawinbox.jpeg",
      },
      {
        productName: "Cyient",
        category: "Consultancy",
        job: "job not available",
        image: "cyient.jpeg",
      },
      {
        productName: "Innovapptive",
        category: "Tech",
        job: "job available",
        image: "innovapptive.jpeg",
      },
      {
        productName: "Innovapptive",
        category: "Employment",
        job: "job available",
        image: "innovapptive.jpeg",
      },
      {
        productName: "ValueLabs",
        category: "Tech",
        job: "job available",
        image: "valuelabs.jpeg",
      },
      {
        productName: "ValueLabs",
        category: "Employment",
        job: "job available",
        image: "valuelabs.jpeg",
      },
      {
        productName: "Zenoti",
        category: "Tech",
        job: "job not available",
        image: "zenoti.jpeg",
      },
      {
        productName: "CommLab India",
        category: "Education",
        job: "job available",
        image: "commlab India.jpeg",
      },
      {
        productName: "CommLab India",
        category: "Employment",
        job: "job available",
        image: "commlab India.jpeg",
      },
      {
        productName: "NowFloats",
        category: "Tech",
        job: "job not available",
        image: "nowfloats.jpeg",
      },
      {
        productName: "MyGate",
        category: "Others",
        job: "job available",
        image: "mygate.jpeg",
      },
      {
        productName: "MyGate",
        category: "Employment",
        job: "job available",
        image: "mygate.jpeg",
      },
      {
        productName: "T-Hub",
        category: "Tech",
        job: "job available",
        image: "t-hub.jpeg",
      },
      {
        productName: "T-Hub",
        category: "Employment",
        job: "job available",
        image: "t-hub.jpeg",
      },
      {
        productName: "Inforich Technology",
        category: "Others",
        job: "job not available",
        image: "inforich.jpeg",
      },
      {
        productName: "Smartron",
        category: "Tech",
        job: "job available",
        image: "smartron.jpeg",
      },
      {
        productName: "Smartron",
        category: "Employment",
        job: "job available",
        image: "smartron.jpeg",
      },
      {
        productName: "Techwave",
        category: "Tech",
        job: "job available",
        image: "techwave.jpeg",
      },
      {
        productName: "Techwave",
        category: "Employment",
        job: "job available",
        image: "techwave.jpeg",
      },
      {
        productName: "InstaSafe",
        category: "Tech",
        job: "job available",
        image: "instasafe.jpeg",
      },
      {
        productName: "InstaSafe",
        category: "Employment",
        job: "job available",
        image: "instasafe.jpeg",
      },
    ],
  };
  
  for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);
    // job availability
    let jobAvailability = document.createElement("h6");
    jobAvailability.innerText = i.job === "job available" ? "Job Available" : "Job Not Available";
    container.appendChild(jobAvailability);

  
    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }
  
  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  
    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on 'all' button click
      if (value == "all") {
        element.classList.remove("hide");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide");
        } else {
          //hide other elements
          element.classList.add("hide");
        }
      }
    });
  }
  
  //Search button click
  document.getElementById("search").addEventListener("click", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
  
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      if (element.innerText.includes(searchInput.toUpperCase())) {
        //display matching card
        cards[index].classList.remove("hide");
      } else {
        //hide others
        cards[index].classList.add("hide");
      }
    });
  });
  
  //Initially display all products
  window.onload = () => {
    filterProduct("all");
  };

  // Add an event listener to the search popup trigger button
document.getElementById("search-popup-trigger").addEventListener("click", () => {
    // Display the search popup
    document.getElementById("search-popup").classList.remove("hide");
  });
  
  // Add an event listener to the search button in the popup
  document.getElementById("search").addEventListener("click", () => {
    // Perform search
    performSearch();
  });
  
  // Function to perform search
  function performSearch() {
    // Hide the search popup
    document.getElementById("search-popup").classList.add("hide");
  
    // Initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
  
    // Loop through all elements
    elements.forEach((element, index) => {
      // Check if text includes the search value
      if (element.innerText.includes(searchInput.toUpperCase())) {
        // Display matching card
        cards[index].classList.remove("hide");
      } else {
        // Hide others
        cards[index].classList.add("hide");
      }
    });
  }