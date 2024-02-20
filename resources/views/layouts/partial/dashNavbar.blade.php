<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Document</title>
    <link rel="shortcut icon" href="https://i.pinimg.com/564x/ae/3b/9a/ae3b9a04ad96f5c7782ac3e481f9add4.jpg" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="/style.css" rel="stylesheet">
</head>

<body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#"> Welcome to Dashboard</a>
    </header>

    <div class="container-fluid row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Dashboard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column h-100">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
                                <span class="material-symbols-outlined">home</span>
                                Home
                            </a>
                            <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="/dashboard/student2/all">
                                <span class="material-symbols-outlined">people</span>
                                Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard/kelas2/kelas">
                                <span class="material-symbols-outlined">book</span>
                                Class
                            </a>
                        <li class="nav-item">
                            <form id="logoutForm" class="nav-link d-flex align-items-center text-danger" action="logout" method="auth">
                                <span class="material-symbols-outlined">logout</span>
                                <button type="submit" class="nav-link d-flex align-items-start p-2 text-danger" aria-current="page">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 30px;">
            @yield('content')
        </main>

    </div>
</body>
</html>

<script>
    document.getElementById("logoutForm").addEventListener("submit", function(event) {
        var confirmLogout = confirm("Are you sure you want to logout?");
        if (!confirmLogout) {
            event.preventDefault(); // Prevent the form from submitting
        }
    });
</script>
