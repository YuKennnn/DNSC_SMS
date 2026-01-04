      <link rel="stylesheet" href="../../../public/bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../../public/bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
      <link rel="stylesheet" href="../../../public/userCss/navbar.css">
      <script src="../../../public/bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>


      <nav class="navbar navbar-expand-md bg-light fs-4">
        <div class="container-fluid ms-5 ps-5">
          <img src="../../public/image/main/dnscLOGO.png" width="50" alt="" class="img-fluid me-3 ">
          <a class="navbar-brand fs-5 fw-bold" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center gap-3" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-pills fs-5 ">
              <a class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?> bg-success text-white"
                <?= $currentPage === 'home' ? 'aria-current="page"' : '' ?> href="#">Home</a>
            </div>
              <div class="navbar-nav nav-pills fs-5 ">
                <a class="nav-link <?= $currentPage === 'design' ? 'active' : '' ?> text-dark"
                  <?= $currentPage === 'design' ? 'aria-current="page"' : '' ?> href="#">Design</a>
              </div>
                <div class="navbar-nav nav-pills fs-5 ">
                  <a class="nav-link <?= $currentPage === 'design' ? 'active' : '' ?> text-dark"
                    <?= $currentPage === 'design' ? 'aria-current="page"' : '' ?> href="#">Design</a>
                </div>

            
          </div>

          <div class="d-flex me-5">

              <a href="#" class="text-dark">
                <i class="bi bi-bell fs-5 me-3"></i>
              </a>
            
              <img class="btn rounded-circle " height="50" src="../../public/image/main/mE.png" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></img>
          </div>
        </div>
      </nav>