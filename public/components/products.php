<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../components/links.php' ?>
    <title>Document</title>
    <link rel="stylesheet" href="../../public/bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public//fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../public/bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
    <script src="../../public/bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed" style="min-height: 100vh;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Admin Dashboard</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="admin-main-dashboard.php" class="nav-link align-middle px-0 text-white">
                                <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-white">
                                <i class="bi bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="../../../public/components/products.php"
                                class="nav-link px-0 align-middle text-white bg-success">
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
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4"></i>
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 ms-sm-auto col-xl-10 px-md-4" style="margin-left: 16.66%;">
                <div class="container mt-4">
                    <h3 class="mb-4">Products</h3>
                    <div class="row g-4">
                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/icSHIRTS/icBASKETBALL_JERSEY.png" class="img-fluid mb-2" alt="">
                                    <h4 class="card-description">IC Basketball Jersey 2025</h4>
                                </div>
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-success fw-bold mb-3">
                                        <i class="bi bi-bag-plus-fill">
                                            Add Stocks
                                        </i>
                                    </button>
                                    <button class="btn btn-dark fw-bold mb-3 preview-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/IC_ORANGE_1080px.png">
                                        <i class="bi bi-eye-fill text-white">
                                            
                                        </i>
                                    </button>
                                    <button class="btn btn-danger fw-bold mb-3 preview-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/IC_ORANGE_1080px.png">
                                        <i class="bi bi-eye-fill">
                                            Delete
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/icSHIRTS/IC_SHIRT_UNOFFICIAL_ORANGE.png" class="img-fluid mb-2"
                                        alt="">
                                    <h4 class="card-description">Orange × White Fox Shirt</h4>
                                </div>
                                <div class="d-flex align justify-content-center gap-2">
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/IC_ORANGE_1080px.png">
                                        <i class="bi bi-bag-plus-fill">
                                            Add Stocks
                                        </i>
                                    </button>
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/IC_ORANGE_1080px.png">
                                        <i class="bi bi-eye-fill">
                                        </i>
                                    </button>
                                    <button class="btn btn-danger fw-bold mb-3 delete-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/IC_ORANGE_1080px.png">
                                        <i class="bi bi-trash">
                                            Delete
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/icSHIRTS/IC_SHIRT_UNOFFICIAL_DARK.png"
                                        class="img-fluid mb-2" alt="">
                                    <h4 class="card-description">Dark × Purple Fox Shirt</h4>
                                </div>
                                <div class="d-grid align">
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/ic_UO_PURPLE_1080px.png">
                                        <i class="bi bi-eye-fill">
                                            Preview
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/icSHIRTS/IC_INSTITUTE_SHIRT_2024.png"
                                        class="img-fluid mb-2" alt="">
                                    <h4 class="card-description">Official Institute Shirt 2024</h4>
                                </div>
                                <div class="d-grid align">
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/icSHIRTS/icSHIRTS_PREVIEW/ic_INSTI_1080px.png">
                                        <i class="bi bi-eye-fill">
                                            Preview
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/itedSHIRTS/ited_OFFICIAL_SHIRT.png" class="img-fluid mb-2"
                                        alt="">
                                    <h4 class="card-description">ITED Institute Shirt</h4>
                                </div>
                                <div class="d-grid align">
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/itedSHIRTS/ited_OFFICIAL_SHIRT_1080px.png">
                                        <i class="bi bi-eye-fill">
                                            Preview
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/kalibulongSHIRTS/DNSC_KALIBULONG_DARK.png"
                                        class="img-fluid mb-2" alt="">
                                    <h4 class="card-description">Kalibulong Shirt 2025</h4>
                                </div>
                                <div class="d-grid align">
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/kalibulongSHIRTS/DNSC_KALIBULONG_DARK_1080px.png">
                                        <i class="bi bi-eye-fill">
                                            Preview
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                            <div class="card shadow w-100">
                                <div class="card-body text-center">
                                    <img src="../image/kalibulongSHIRTS/DNSC_KALIBULONG_WHITE.png"
                                        class="img-fluid mb-2" alt="">
                                    <h4 class="card-description"></h4>
                                </div>
                                <div class="d-grid align">
                                    <button class="btn btn-success fw-bold mb-3 preview-btn"
                                        data-image="../image/kalibulongSHIRTS/DNSC_KALIBULONG_WHITE_1080px.png">
                                        <i class="bi bi-eye-fill">
                                            Preview
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/modal.php' ?>
    <?php include '../../public/components/modals/product-delete.php' ?>

    <script>
        document.querySelectorAll('.preview-btn').forEach(button => {
            button.addEventListener('click', function () {
                const imageUrl = this.getAttribute('data-image');
                const previewImage = document.getElementById('imgPreview');
                previewImage.src = imageUrl;
                const modal = new bootstrap.Modal(document.getElementById('imagePreview'));
                modal.show();
            });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                const imageUrl = this.getAttribute('data-image');
                const previewImage = document.getElementById('imgDelete');
                previewImage.src = imageUrl;
                const modal = new bootstrap.Modal(document.getElementById('imageDelete'));
                modal.show();
            });
        });

    </script>




</body>

</html>