<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #EFF3EA;
        }

        .submitbtn {
            width: 100%;
        }

        .form-container {
            max-width: 400px;
            margin: auto auto;
            padding: 20px;
            border: 1px solid #fafafa;
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

        .custom-select,
        .ref {
            display: block;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid rgb(69, 68, 68);
        }

        .text-center {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Add Report</h2>
            <form method="post was-validated" action="">
                <div class="form-row align-items-center">
                    <div class="col-auto my-2 d-grid">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Type</label>
                        <select class="custom-select mr-sm-2 mt-2 ref" id="inlineFormCustomSelect">
                            <option selected>Choose the report you wish to add</option>
                            <option value="1">Blood Report</option>
                            <option value="2">Sugar Report</option>
                            <option value="3">Cholestrol Report</option>
                        </select>
                    </div>
                    <div class="col mt-4 d-grid">
                        <label class="mb-2">Refered By</label>
                        <input type="text" class="ref">
                    </div>
                    <div class="col-6 my-3 ">
                        <label class="mb-2" for="dob">Date of Report</label>
                        <input type="date" class="ref" id="dob" name="dob" required>
                    </div>
                    <div class="custom-file mt-4">
                        <label class="custom-file-label mb-2" for="validatedCustomFile">Upload Document</label>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>

                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary submitbtn">Upload</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>