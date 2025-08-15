      <link rel="stylesheet" href="../../../public/userCss/navbar.css">
      <nav class="navbar navbar-expand-md bg-light fs-4">
        <div class="container-fluid ms-4 ps-4 ">
          <a class="navbar-brand fs-5 text-success fw-bold" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-pills fs-5 ">
              <a class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>"
                <?= $currentPage === 'home' ? 'aria-current="page"' : '' ?> href="#">Home</a>
              <a class="nav-link <?= $currentPage === 'pricing' ? 'active' : '' ?>"
                <?= $currentPage === 'pricing' ? 'aria-current="page"' : '' ?> href="#">Pricing</a>
              <a class="nav-link <?= $currentPage === 'products' ? 'active' : '' ?>"
                <?= $currentPage === 'products' ? 'aria-current="page"' : '' ?> href="#">Products</a>
            </div>
            
          </div>
          <div class="d-flex">
              <img class="btn" src="../../../public/image/main/dnscLOGO.png" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></img>


              
            </div>
        </div>
      </nav>