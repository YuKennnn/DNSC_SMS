<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/links.php'; ?>
    <title>Landing Page | SMS</title>
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>


<section class="nav-section">
    <?php 
    $current_page = 'home';
    include 'components/nav-bar.php'; ?>
</section>

<section class="content-section mt-5">
    <div class="container">
        <h1>Home landing page content</h1>
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary d-flex">
            <div class="col-lg-8 px-0">
                <h1 class="display-4 fst-italic">Welcome to DNSU</h1><br>
                <h1 class="display-4 fst-italic">Online Shop</h1>
                <p class="lead my-3">DNSU Online Shop is a platform for shopping your favorite DNSU clothings.</p>
                <a href="services.php" class="btn bg-success text-white border border-2 border-dark rounded-0 shadow px-4 py-2 rounded-pill">
                Click Me
                </a>
            </div>
            <div class="col-lg-4 h-75 w-35">
                <img src="../public/image/bg img dnsc.png" alt="DNSU Online Shop" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- About Us Style 1: Simple Two Column -->
<section class="py-5 bg-light mt-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://images.pexels.com/photos/3184430/pexels-photo-3184430.jpeg" class="img-fluid rounded shadow" alt="About Us">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4 text-success-emphasis">About Us</h2>
                <p class="lead text-muted mb-4">I guess we are a passionate and dedicated to practicing our programming skills.</p>
                <p class="mb-4">Since we're only 2 students, we're trying our best to make this project work even though we're trash.</p>
                <div class="row text-center">
                    <div class="col-4">
                        <h4 class="fw-bold text-success">1</h4>
                        <small class="text-muted">Project</small>
                    </div>
                    <div class="col-4">
                        <h4 class="fw-bold text-success">50+</h4>
                        <small class="text-muted">Clients (soon hehe)</small>
                    </div>
                    <div class="col-4">
                        <h4 class="fw-bold text-success">2</h4>
                        <small class="text-muted">Programmers</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="footer-section mt-5">
    <?php include 'components/footer.php'; ?>
</section>
</body>
</html>