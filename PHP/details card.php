<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Card with Love Button</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">


    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">

    <!-- SweetAlert2 -->
    <link href="./CSS/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <style>

        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f5f5f5;
        }


        .btn-love {
            position: absolute;
            top: 0;
            right: 0;
            margin: 1rem;
            z-index: 1;
        }
        .btn-love i {
            font-size: 2rem;
            color: #dc3545;
        }
        .btn-love i.fill {
            color: red;
        }
        .flex-column {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .modal-header {
            display: flex;
            gap: 70px;
        }

        li {
            color: Transparent;
            font-size: 20px;
        }
        .bg-skyblue {
            background-color: #1a75ff;
        }
        .nav-link {
            color: #1a75ff;
        }
        .nav-link:focus , .nav-link:hover {
            color: #1a75ff;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5%;
        }
        .form-control {
            margin-top: -1.5%;
        }

@media (min-width: 360px) and (max-width: 640px) {

            .form-control {
                margin-top: 0%;
            }
            .d-flex {
                margin-top: -3.5%;
            }

        }

        .nav-item {
            margin-top: 9%;
        }

        .form-control {
            border: none;
            border-radius: 20px;
            background-color: #fff;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
        }

        .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }



        .person-menu {
            border: none;
            border-radius: 20px;
            background-color: rgba(0,0,0,0.8);
            padding: 0.5rem;
            box-shadow: none;
            margin-left: -60px;
        }

        .person-menu a {
            color: #fff;
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }

        .person-menu a:hover {
            background-color: rgba(255,255,255,0.2);
        }


        .offcanvas-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            color: black;
            padding: 1rem;
        }

        h5 {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        h6 {
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 0;
        }

        .btn-close {
            color: #212529;
            opacity: 1;
        }

        .offcanvas-body {
            padding: 1rem;
        }

        .card-img-top {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            height: auto;
        }

        .offcanvas {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 3;
            display: none;
            overflow-y: auto;
            outline: 0;
            padding: 0;
            background-color: #fff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        .offcanvas.show {
            display: block;
        }

        .offcanvas-header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem;
            border-bottom: 1px solid #e9ecef;
        }

        .offcanvas-header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .offcanvas-body {
            padding: 0;
        }

        .offcanvas-end {
            width: 40%;
        }

@media (min-width: 1440px) {

.offcanvas-end {
    width: 92%;
}

.offcanvas-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header {
    width: 100%;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}

}

@media (min-width: 768px) and (max-width: 1024px) {

.offcanvas-end {
    width: 92%;
}

.offcanvas-header {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 1rem;
      border-bottom: 1px solid #e9ecef;
}

.modal-header {
      width: 100%;  
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 1px solid #e9ecef;
}



}

@media (min-width: 425px) and (max-width: 768px) {

.offcanvas-end {
    width: 92%;
}

.offcanvas-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header {
    width: 100%;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
} 


}

