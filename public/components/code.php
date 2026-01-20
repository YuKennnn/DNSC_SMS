<?php
session_start();

// ==========================================
//          DATABASE CONNECTION
// ==========================================
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dsms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ==========================================
//           LOGIN HANDLER
// ==========================================
if(isset($_POST['login_btn'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check Database for Email
    $login_query = "SELECT * FROM user_accounts WHERE email='$email' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0) {
        $userdata = mysqli_fetch_array($login_query_run);
        
        // VERIFY PASSWORD
        if(password_verify($password, $userdata['password'])) {
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'user_id' => $userdata['id'],
                'user_name' => $userdata['first_name'] . ' ' . $userdata['last_name'],
                'email' => $userdata['email']
            ];
            
            $_SESSION['message'] = "Welcome to Dashboard";
            // NOTE: Adjust this path if your dashboard is in a different folder (e.g., ../auth/admin/admin-main-dashboard.php)
            header("Location: admin-main-dashboard.php"); 
            exit(0);
        } else {
            $_SESSION['message'] = "Invalid Password";
            header("Location: ../../index.php"); 
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Invalid Email Address";
        header("Location: ../../index.php");
        exit(0);
    }
}

// ==========================================
//          PRODUCT HANDLERS
// ==========================================

// --- 1. ADD PRODUCT ---
if(isset($_POST['save_product'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
    $stock = $_POST['stock'];
    
    // Image Upload Logic
    $image = $_FILES['image']['name'];
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_extension;
    
    // Create 'uploads' folder if missing
    $upload_dir = '../uploads/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $query = "INSERT INTO products (product_name, description, stock, image) VALUES ('$name', '$desc', '$stock', '$filename')";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir.$filename);
        $_SESSION['message'] = "Product Added Successfully";
    } else {
        $_SESSION['message'] = "Failed to Add Product";
    }
    header("Location: products.php");
    exit(0);
}

// --- 2. DELETE PRODUCT ---
if(isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];

    // Delete image from folder
    $check_query = "SELECT image FROM products WHERE id='$product_id'";
    $check_run = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_run) > 0){
        $row = mysqli_fetch_array($check_run);
        $image_path = "../uploads/" . $row['image'];
        if(file_exists($image_path)){
            unlink($image_path);
        }
    }

    $query = "DELETE FROM products WHERE id='$product_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        $_SESSION['message'] = "Product Deleted Successfully";
    } else {
        $_SESSION['message'] = "Failed to Delete Product";
    }
    header("Location: products.php");
    exit(0);
}

// --- 3. ADD STOCK ---
if(isset($_POST['update_stock'])) {
    $product_id = $_POST['product_id'];
    $added_stock = $_POST['added_stock'];

    $query = "UPDATE products SET stock = stock + '$added_stock' WHERE id='$product_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        $_SESSION['message'] = "Stock Updated Successfully";
    } else {
        $_SESSION['message'] = "Failed to Update Stock";
    }
    header("Location: products.php");
    exit(0);
}

// ==========================================
//           ORDER HANDLERS
// ==========================================

// --- 4. ADD ORDER (NEW) ---
if(isset($_POST['save_order'])) {
    $customer = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $amount = mysqli_real_escape_string($conn, $_POST['total_amount']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $query = "INSERT INTO orders (customer_name, total_amount, status) VALUES ('$customer', '$amount', '$status')";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        $_SESSION['message'] = "Order Added Successfully";
    } else {
        $_SESSION['message'] = "Failed to Add Order";
    }
    
    // Redirect back to the dashboard
    // NOTE: Update this path if your dashboard is located elsewhere (e.g. ../../auth/admin/admin-main-dashboard.php)
    header("Location: admin-main-dashboard.php");
    exit(0);
}
?>