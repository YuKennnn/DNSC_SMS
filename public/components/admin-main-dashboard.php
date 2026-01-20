<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed" style="min-height: 100vh;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Dashboard</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white bg-success">
                            <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../../public/components/products.php" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-cart"></i> <span class="ms-1 d-none d-sm-inline">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-bag"></i> <span class="ms-1 d-none d-sm-inline">Orders</span>
                        </a>
                    </li>
                    <li>    
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-gear"></i> <span class="ms-1 d-none d-sm-inline">Settings</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4"></i>
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../../../public/landing.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 ms-sm-auto col-xl-10 px-md-4" style="margin-left: 16.66%;">
            <div class="pt-3">
                <!-- Your main content goes here -->
                <?php include 'admin-content.php'; ?>
            </div>
        </div>
    </div>
</div>
<style>
    /* Import Google Font: Inter */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    :root {
        --primary-color: #4361ee;
        --secondary-color: #3f37c9;
        --sidebar-bg: #0f172a; /* Slate 900 */
        --bg-color: #f8fafc; /* Slate 50 */
        --text-dark: #1e293b;
        --text-muted: #64748b;
    }

    body {
        font-family: 'Inter', sans-serif !important;
        background-color: var(--bg-color);
    }

    /* Sidebar Styling */
    .bg-sidebar {
        background-color: var(--sidebar-bg);
        box-shadow: 4px 0 10px rgba(0,0,0,0.05);
    }

    .brand-icon {
        width: 35px;
        height: 35px;
        background: var(--primary-color);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .nav-link {
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .nav-link:hover, .nav-link.active-nav {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff !important;
        transform: translateX(5px);
    }

    .active-nav {
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
    }

    /* User Avatar */
    .avatar-circle {
        width: 32px;
        height: 32px;
        background-color: rgba(255,255,255,0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-link:hover {
        background-color: rgba(255,255,255,0.05);
    }

    /* Background Utility */
    .bg-light-gray {
        background-color: var(--bg-color);
    }
</style>

