<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Infinite Drive | Shop</title>
    <link rel="icon" href="Images/icon.jpg">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      .custom-hover:hover{
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
        cursor: pointer;
      }
      .btn-outline-danger{
        border-radius: 0;
      }
    </style>
</head>
<body>
    <div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top shadow-lg p-2 pe-5">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <span>
                  Infinite Drive
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Infinite Drive</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body align-center">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cars.html">Our Cars</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.isf.gov.lb/en/speedtickets" class="nav-link">Speed Ticket</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.isf.gov.lb/en/mecanique" class="nav-link">Michanic Taxes</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html" class="btn btn-dark position-relative">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>
                          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <span id="cart-counter">0</span>
                          </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.html">Log in</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </nav>
          <br><br><br><br>
    </div>
    <div class="container-fluid">
        <div class="head">
            <h3 class="text-center display-1 text-danger">Our Cars</h3>
            <p class="text-center text-dark fw-lighter" style="font-family: sans-serif;">Your Best Choice</p>
            <hr>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Images/scroll 2.webp" class="d-block w-100 img-fluid"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Images/scroll 3.avif" class="d-block w-100 img-fluid"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Images/scroll1.webp" class="d-block w-100 img-fluid" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <h5 class="text-center">Order Now</h5>
    </div>

    <!--row 1-->

    <div class="row my-5 align-item-center justify-content-center g-3">
        <?php   
            $conn = mysqli_connect('localhost', 'root', '', 'carshop');
            if(!$conn){
                echo 'Connection Error: ' . mysqli_connect_error();
            }
            $query = 'SELECT * FROM car';

            $result = mysqli_query($conn, $query);

            $check = mysqli_num_rows($result) > 0;
            if($check)
            {
                while($row = mysqli_fetch_assoc($result))
                {   ?>
                    <div class="col-md-3 col-lg-4">
                        <div class="card shadow-sm custom-hover">
            
                        <img class="card-img-top" src="<?php echo $row['Photo'] ?>" alt="Car Image">
                
                            <div class="card-body text-center py-4">
                                <h5 class="card-title" style="font-family: 'Poppins';">  <?php echo $row['Car Name'] ?> </h5>
                                <p class="lead card-subtitle">  $<?php echo $row['Price']  ?>  </p>
                                <br>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $row['ID'] ?>" aria-expanded="false" aria-controls="car1">
                                        More Details
                                    </button>
                                    </h2>
                                    <div id="<?php echo $row['ID'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="text-center" >
                                            <?php echo $row['Description'] ?>
                                        </p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <br>
                                <button type="button" class="btn btn-outline-primary" id="liveAlertBtn" onclick="alert('Added Successfully to Cart'), increment(), carttotal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-cart-check text-center" viewBox="0 0 16 16">
                                        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                    Add to Cart
                                </button>  
                                <br><br>
                                <p class="text-muted text-center" style="font-family: 'Poppins'; font-size:12px">  Car Number: #<?php echo $row['ID'] ?> </p>          
                            </div>
                        </div>
                  </div>
                  <?php
                }
            }

        ?>
    </div> <!-- Closing row -->
    <div class="container-fluid align-center bg-dark p-3">
        <br>
        <p class="text-light text-center fw-lighter" style="font-family: Poppins;">Developed & Designed By Ali Hussien</p>
        <p class="text-center text-light fw-lighter" style="font-family: Poppins;"> All Copyright &copy; Reserved 2024</p>
        <br>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>
