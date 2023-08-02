<?php
// Database connection configuration
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($database);

// Create the table
$sql = "CREATE TABLE IF NOT EXISTS cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255),
    product_name VARCHAR(255),
    price DECIMAL(10, 2),
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data into the table
$sql = "INSERT INTO cards (image_url, product_name, price) VALUES
    ('image1.jpg', 'Product 1', 19.99),
    ('image2.jpg', 'Product 2', 29.99),
    ('image3.jpg', 'Product 3', 39.99)
";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully\n";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <h3 class="mb-3"> Means Clothes </h3>
            </div>
            <div class="d-flex justify-content-between align-items-center button">
                <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left"></i>
                </button>
                <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="carousel-item active">
            <div class="cards-wrapper">
                <div class="card">
                    <img class="card-img-top" src="./image/<?php echo $image; ?>" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love1')">
                        <i id="love1" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2"><?php echo $Name; ?></h5>

                            <h5 class="card-title mb-0">$ <?php echo $price; ?></h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./image/<?php echo $image; ?>" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love2')">
                        <i id="love2" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2"><?php echo $Name; ?></h5>

                            <h5 class="card-title mb-0">$ <?php echo $price; ?></h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
                <div class="card d-none d-md-block">
                    <img class="card-img-top" src="./image/<?php echo $image; ?>" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love3')">
                        <i id="love3" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2"><?php echo $Name; ?></h5>

                            <h5 class="card-title mb-0">$ <?php echo $price; ?></h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="cards-wrapper">
                <div class="card">
                    <img class="card-img-top" src="./image/<?php echo $image; ?>" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love4')">
                        <i id="love4" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2"><?php echo $Name; ?></h5>

                            <h5 class="card-title mb-0">$ <?php echo $price; ?></h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./image/<?php echo $image; ?>" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love5')">
                        <i id="love5" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2"><?php echo $Name; ?></h5>

                            <h5 class="card-title mb-0">$ <?php echo $price; ?></h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
                <div class="card d-none d-md-block">
                    <img class="card-img-top" src="./image/<?php echo $image; ?>" alt="Product Image">
                    <button class="btn btn-love" data-toggle="collapse" onclick="toggleLove('love6')">
                        <i id="love6" class="bi bi-heart"></i>
                    </button>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">

                            <h5 class="card-title mb-2"><?php echo $Name; ?></h5>

                            <h5 class="card-title mb-0">$ <?php echo $price; ?></h5>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                            <h6><del style="color: red;">$20.99</del></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>