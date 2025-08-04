        <link rel="stylesheet" href="../../public/bootstrap/bootstrap-5.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public//fontawesome/css/all.min.css">
        <script src="../../public/bootstrap/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../../public/bootstrap/bootstrap-icons-1.13.1/bootstrap-icons.css">
    <div class="container py-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0">Dashboard Overview</h1>
            <p class="text-muted small mb-0">Welcome back, Admin</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-bell me-1"></i> Notifications
                </button>
            <button class="btn btn-primary btn-sm">
                    <i class="fas fa-plus me-1"></i> Announcement
                </button>
        </div>
    </div>

    <!-- Stats Cards Row -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Total Users</h6>
                            <h3 class="mb-0">8,549</h3>
                            <small class="text-success">
                                    <i class="fas fa-arrow-up me-1"></i>12.5%
                                </small>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded">
                            <i class="fas fa-users text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Revenue</h6>
                            <h3 class="mb-0">$24,890</h3>
                            <small class="text-success">
                                    <i class="fas fa-arrow-up me-1"></i>8.2%
                                </small>
                        </div>
                        <div class="bg-success bg-opacity-10 p-3 rounded">
                            <i class="fas fa-dollar-sign text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Orders</h6>
                            <h3 class="mb-0">1,236</h3>
                            <small class="text-danger">
                                    <i class="fas fa-arrow-down me-1"></i>3.1%
                                </small>
                        </div>
                        <div class="bg-warning bg-opacity-10 p-3 rounded">
                            <i class="fas fa-shopping-cart text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-2">Growth</h6>
                            <h3 class="mb-0">15.3%</h3>
                            <small class="text-success">
                                    <i class="fas fa-arrow-up me-1"></i>5.8%
                                </small>
                        </div>
                        <div class="bg-info bg-opacity-10 p-3 rounded">
                            <i class="fas fa-chart-line text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="row g-3">
        <!-- Activity Timeline -->
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Activity</h5>
                        <button class="btn btn-link text-decoration-none p-0">View All</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary bg-opacity-10 p-2 rounded">
                                    <i class="fas fa-user-plus text-primary"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">New user registered</h6>
                                <p class="text-muted small mb-0">2 minutes ago</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-success bg-opacity-10 p-2 rounded">
                                    <i class="fas fa-check text-success"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Project milestone completed</h6>
                                <p class="text-muted small mb-0">1 hour ago</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-warning bg-opacity-10 p-2 rounded">
                                    <i class="fas fa-bell text-warning"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">New feature release</h6>
                                <p class="text-muted small mb-0">2 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary">
                                <i class="fas fa-plus me-2"></i>Add New Product
                            </button>
                        <button class="btn btn-outline-success">
                                <i class="fas fa-users me-2"></i>Manage Users
                            </button>
                        <button class="btn btn-outline-info">
                                <i class="fas fa-shopping-cart me-2"></i>Manage Orders
                            </button>
                        <button class="btn btn-outline-warning">
                                <i class="fas fa-shopping-cart me-2"></i>Manage Products
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>