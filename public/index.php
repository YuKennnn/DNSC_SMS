<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/links.php'; ?>
    <title>Landing Page | SMS</title>
</head>
<body>

<section class="nav-section">
    <?php 
    $current_page = 'home';
    include 'components/nav-bar.php'; ?>
</section>

<section class="section-content mt-5">
    <div class="container">
        <h1>Home landing page content</h1>
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Welcome to DNSU</h1><br>
                <h1 class="display-4 fst-italic">Online Shop</h1>
                <p class="lead my-3">DNSU Online Shop is a platform for shopping your favorite DNSU clothings.</p>
                <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>
</section>

</body>
</html>