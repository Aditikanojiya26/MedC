
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link active me-2 rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Responsive Navbar</title>
    <style>
        /* Custom CSS for Navbar */
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color:rgb(0,0,139);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        

        .nav-link{
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link active me-2:hover {
            color: #f8d7da;
            
        }

        .navbar-toggler {
            border-color: #f8f9fa;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .btn-danger {
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
        }

        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item:hover {
            background-color: #e6f7ff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container"> 
            <a class="navbar-brand" href="#">MedC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="../HealthInfo/A_Z.php">Health Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="final_dashboard.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="book.html">Book Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="community.html">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-2" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-danger me-2">Log In</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

