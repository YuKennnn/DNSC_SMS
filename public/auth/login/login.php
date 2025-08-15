<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to you Account | DSMS</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
    <script src="../../bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="position-absolute top-0 left-0">
    <a href="../../index.php" class="btn ms-4" style="margin-top: 5rem;">
        <i class="bi bi-arrow-left-circle-fill text-success fs-1"></i>
    </a>
</div>    
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="row shadow-lg p-0 rounded-3 overflow-hidden w-75">

            <div class="col-md-6 d-none d-md-block p-0">
                <img src="../../image/dnsc.jpg" alt="" class="img-fluid h-100 w-100 object-fit-cover" >
            </div>
            
        
            <div class="card-body col-md-6 p-4 justify-content">
                <h2 class="text-center mb-4 mt-5 me-4 text-success">
                    <i class="bi bi-person mb-4 me-4">
                        Login
                    </i>
                </h2>
            
            <form action="../../user/main.php" method="post">

                <div class="d-flex flex-column justify-content-center me-2">
                    <div class="mb-3 ">
                    
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="password" class="form-control" id="email" placeholder="Enter your Email address" required>
            
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input is-valid" name="checkbox" id="checkbox">
                        <label for="check" class="form-label">Remember me</label>
                    </div>

                    <div class="d-grid mb-3">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </div>
            </form>
            </div>

        </div>
    </div>
    
</body>
</html>