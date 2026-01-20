<?php
// 1. DATABASE CONNECTION
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dsms";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. FETCH DASHBOARD STATS

// A. Total Users
$user_query = "SELECT COUNT(*) as total FROM user_accounts";
$user_result = mysqli_query($conn, $user_query);
$total_users = mysqli_fetch_assoc($user_result)['total'] ?? 0;

// B. Total Revenue (Only Count 'Completed' orders)
$rev_query = "SELECT SUM(total_amount) as total FROM orders WHERE status = 'Completed'";
$rev_result = mysqli_query($conn, $rev_query);
$total_revenue = mysqli_fetch_assoc($rev_result)['total'] ?? 0;

// C. Total Orders
$order_query = "SELECT COUNT(*) as total FROM orders";
$order_result = mysqli_query($conn, $order_query);
$total_orders = mysqli_fetch_assoc($order_result)['total'] ?? 0;
?>

<link rel="stylesheet" href="../../public/bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
<script src="../../public/bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="../../public/bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">

<style>
    .glass-header {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        margin-bottom: 2rem;
    }
    .stat-card {
        border: none;
        border-radius: 16px;
        background: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02), 0 10px 15px rgba(0,0,0,0.03);
        height: 100%;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .icon-box {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
    }
    .table-card {
        background: white;
        border-radius: 16px;
        border: none;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }
    .table thead th {
        background-color: #f8fafc;
        color: #64748b;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        border-bottom: 1px solid #e2e8f0;
    }
</style>

<div class="container-fluid px-0">
    <div class="glass-header d-flex justify-content-between align-items-center">
        <div>
            <h1 class="h3 fw-bold text-dark mb-1">Dashboard Overview</h1>
            <p class="text-muted small mb-0">Welcome back, Admin</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-light text-muted border-0 shadow-sm">
                <i class="bi bi-bell-fill"></i>
            </button>
            <button class="btn btn-primary fw-medium px-4 rounded-3 shadow-sm" 
                    style="background-color: #4361ee; border: none;"
                    data-bs-toggle="modal" data-bs-target="#addOrderModal">
                <i class="bi bi-plus-lg me-1"></i> Add Order
            </button>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icon-box" style="background-color: #e0e7ff; color: #4361ee;">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1">Active</span>
                </div>
                <h2 class="fw-bold text-dark mb-1"><?= number_format($total_users); ?></h2>
                <p class="text-muted small mb-0 fw-medium">Total Users</p>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icon-box" style="background-color: #dcfce7; color: #16a34a;">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1">8.2%</span>
                </div>
                <h2 class="fw-bold text-dark mb-1">$<?= number_format($total_revenue, 2); ?></h2>
                <p class="text-muted small mb-0 fw-medium">Total Revenue</p>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icon-box" style="background-color: #fef9c3; color: #ca8a04;">
                        <i class="bi bi-cart-fill"></i>
                    </div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-2 py-1">New</span>
                </div>
                <h2 class="fw-bold text-dark mb-1"><?= number_format($total_orders); ?></h2>
                <p class="text-muted small mb-0 fw-medium">Total Orders</p>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="stat-card p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="icon-box" style="background-color: #cffafe; color: #0891b2;">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1">5.8%</span>
                </div>
                <h2 class="fw-bold text-dark mb-1">15.3%</h2>
                <p class="text-muted small mb-0 fw-medium">Monthly Growth</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="table-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold mb-0">Recent Transactions</h5>
                    <a href="#" class="text-decoration-none text-primary fw-medium small">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th class="ps-3">ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM orders ORDER BY order_date DESC LIMIT 5";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $row) {
                                    // Determine Badge Color
                                    $status = $row['status'];
                                    $color = 'secondary'; // Default
                                    if($status == 'Completed') $color = 'success';
                                    if($status == 'Pending') $color = 'warning';
                                    if($status == 'Cancelled') $color = 'danger';
                                    if($status == 'Processing') $color = 'info';
                                    ?>
                                    <tr>
                                        <td class="ps-3 text-muted">#<?= $row['id']; ?></td>
                                        <td class="fw-medium"><?= $row['customer_name']; ?></td>
                                        <td class="text-muted"><?= date('M d, Y', strtotime($row['order_date'])); ?></td>
                                        <td class="fw-bold">$<?= number_format($row['total_amount'], 2); ?></td>
                                        <td>
                                            <span class="badge bg-<?= $color; ?> bg-opacity-10 text-<?= $color; ?> rounded-pill">
                                                <?= $status; ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo '<tr><td colspan="5" class="text-center text-muted">No orders found</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addOrderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Add New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../../../public/components/code.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Customer Name</label>
                        <input type="text" name="customer_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Total Amount</label>
                        <input type="number" step="0.01" name="total_amount" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                            <option value="Processing">Processing</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_order" class="btn btn-primary">Save Order</button>
                </div>
            </form>
        </div>
    </div>
</div>