<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 9</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 bg-light pe-3">
                <h1 class="h4 py-3 text-center text-primary">
                    <i class="fas fa-ghost me-2"></i>
                    <span class="d-none d-lg-inline">ADMIN</span>
                </h1>
                <div class="list-group text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>CONTROLS</small>
                    </span>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">Dashboard</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">Insert Users</span>
                        <span class="d-none d-lg-inline badge bg-danger rounded-pill float-end">20</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-chart-line"></i>
                        <span class="d-none d-lg-inline">Insert Items</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-flag"></i>
                        <span class="d-none d-lg-inline">Insert Category</span>
                    </a>
                </div>
                <div class="list-group mt-4 text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        <small>ACTIONS</small>
                    </span>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-user"></i>
                        <span class="d-none d-lg-inline">New User</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-edit"></i>
                        <span class="d-none d-lg-inline"> Update Date</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="far fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Add Events</span>
                    </a>
                </div>
            </nav>
            <main class="col-10 bg-secondary">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="flex-fill"></div>
                    <div class="navbar nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <span class="material-symbols-outlined">
                                    admin_panel_settings
                                    </span>
                                <li>
                                    <a href="#" class="dropdown-item">User Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog"></i>
                            </a>
                        </li>
                    </div>
                </nav>
                <div class="container-fluid mt-3 p-4">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="alert alert-info">
                                <i class="fas fa-download me-2"></i>A new version of admin dashboard is released.
                                <a href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-column flex-lg-row">
                        <h2 class="h6 text-white-50">QUICK STATS</h2>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">1,250</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>Daily visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">8,210</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>Weekly visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">12,560</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>Monthly visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title h2">102,250</h3>
                                    <span class="text-success">
                                        <i class="fas fa-chart-line"></i>Yearly visitors
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 p-4 flex-column flex-lg-row">
                    <div class="col">
                        <h2 class="h6 text-white-50">LOCATION</h2>

                        <div class="card mb-3" style="height: 280px">
                        <div class="card-body">
                            <small class="text-muted">Regional</small>
                            <div class="progress mb-4 mt-2" style="height: 5px">
                                <div class="progress-bar bg-success w-25"></div>
                            </div>
                            <small class="text-muted">Global</small>
                            <div class="progress mb-4 mt-2" style="height: 5px">
                                <div class="progress-bar bg-primary w-75"></div>
                            </div>
                            <small class="text-muted">Local</small>
                            <div class="progress mb-4 mt-2" style="height: 5px">
                                <div class="progress-bar bg-warning w-50"></div>
                            </div>
                            <small class="text-muted">Internal</small>
                            <div class="progress mb-4 mt-2" style="height: 5px">
                                <div class="progress-bar bg-danger w-25"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="h6 text-white-50">DATA</h2>
                        <div class="card mb-3" style="height: 280px">
                            <div class="card-body">
                                <div class="text-end">
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-sort-amount-up"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-filter"></i>
                                    </button>
                                </div>
                                <table class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Age Group</th>
                                        <th>Data</th>
                                        <th>Progress</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>20-30</td>
                                        <td>19%</td>
                                        <td>
                                            <i class="fas fa-chart-pie"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>30-40</td>
                                        <td>40%</td>
                                        <td>
                                            <i class="fas fa-chart-bar"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>40-50</td>
                                        <td>20%</td>
                                        <td>
                                            <i class="fas fa-chart-line"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>50</td>
                                        <td>11%</td>
                                        <td>
                                            <i class="fas fa-chart-pie"></i>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>