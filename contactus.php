<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="stylecu.css" />
    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="./js/index.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navBar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ease Travels</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-lg-0 ml-auto">
            <li class="nav-item homeTab homeIcon">
              <a class="nav-link" aria-current="page" href="commanUser.html" >
                <span class="coustomIcon ">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="coustomText">
                    Home
                </span>
              </a>
            </li>
            <li class="nav-item aboutUSIcon">
                <a class="nav-link" aria-current="page" href="aboutus.html">
                    <span class="coustomIcon">
                        <ion-icon name="accessibility-outline"></ion-icon>
                    </span>
                    <span class="coustomText">
                        About Us
                    </span>
                </a>
            </li>
            <li class="nav-item contactUsIcon ">
                <a class="nav-link" aria-current="page" href="contactus.html">
                    <span class="coustomIcon">
                        <ion-icon name="headset-outline"></ion-icon>
                    </span>
                    <span class="coustomText">
                        Contact Us
                    </span>
                </a>
            </li>            
          </ul>
          <a href="findTickets.html">          
            <button class="btn btn-outline-warning buyticket-button" type="submit">
              Buy Tickets
            </button>
          </a>
          </form>
        </div>
      </div>
    </nav>
    <!--Navbar End-->
    <!--Niwandi Contnt Start-->
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">No 2, Passara Road,</div>
            <div class="text-two">Badulla</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+9412398456</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">EaseTravales@Bus.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p>
            <b>Have any questions?</b>Fill up the form and our Team will get
            back to you
          </p>
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Enter your name" />
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" />
            </div>

            <div class="input-box message-box">
              <textarea placeholder="Enter your message"></textarea>
            </div>
            <div class="button">
              <input type="button" value="Send Now" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Niwandi Contnt End-->
    <!--Footer Start-->
    <footer class="border-top footerbackground">
      <div class="row">
        <div class="col-12 col-md ">
          <span>
          <img class="mb-2" src="../assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
          </span>
          <spa>
              <p>Make Your Journy Easy</p>
          </spa>
          <small class="d-block mb-3 text-body-secondary">&copy; 2017–2023</small>
          <div class="row ">
              <div class="container firstCol">
              <div class="col">
                  <a class="nav-link" aria-current="page" href="#">
                      <span class="coustomIcon SMLF">
                          <ion-icon name="logo-facebook">
                      </span>                        
                  </a> 
              </div>
              <div class="col">
                  <a class="nav-link" aria-current="page" href="#">
                      <span class="coustomIcon SMLI">
                          <ion-icon name="logo-instagram">
                      </span>                        
                  </a> 
              </div>
              <div class="col">
                  <a class="nav-link" aria-current="page" href="#">
                      <span class="coustomIcon SMLW">
                          <ion-icon name="logo-whatsapp">
                      </span>                        
                  </a> 
              </div>
              <div class="col ">          
                  <a class="nav-link" aria-current="page" href="#">
                      <span class="coustomIcon SMLT">
                          <ion-icon name="logo-twitter">
                      </span>                        
                  </a>    
              </div>
              </div>
          </div>
        </div>
        <div class="col-6 col-md">
          <h5>Links</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="nav-link" aria-current="page" href="#">
              <span class="coustomIcon">
                  <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="coustomText">
                  Home
              </span>
            </a>
          </li>
            <li class="mb-1"> <a class="nav-link" aria-current="page" href="#">
              <span class="coustomIcon">
                  <ion-icon name="accessibility-outline"></ion-icon>
              </span>
              <span class="coustomText">
                  About Us
              </span>
          </a>
          </li>
            <li class="mb-1">
              <a class="nav-link" aria-current="page" href="#">
                  <span class="coustomIcon">
                      <ion-icon name="headset-outline"></ion-icon>
                  </span>
                  <span class="coustomText">
                      Contact Us
                  </span>
              </a>
      </li>
            </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Policies</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link text-decoration-none listtext" href="#">privacy Policy</a></li>
            <li class="mb-1"><a class="link text-decoration-none listtext" href="#">Terms & Conditions</a></li>
            <li class="mb-1"><a class="link text-decoration-none listtext" href="#">Ticket Policy</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Contact us</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none listtext" href="#">
              <span class="coustomIcon">
                  <ion-icon name="location-outline"></ion-icon>
              </span>
              <span class="coustomText listtext2">
                  No2, Passara Raod, Badulla.
              </span>
          </a>
      </li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
              <span class="coustomIcon">
                  <ion-icon name="call-outline"></ion-icon>
              </span>
              <span class="coustomText listtext2">
                  +94123987456
              </span>
          </a>
      </li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
              <span class="coustomIcon">
                  <ion-icon name="at-outline"></ion-icon>
              </span>
              <span class="coustomText listtext2">
                  EaseTravales@Bus.com
              </span>
          </a>
      </li>              
          </ul>
        </div>
      </div>
    </footer>
    <!--Footer End-->
  </body>
</html>
