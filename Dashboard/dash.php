<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedC Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .cname {
            color: darkblue;
            font-size: 2.5rem;
            font-weight: bolder;
        }

        .sidebar {
            width: 280px;
            height: auto;
            /* Default height */
            background-color: white;
            color: black;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
        }

        .sidebar li {
            padding: 2px 10px;
        }

        .sidebar a {
            color: black;
            text-decoration: none;
            padding: 15px 18px;
        }

        .sidebar .nav-link.active {
            background-color: darkblue;
            font-weight: bold;
        }

        .rounded-circle {
            border: 2px solid #007bff;
        }

        header {
            background-color: darkblue;
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 80px;
            /* Navbar height */
        }

        header h2 {
            margin: 0;
        }

        .sidebar,
        main {
            height: 100vh;
            /* Sync height with viewport */
        }

        .sidebar-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80px;
            /* Adjust height of the logo area */
        }

        .graph{
            font-size: 20px;
            margin-right: 10px;
        }
        .card{
            margin-top: -24px;
        }
        .addButton{
            display: flex;
            justify-content: center;
        }
        .add{
            background-color: rgb(0,0,139);
            color: #f8f9fa;
            border-radius: 10px ;
            font-size: large;
            text-align: center;
            padding: 1px 15px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="d-flex flex-column sidebar">
            <div class="sidebar-logo">
                <a href="/" class="d-flex align-items-center text-decoration-none">
                    <h1 class="cname mt-2">MedC</h1>
                </a>
            </div>
            <ul class="nav nav-pills flex-column mb-auto mt-4">
                <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="fa-solid fa-chart-simple graph"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-user graph"></i> Family Members
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-notes-medical graph"></i> Reports
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-secondary" aria-current="page">
                        <i class="fa-solid fa-chart-simple graph"></i> Edit 
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-secondary">
                        <i class="fa fa-sign-out graph" aria-hidden="true"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <main class="flex-grow-1">
            <header class="d-flex justify-content-between align-items-center py-3 px-4">
                <h2>Vidit's Dashboard</h2>
                <div class="d-flex align-items-center">
                    <!-- <img src="profile.jpeg" alt="User Profile" class="rounded-circle" style="width: 40px;"> -->
                </div>
            </header>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    
                                    <h5 class="card-title">Reports</h5>
                                </div>
                                <div class="col-6">
                                    <div class="addButton float-end">
                                        <button class="add">Add Reports</button>
                                        </div>
                                        </div> 
                                </div>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Document</th>
                                        <th>Refered By</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nueropathology</td>
                                        <td><a href="#" style="text-decoration: none;">View</a></td><data value=""></data>
                                        <td>Harsh Patel</td>
                                        <td>06/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Ear Therapy</td>
                                        <td><a href="#" style="text-decoration: none;">View</a></td>
                                        <td>Dhruvi Thakkar</td>
                                        <td>02/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Ear Therapy</td>
                                        <td><a href="#" style="text-decoration: none;">View</a></td>
                                        <td>Dhruvi Thakkar</td>
                                        <td>02/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Ear Therapy</td>
                                        <td><a href="#" style="text-decoration: none;">View</a></td>
                                        <td>Dhruvi Thakkar</td>
                                        <td>02/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Ear Therapy</td>
                                        <td><a href="#" style="text-decoration: none;">View</a></td>
                                        <td>Dhruvi Thakkar</td>
                                        <td>02/01/2025</td>
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
          
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>