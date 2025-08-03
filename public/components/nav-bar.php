<nav class="navbar navbar-expand-lg bg-body-tertiary bg-success shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-success-emphasis fs-2 fw-bold fst-italic" href="index.php">SMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link <?= $current_page == 'home' ? 'active text-success-emphasis fw-bold fs-5 text-decoration-underline' : '' ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?= $current_page == 'services' ? 'active text-success-emphasis fw-bold fs-5 text-decoration-underline' : '' ?>" href="services.php">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?= $current_page == 'contact' ? 'active text-success-emphasis fw-bold fs-5 text-decoration-underline' : '' ?>" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?= $current_page == 'coming soon' ? 'active text-success-emphasis fw-bold fs-5 text-decoration-underline' : '' ?>" href="coming-soon.php">coming soon</a>
            </li>
        </ul>
        </div>
        <div class="d-flex gap-3" role="Authentification">
        <a href="/public/auth/login/login.php" class="btn btn-outline-success">Login</a>
        <a href="/public/auth/register/register.php" class="btn btn-outline-success">Register</a>
        </div>
    </div>
</nav>