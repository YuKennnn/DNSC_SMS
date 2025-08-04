<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/links.php'; ?>
    <title>Services | SMS</title>
    <link rel="stylesheet" href="../public/css/services.css">
</head>
<body>

<section class="nav-section">
    <?php 
    $current_page = 'services';
    include 'components/nav-bar.php'; ?>
</section>

<div class="container mt-4">
    <h3 class="mb-4">Sample Designs</h3>
    <div class="row g-4">
        <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
            <div class="card shadow w-100">
                <div class="card-body text-center">
                    <img src="../public/image/icSHIRTS/icBASKETBALL_JERSEY.png" class="img-fluid mb-2" alt="">
                    <h4 class="card-description">IC Basketball Jersey 2025</h4>
                </div>
                <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/icSHIRTS/icSHIRTS_PREVIEW/ic_BASKETBALL_1080px.png">
                        <i class="bi bi-eye-fill">
                            Preview
                        </i>                       
                    </button>
                </div>
            </div>
        </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                <div class="card shadow w-100">
                    <div class="card-body text-center">
                        <img src="../public/image/icSHIRTS/IC_SHIRT_UNOFFICIAL_ORANGE.png" class="img-fluid mb-2" alt="">
                        <h4 class="card-description">Orange × White Fox Shirt</h4>
                    </div>
                    <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/icSHIRTS/icSHIRTS_PREVIEW/IC_ORANGE_1080px.png">
                        <i class="bi bi-eye-fill">
                            Preview
                        </i>                       
                    </button>
                </div>
                </div>
            </div>

            <!-- Card 3 --> 
            <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
                <div class="card shadow w-100">
                    <div class="card-body text-center">
                        <img src="../public/image/icSHIRTS/IC_SHIRT_UNOFFICIAL_DARK.png" class="img-fluid mb-2" alt="">
                        <h4 class="card-description">Dark × Purple Fox Shirt</h4>
                    </div>
                    <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/icSHIRTS/icSHIRTS_PREVIEW/ic_UO_PURPLE_1080px.png">
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
                        <img src="../public/image/icSHIRTS/IC_INSTITUTE_SHIRT_2024.png" class="img-fluid mb-2" alt="">
                        <h4 class="card-description">Official Institute Shirt 2024</h4>
                    </div>
                    <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/icSHIRTS/icSHIRTS_PREVIEW/ic_INSTI_1080px.png">
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
                        <img src="../public/image/itedSHIRTS/ited_OFFICIAL_SHIRT.png" class="img-fluid mb-2" alt="">
                        <h4 class="card-description">ITED Institute Shirt</h4>
                    </div>
                    <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/itedSHIRTS/ited_OFFICIAL_SHIRT_1080px.png">
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
                        <img src="../public/image/kalibulongSHIRTS/DNSC_KALIBULONG_DARK.png" class="img-fluid mb-2" alt="">
                        <h4 class="card-description">Kalibulong Shirt 2025</h4>
                    </div>
                    <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/kalibulongSHIRTS/DNSC_KALIBULONG_DARK_1080px.png">
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
                        <img src="../public/image/kalibulongSHIRTS/DNSC_KALIBULONG_WHITE.png" class="img-fluid mb-2" alt="">
                        <h4 class="card-description"></h4>
                    </div>
                    <div class="d-grid align">
                    <button class="btn btn-success fw-bold mb-3 preview-btn" data-image="../public/image/kalibulongSHIRTS/DNSC_KALIBULONG_WHITE_1080px.png">
                        <i class="bi bi-eye-fill">
                            Preview
                        </i>                       
                    </button>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php include 'components/modal.php' ?>

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


    </script>
    
</body>
</html>