@media (min-width: 320px) and (max-width: 375px) {

.offcanvas-end {
    width: 100%;
}

.offcanvas-header {
    width: 98%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header {
    width: 34%;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}



}

        .modal-header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-header h5 {
            margin: 0;
            font-size: 1.2rem;
        }

        .modal-header h6 {
            margin: 0;
            color: #6c757d;
            font-size: 1rem;
        }

        .modal-header img {
            margin-right: 1rem;
        }

        .btn-close {
            padding: 0.5rem;
            margin: -0.5rem -0.5rem -0.5rem auto;
            background: Transparent;
            border-color: Transparent;
            font-size: 20px;
        }

       .badge {
          position: absolute;
          top: -10px;
          right: -10px;
          font-size: 0.8em;
          font-weight: bold;
          padding: 0.4em 0.6em;
          text-decoration: none;
       }




        footer {
            background-color: #1a75ff;
            padding: 640px90px 0px;
            height: 330px;
            margin-bottom: 0px;
            margin-top: 0px;

        }

        footer h5 {
            font-size: 18px;
            color: white;
            margin-bottom: 30px;
        }

        footer p {
            font-size: 14px;
            color: white;
            line-height: 1.5;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }

@media (min-width: 360px) and (max-width: 640px) {
            footer {
                background-color: #1a75ff;
                padding: 640px90px 0px;
                height: 600px;
                margin-bottom: 0px;
                margin-top: 30px;
            }

            footer h5 {
                font-size: 18px;
                color: white;
                margin-bottom: 30px;
            }

            footer p {
                font-size: 14px;
                color: white;
                line-height: 1.5;
            }

            footer a {
                color: #fff;
                text-decoration: none;
            }
            footer a:hover {
                text-decoration: underline;
            }
        }




    </style>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-skyblue" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./image/cart2.png" alt="" width="35" height="30" class="d-inline-block align-text-top">
            Dior Store
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExample03">
            <br>
            <form class="d-flex mx-auto">
            <input type="text" id="search-input" class="form-control" placeholder="Search products">
            </form>

            <ul class="d-flex justify-content-evenly">
                <li class="nav-item dropdown">
                <a class="nav-link position-relative" role="button" id="toggleButton" aria-controls="offcanvasRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                    <a href="#offcanvasRight" class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle ms-n1" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasRight" aria-label="Favorites" id="favBadge">0</a>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart 2.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end person-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li id="login-item">
                            <a class="dropdown-item" href="#">Login</a>
                        </li>
                        <li id="logout-item" class="d-none">
                            <a class="dropdown-item" href="#">Ayoub</a>
                        </li>
                        <li id="username-item" class="d-none">
                            <a class="dropdown-item" href="#"></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <h1 id="offcanvasRightLabel">Favorites</h1>
            <button type="button" class="btn-close text-reset" id="closeButton" aria-label="Close">
                <i class="fas fa-close"></i>

            </button>
        </div>

        <div class="offcanvas-body">
            <!-- Off-canvas menu items go here -->

            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 1</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                    <i class="fas fa-close"></i>
                </button>
            </div>

            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 2</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                    <i class="fas fa-close"></i>
                </button>
            </div>

            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 3</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                    <i class="fas fa-close"></i>
                </button>
            </div>

            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 4</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                    <i class="fas fa-close"></i>
                </button>
            </div>

            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 5</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                    <i class="fas fa-close"></i>
                </button>
            </div>
        </div>

    </div>



    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next" onclick="flexCardsDisplay()">
                        <i class="fas fa-th"></i>
                    </a>
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="prev" onclick="columnCardsDisplay()">
                        <i class="fa-solid fa-list"></i>
                    </a>
                </div>



                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide">
                        <div class="carousel-inner">
          <div class="carousel-item active">
          <div id="product-container" class="row">
           
               <!-- Product cards for page 1 -->
        
           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love1')">
                        <i id="love1" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h5 class="card-title mb-0">$1.99</h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love2')">
                        <i id="love2" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$2.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love3')">
                        <i id="love3" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$3.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love4')">
                        <i id="love4" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$4.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love5')">
                        <i id="love5" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$5.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love6')">
                        <i id="love6" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$6.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love7')">
                        <i id="love7" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$7.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love8')">
                        <i id="love8" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$8.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love9')">
                        <i id="love9" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$9.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love10')">
                        <i id="love10" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$10.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love11')">
                        <i id="love11" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$11.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love12')">
                        <i id="love12" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$12.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love13')">
                        <i id="love13" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$13.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love14')">
                        <i id="love14" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$14.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love15')">
                        <i id="love15" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$15.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love16')">
                        <i id="love16" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$16.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">

                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love17')">
                        <i id="love17" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 1</h5>

                            <h4 class="card-title mb-0">$17.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                    <img class="card-img-top" src="./image/dress.png" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love18')">
                        <i id="love18" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2">Product 2</h5>

                            <h4 class="card-title mb-0">$18.99</h4>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
                    </div>
                </div>
            </div>



         <!-- More product cards for page 1... -->


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-4 bg-dark text-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel scelerisque nunc, et placerat metus.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        &copy; 2023 My Ecommerce Store. All Rights Reserved.
                    </p>
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


<script>
// Get the badge element
var badge = document.getElementById('favBadge');

// Get the number of items in the off-canvas menu
var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

// Update the badge number
badge.textContent = numItems;

// Hide the badge if there are no items
if (numItems === 0) {
  badge.style.display = 'none';
}

// Get the number of items in the off-canvas menu
function updateBadge() {
  var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

  // Update the badge number
  badge.textContent = numItems;

  // Hide the badge if there are no items
  if (numItems === 0) {
    badge.style.display = 'none';
  } else {
    badge.style.display = 'inline-block';
  }
}

// Add click event listener to close buttons
var closeButtons = document.querySelectorAll('.btn-close');
for (var i = 0; i < closeButtons.length; i++) {
  closeButtons[i].addEventListener('click', function() {
    var itemId = this.getAttribute('data-item-id');

    // Remove the item from the DOM
    var item = document.getElementById(itemId);
    if (item) {
      item.remove();
    }

    // Update the badge number
    updateBadge();
  });
}
</script>


    <script>

        const toggleButton = document.getElementById('toggleButton');
        const closeButton = document.getElementById('closeButton');
        const offcanvas = document.getElementById('offcanvasRight');

        toggleButton.addEventListener('click', function() {
            offcanvas.classList.add('show');
        });

        closeButton.addEventListener('click', function() {
            offcanvas.classList.remove('show');
        });


    </script>


    <script>
        const closeButton2 = document.querySelectorAll('.btn-close');
        closeButton2.forEach((button) => {
          button.addEventListener('click', () => {
            const modalHeader = button.closest('.modal-header');
            if (modalHeader) {
              modalHeader.remove();
            }
          });
        });
    </script>


    <script>
    
    const searchInput = document.getElementById("search-input");
    searchInput.addEventListener("input", filterProducts);
    
    function filterProducts() {
      // Get the search input value
      const searchValue = document.getElementById("search-input").value.toLowerCase();
      
      // Get all the product cards
      const cards = document.querySelectorAll("#product-container .search");
      
      // Loop through the cards and hide/show them based on the search input value
      cards.forEach(card => {
        const title = card.querySelector(".card-title").textContent.toLowerCase();
        if (title.includes(searchValue)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    }
    
    </script>


    <!-- Bootstrap JS -->
    <script>

        const loginItem = document.getElementById('login-item');
        const logoutItem = document.getElementById('logout-item');
        const usernameItem = document.getElementById('username-item');
        const dropdownMenu = document.querySelector('.person-menu');

        dropdownMenu.addEventListener('click', (event) => {
            if (event.target.textContent === 'Login') {
                const username = 'Logout';
                if (username) {
                    loginItem.classList.add('d-none');
                    logoutItem.classList.remove('d-none');
                    usernameItem.classList.remove('d-none');
                    usernameItem.querySelector('a').textContent = username;
                }
            } else if (event.target.textContent === 'Logout') {
                loginItem.classList.remove('d-none');
                logoutItem.classList.add('d-none');
                usernameItem.classList.add('d-none');
            }
        });

    </script>

    <script>
        function toggleLove(loveID) {
            var icon = document.getElementById(loveID);
            if (document.getElementById("username-item").classList.contains('d-none')) {

                swal(
                    'Warning!',
                    'Please login before adding to favorites!',
                    'warning'
                )

            } else {
                icon.classList.toggle('bi-heart-fill');
                icon.classList.toggle('bi-heart');
            }
        }

        function flexCardsDisplay() {
            var container = document.getElementById("product-container");
            if (container.classList.contains("flex-column")) {
                container.classList.remove("flex-column");
            }
        }

        function columnCardsDisplay() {
            var container = document.getElementById("product-container");
            if (!container.classList.contains("flex-column")) {
                container.classList.add("flex-column");
            }
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="./JavaScript/popper.min.js"></script>
    <script src="./JavaScript/bootstrap.min.js"></script>
    <script src="./JavaScript/bootstrap.bundle.min.js"></script>
    <script src="./JavaScript/all.min.js"></script>
    <script src="./JavaScript/jquery.min.js"></script>
    <script src="./JavaScript/sweetalert2.all.min.js"></script>


</body>
</html>