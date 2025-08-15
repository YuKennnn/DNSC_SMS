<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
    <script type="module" src="../bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../user/components/navbar.php'; ?>
    
    
</head>
<body>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body col-12 col-lg-6">
                  <ul class="nav">
                    <li class="nav-item">
                        <a href="" class="nav-link fs-5">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../public/index.php" class="nav-link fs-5">Sign Out</a>
                    </li>
                  </ul>
                </div>
              </div>
    
    

</body>

</html>