<?php
session_start();

// ==========================================
//       DATABASE CONNECTION (ADDED)
// ==========================================
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dsms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../components/links.php' ?> 
    
    <title>Products Management</title>
    <link rel="stylesheet" href="../../public/bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public//fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../public/bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
    <script src="../../public/bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed" style="min-height: 100vh; z-index: 100;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                    <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Admin Dashboard</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="../../public/auth/admin/index.php" class="nav-link align-middle px-0 text-white">
                            <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="products.php" class="nav-link px-0 align-middle text-white bg-success">
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
                            <i class="bi bi-person-circle fs-4"></i> <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9 ms-sm-auto col-xl-10 px-md-4" style="margin-left: 16.66%;">
                <div class="container mt-4">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3>Products</h3>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                            <i class="bi bi-plus-circle"></i> Add Product
                        </button>
                    </div>

                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['message']); ?>
                    <?php endif; ?>

                    <div class="row g-4">
                        <?php 
                        // NOW $conn IS DEFINED, SO THIS WILL WORK
                        $query = "SELECT * FROM products ORDER BY id DESC";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0) {
                            foreach($query_run as $item) {
                                ?>
                                <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                                    <div class="card shadow w-100">
                                        <div class="card-body text-center">
                                            <img src="../uploads/<?= $item['image']; ?>" class="img-fluid mb-2" style="height: 200px; object-fit: contain;" alt="Product Image">
                                            
                                            <h4 class="card-description"><?= $item['product_name']; ?></h4>
                                            
                                            <p class="text-muted">Stock: <b><?= $item['stock']; ?></b></p>
                                        </div>
                                        
                                        <div class="d-flex justify-content-center gap-2 mb-3">
                                            <button type="button" class="btn btn-success fw-bold stock-btn" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#stockModal" 
                                                data-id="<?= $item['id']; ?>"
                                                data-name="<?= $item['product_name']; ?>">
                                                <i class="bi bi-bag-plus-fill"></i> +
                                            </button>

                                            <button class="btn btn-dark fw-bold preview-btn" 
                                                data-image="../uploads/<?= $item['image']; ?>">
                                                <i class="bi bi-eye-fill text-white"></i>
                                            </button>

                                            <form action="code.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                <input type="hidden" name="product_id" value="<?= $item['id']; ?>">
                                                <button type="submit" name="delete_product" class="btn btn-danger fw-bold">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<div class='col-12'><h5 class='text-center mt-5'>No Products Found</h5></div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Initial Stock</label>
                            <input type="number" name="stock" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="save_product" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="stockModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="code.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="product_id" id="stock_product_id">
                        <p>Adding stock for: <b id="stock_product_name"></b></p>
                        <div class="mb-3">
                            <label>Quantity to Add</label>
                            <input type="number" name="added_stock" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_stock" class="btn btn-success">Add Stock</button>
                    </div>
                </form>
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

    <?php include '../components/modal.php' ?> 

    <script>
        // Preview Image Script
        document.querySelectorAll('.preview-btn').forEach(button => {
            button.addEventListener('click', function () {
                const imageUrl = this.getAttribute('data-image');
                const previewImage = document.getElementById('imgPreview');
                // Ensure imgPreview exists before setting src
                if(previewImage) {
                    previewImage.src = imageUrl;
                    const modalEl = document.getElementById('imagePreview');
                    if(modalEl) {
                        const modal = new bootstrap.Modal(modalEl);
                        modal.show();
                    }
                }
            });
        });

        // Add Stock Script
        document.querySelectorAll('.stock-btn').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                document.getElementById('stock_product_id').value = id;
                document.getElementById('stock_product_name').innerText = name;
            });
        });
    </script>
</body>
</html>
