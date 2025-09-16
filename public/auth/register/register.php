<?php
session_start();

// Handle messages
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

// Database setup
$db_host = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "dsms";
$db_port = 3306;

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $stud_id = $_POST['stud_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $checkEmailStmt = $conn->prepare("SELECT id FROM user_accounts WHERE email = ?");
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $checkEmailStmt->store_result();

        if ($checkEmailStmt->num_rows > 0) {
            $_SESSION['message'] = "<div class='popup-message error alert alert-danger'> Email already exists. Please use a different one.</div>";
        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO user_accounts (first_name, last_name, stud_id, email, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $first_name, $last_name, $stud_id, $email, $hashedPassword);
            $stmt->execute();

            // Instead of redirecting immediately, we display success message then auto-redirect with JS
            $_SESSION['message'] = "<div class='popup-message success alert alert-success'>Account created successfully!</div>";
            // $_SESSION['redirect_to_main'] = true;
        }

    } catch (Exception $e) {
        $_SESSION['message'] = "<div class='popup-message error alert alert-danger'> Error: " . $e->getMessage() . "</div>";
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your account | DSMS</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
    <script src="../../js/register.js"></script>
    <script src="../../bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="position-absolute top-0 left-0">
    <a href="../../index.php" class="btn text-success ms-4" style="margin-top: 5rem;">
        <i class="bi bi-arrow-left-circle-fill text-success fs-1"></i>
    </a>
    </div>

<div class="wrapper d-flex justify-content-center align-items-center bg-white vh-100">
    <div class="card shadow rounded-3 p-4">
        <div class="card-body">
            <h2 class="text-center text-success me-3 mb-4">
                <i class="bi bi-person"> Sign Up </i>
            </h2>
        </div>
        <form action="" method="post">
            <div class="content-center">

                <label for="first_name" class="form-label fs-5">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name" required>

                <label for="last_name" class="form-label fs-5">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your Last Name" required>

                <label for="stud_id" class="form-label fs-5">Student ID</label>
                <input type="text" class="form-control" id="stud_id" name="stud_id" placeholder="Enter your Student ID" required>

                <label for="email" class="fs-5">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email address" required>

                <label for="password" class="form-label fs-5">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>

                <div class="d-grid mt-4">
                    <button class="btn btn-success fs-5" type="submit">Create</button>
                </div>
                
                <!-- Flash message -->
                <?php if (!empty($message)): ?>
                    <div id="popupMessage" class="mt-3 popup-container">
                        <?= $message ?>
                    </div>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>




    
</body>
</html>