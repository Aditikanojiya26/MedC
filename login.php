<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content:center;
            align-items: center;
            background-color: #EFF3EA;
        }
        .submitbtn{
            width:100%;
        }
        .form-container {
            max-width: 400px;
            margin: auto auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: darkblue;
            border: none;
        }

        .btn-primary:hover {
            background-color: #002060;
        }

        label {
            font-size: 17px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Login</h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label class="mb-2"for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="mb-2 for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary submitbtn">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>