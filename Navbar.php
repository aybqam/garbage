
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
                    <ul class="dropdown-menu dropdown-menu-end person-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: -103px;">
                        <?php if (!isset($_SESSION['valid'])) { ?>
                        <li>
                            <a class="dropdown-item" href="Login.php">Login</a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li>
                            <a id="username-item" class="dropdown-item" href="logout.php">Logout</a>
                        </li>
                        <?php } ?>
                    </ul>
 
                </li>
            </ul>
        </div>
    </div>
</nav>
