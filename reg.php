<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Registration Forms</title>
    <style>
        body{
            background-color: #EFF3EA;
        }
        .main-container{
            width:65%;
            
        }
        .form-container {
            width: 100%;
            /* height: 625px; */
            padding: 20px;
            
            margin-bottom: 50px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .regbtn{
            width: 100%;
        }
    
       
        .regbtn:hover{
                background-color: darkblue;
                color: white;
        }

        .toggle-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
          
        }

        .toggle-buttons button {
            
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid transparent;
            color: darkblue;
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .btn-1{
            font-size: 25px;
            width: 50%;
            margin-right:2px
        }

        .btn-2{
            width: 50%;
            margin-left:2px
        }
        .toggle-buttons button:hover {
            background-color: darkblue;
            color: white;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .toggle-buttons button.active {
            background-color: darkblue;
            color: white;
            border-color: darkblue;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        label {
            font-size: 17px;
            font-weight: 600;
        }
    </style>
    
</head>

<body>
<div class="container mt-5 main-container">
    <div class="row">
        <div class="col"><div class="toggle-buttons">
            <button id="patientBtn" class="btn btn-1 btn-outline-primary active">Patient Registration</button>
            <button id="doctorBtn" class="btn btn-2 btn-outline-primary">Doctor Registration</button>
        </div></div>
    </div>
        

        <div id="patientForm" class="form-container">
           
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="gender">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">Select...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="height">Height</label>
                        <input type="text" class="form-control" id="height" name="height" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6"><div class="mb-3">
                    <label class="mb-2" for="bloodgroup">Blood Group</label>
                    <select class="form-select" id="bloodgroup" name="bloodgroup" required>
                        <option value="">Select</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div></div>
                    <div class="col-6">
                    <div class="mb-3">
                    <label class="mb-2" for="contact_no">Contact Number</label>
                    <input type="tel" class="form-control" id="contact_no" name="contact_no" required>
                </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                </div>
            </form>
        </div>

        <div id="doctorForm" class="form-container" style="display: none;">
           
            <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="gender">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">Select...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2" for="doctor_id">Doctor ID</label>
                    <input type="text" class="form-control" id="doctor_id" name="doctor_id" required>
                </div>
                <div class="mb-3">
                    <label class="mb-2" for="certificate">Certificate</label>
                    <input type="file" class="form-control" id="certificate" name="certificate" required>
                </div>
                <div class="mb-3">
                    <label class="mb-2" for="specialisation">Specialisation</label>
                    <input type="text" class="form-control" id="specialisation" name="specialisation" required>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="street">Street</label>
                        <input type="text" class="form-control" id="street" name="street">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="house_no">House Number</label>
                        <input type="text" class="form-control" id="house_no" name="house_no">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="contact_no">Contact Number</label>
                        <input type="tel" class="form-control" id="contact_no" name="contact_no" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="mb-2" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary regbtn" name="submit">Register</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('patientBtn').addEventListener('click', function () {
            document.getElementById('patientForm').style.display = 'block';
            document.getElementById('doctorForm').style.display = 'none';
            this.classList.add('active');
            document.getElementById('doctorBtn').classList.remove('active');
        });

        document.getElementById('doctorBtn').addEventListener('click', function () {
            document.getElementById('patientForm').style.display = 'none';
            document.getElementById('doctorForm').style.display = 'block';
            this.classList.add('active');
            document.getElementById('patientBtn').classList.remove('active');
        });
    </script>
</body>

</html>


    <?php
        if(isset($_POST["submit"])) {
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "healthcare"; 

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $contact_no = $_POST['contact_no'];
            $email = $_POST['email'];
            $password = $_POST['password']; // Hash the password before storing
           
            $state = $_POST['state'];
            $country = $_POST['country'];

            // Insert data into the database
            $sql = "INSERT INTO Patient (firstname, lastname, dob, gender, contact_no, email, password, location, street, house_no, state, country) 
                    VALUES ('$firstname', '$lastname', '$dob', '$gender', '$contact_no', '$email', '$password', '$location', '$street', '$house_no', '$state', '$country')";

            if ($conn->query($sql) === TRUE) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>
        <?php
        if(isset($_POST["submit2"])) {
        // Database connection details
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "healthcare"; 

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $doctor_id = $_POST['doctor_id'];
        $specialisation = $_POST['specialisation'];
        $location = $_POST['location'];
        $street = $_POST['street'];
        $house_no = $_POST['house_no'];
        $contact_no = $_POST['contact_no'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $password = $_POST['password']; // Hash the password before storing

        // Handle file upload (Certificate)
        if (isset($_FILES['certificate']) && $_FILES['certificate']['error'] == 0) {
            $certificate_tmp = $_FILES['certificate']['tmp_name'];
            $certificate_name = $_FILES['certificate']['name'];
            $certificate_ext = pathinfo($certificate_name, PATHINFO_EXTENSION);

            // Define the upload directory
            $upload_dir = 'downloads/certificate/';

            // Ensure the directory exists, if not, create it
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true); // Create the folder with proper permissions
            }

            // Generate a unique file name to avoid overwriting existing files
            $unique_name = uniqid('cert_', true) . '.' . $certificate_ext;
            $certificate_path = $upload_dir . $unique_name;

            // Move the uploaded certificate to the new directory
            if (move_uploaded_file($certificate_tmp, $certificate_path)) {
                echo "Certificate uploaded successfully.";
            } else {
                echo "Error uploading certificate.";
            }
        } else {
            echo "No certificate uploaded or error occurred.";
        }

        // Prepare SQL query to insert doctor data into the database
        $sql = "INSERT INTO Doctor (firstname, lastname, dob, gender, doctor_id, certificate, specialisation, location, street, house_no, contact_no, state, country, email, password) 
                VALUES ('$firstname', '$lastname', '$dob', '$gender', '$doctor_id', '$certificate_path', '$specialisation', '$location', '$street', '$house_no', '$contact_no', '$state', '$country', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Doctor registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
?>

