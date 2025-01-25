<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="./images/https://kit.fontawesome.com/933631f95f.js" crossorigin="anonymous"></script>
    <title>Health Website</title>
    <style>
        .card {
            display: inline-block;
        }

        .ltext {
            display: flex;
            justify-content: center;
        }

        .loJoin-text {
            margin-left: 8px;
            color: rgb(186, 17, 17);
        }

        .loJoin {
            border: 2px solid rgb(255, 255, 255);
            border-radius: 40%;
            background-image: url("LOJoin.jpeg");
            background-repeat: no-repeat;
            background-size: contain;
            height: 54px;
            width: 54px;
        }

        .class {

            background-color: darkblue;
        }

        header {
            background-color: #e0f7ff;
            /* padding: 40px 20px; */
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            color: #004aad;
        }

        .explore-section,
        .login-section {
            padding: 20px;
            margin: 20px auto;
            max-width: 100%;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .bpart_hover {
            max-width: 190px;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 52px;
            cursor: pointer;
            transition: transform 0.3s ease;
            border-radius: 50%;
            padding: 50px;
            display: inline-block;
        }

        .bpart_hover:hover {
            transform: scale(1.1);

        }

        .explore-section {
            text-align: center;
        }

        .login-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .login-box {
            width: 45%;
            padding: 20px;
            text-align: center;
            background-color: #f1f9ff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .login-box:hover {
            background-color: #d6ebf9;

        }

        .login-box h3 {
            margin-bottom: 15px;
            color: #004aad;
        }

        .login-box a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #004aad;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-box a:hover {
            background-color: #00337a;
        }

        h5 {
            color: #d6ebf9;
            padding-top: 10px;
        }

        bpart_hover:hover {
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
        }

        .bpart-container {
            display: inline-block;
            text-align: center;
            margin: 10px;
            margin-bottom: -50px;
        }

        .bpart-label {
            font-size: 14px;
            font-weight: bold;
            color: #333;

            margin-top: -89px;
        }

        .containerr {
            display: flex;
            overflow-x: auto;
            padding: 20px;
            gap: 20px;

        }


        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
            perspective: 1000px;
            /* Enables the 3D effect */
        }

        .custom-card {
            width: 300px;
            height: 400px;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            /* Ensures 3D rotation works */
            position: relative;
        }

        .custom-card:hover {
            transform: rotateY(180deg);
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            /* Hides the back when the front is visible */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .card-front {
            background-color: #ffffff;
        }

        .card-back {
            background-color: #f8f9fa;
            transform: rotateY(180deg);
        }

        .card-img-top-doc{
            width: 200px;
            height: 280px;
            object-fit: cover;
            
        }

        .card-footer-icons a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }

        .card-footer-icons a:hover {
            color: #0056b3;
        }

        .container {
            margin: 0px;
        }

        .maincointainer {
            display: flex;
            justify-content: space-between;

        }
        
    </style>
</head>

<body>
    <?php include '../navbar.php'; ?>
    <div id="google_translate_element" class="tbtn"></div>

    <header>

        <img id="slide" src="./images/img3.jpg" alt="Image Slider" style="width:100%; height:560px;">

    </header>
    <section class="explore-section pt-5">
        <h2>Explore Diseases By Body Organ</h2>
        <p>Click on a body part to see potential health conditions.</p>
        <div class="hello">
            <!-- <span>
            <img src="./images/brain.png" class="bpart_hover" alt="Head" name="brain"
                onclick="window.location.href='head-conditions.html'">
                <p class="name">Head</p>
            <span> -->
            <div class="bpart-container">
                <img src="./images/brain.png" class="bpart_hover" alt="Brain" name="brain"
                    onclick="window.location.href='head-conditions.html'">
                <p class="bpart-label pe-2">Brain</p>
            </div>
            <div class="bpart-container">
                <img src="./images/kidney.png" class="bpart_hover" alt="Chest"
                    onclick="window.location.href='chest-conditions.html'">
                <p class="bpart-label">Chest</p>
            </div>
            <div class="bpart-container">
                <img src="./images/heart.png" class="bpart_hover" alt="Heart"
                    onclick="window.location.href='heart_organ.html'">
                <p class="bpart-label">Heart</p>
            </div>
            <div class="bpart-container">
                <img src="./images/pancreas.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-4">Pancreas</p>
            </div>
            <div class="bpart-container">
                <img src="./images/stomach.png" class="bpart_hover" alt="Heart"
                    onclick="window.location.href='arms-conditions.html'">
                <p class="bpart-label pe-2">Stomach</p>
            </div>
            <div class="bpart-container">
                <img src="./images/intestine.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-2">Intestine</p>
            </div>
            <div class="bpart-container">
                <img src="./images/bladder.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-1">Bladder</p>
            </div>
            <div class="bpart-container">
                <img src="./images/eye.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-2">Eye</p>
            </div>
            <div class="bpart-container">
                <img src="./images/lungs.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-2">Lungs</p>
            </div>
            <div class="bpart-container">
                <img src="./images/throat-cancer.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label">Throat</p>
            </div>
            <div class="bpart-container">
                <img src="./images/ear.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-4">Ear</p>
            </div>
            <div class="bpart-container">
                <img src="./images/liver.png" class="bpart_hover" alt="liver"
                    onclick="window.location.href='legs-conditions.html'">
                <p class="bpart-label pe-2">Liver</p>
            </div>
        </div>
        <hr class="mt-5" style="border: 1px solid black;">
        <h1
            style="color:darkblue; font-weight: 600; text-shadow: 1px 1px 1px rgba(132, 17, 17, 0.1); padding-top:40px; padding-bottom:20px">
            Popular Doctors Available</h1>
        </div>
    </section>
    <div class="maincointainer">
        <div class="container">
            <div class="card-container">
                <!-- Rotating Card -->
                <div class="custom-card">
                    <!-- Front Side -->
                    <div class="card-front">
                        <img src="https://th.bing.com/th?id=OIP.29VUfn60cwIHwtvm2kzAogHaH6&w=241&h=258&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="Profile Image" class="card-img-top-doc">
                        <h5 class="card-title mt-3">Sunlimetech</h5>
                        <p class="card-text text-center">This is the front side with an image, title, and description.
                        </p>
                    </div>
                    <!-- Back Side -->
                    <div class="card-back">
                        <h5 class="card-title">Contact Info</h5>
                        <p class="card-text">This is the back side with additional information.</p>
                        <div class="card-footer-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card-container">
                <!-- Rotating Card -->
                <div class="custom-card">
                    <!-- Front Side -->
                    <div class="card-front">
                        <img src="https://th.bing.com/th?id=OIP.29VUfn60cwIHwtvm2kzAogHaH6&w=241&h=258&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="card-img-top-doc" alt="Profile Image" class="card-img-top-doc">
                        <h5 class="card-title mt-3">Sunlimetech</h5>
                        <p class="card-text text-center">This is the front side with an image, title, and description.
                        </p>
                    </div>
                    <!-- Back Side -->
                    <div class="card-back">
                        <h5 class="card-title">Contact Info</h5>
                        <p class="card-text">This is the back side with additional information.</p>
                        <div class="card-footer-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card-container">
                <!-- Rotating Card -->
                <div class="custom-card">
                    <!-- Front Side -->
                    <div class="card-front">
                        <img src="https://th.bing.com/th?id=OIP.29VUfn60cwIHwtvm2kzAogHaH6&w=241&h=258&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="Profile Image" class="card-img-top-doc">
                        <h5 class="card-title mt-3">Sunlimetech</h5>
                        <p class="card-text text-center">This is the front side with an image, title, and description.
                        </p>
                    </div>
                    <!-- Back Side -->
                    <div class="card-back">
                        <h5 class="card-title">Contact Info</h5>
                        <p class="card-text">This is the back side with additional information.</p>
                        <div class="card-footer-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="card-container">
                    <!-- Rotating Card -->
                    <div class="custom-card">
                        <!-- Front Side -->
                        <div class="card-front">
                            <img src="https://th.bing.com/th?id=OIP.29VUfn60cwIHwtvm2kzAogHaH6&w=241&h=258&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="Profile Image" class="card-img-top-doc">
                            <h5 class="card-title mt-3">Sunlimetech</h5>
                            <p class="card-text text-center">This is the front side with an image, title, and
                                description.</p>
                        </div>
                        <!-- Back Side -->
                        <div class="card-back">
                            <h5 class="card-title">Contact Info</h5>
                            <p class="card-text">This is the back side with additional information.</p>
                            <div class="card-footer-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-5" style="border: 1px solid black;">
    <h1
        style="color:darkblue; font-weight: 600; text-shadow: 1px 1px 1px rgba(132, 17, 17, 0.1); padding-top:40px; padding-bottom:20px; text-align: center;">
        Join Community</h1>

<div class="containerr mt-5 mb-5" style="display: flex; justify-content: space-evenly;">
    <div class="card" style="width: 18rem;">
        <img src="https://th.bing.com/th/id/OIP.Fw1kL9U6s0UvkudPWSEuQQHaD2?w=334&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
            class="card-img-top" alt="..." height="178px">
        <div class="card-body">
            <h5 class="card-title">Cancer</h5>
            <p class="card-text">
                Cancer is uncontrolled cell growth that may spread, caused by mutations or lifestyle
                factors.
                Treatment includes surgery, chemotherapy, and radiation.</p>
                <div class="d-grid">
                <button class="btn btn-dark" type="button">Join</button>
            </div>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://th.bing.com/th/id/OIP.jbQK-EX6WYNCTiQUoz1o4QHaEn?w=294&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Diabetes</h5>
            <p class="card-text">
                Diabetes is a chronic condition where the body struggles to regulate blood sugar due to
                insufficient insulin or ineffective usage.</p>
                <div class="d-grid">
                <button class="btn btn-dark" type="button">Join</button>
            </div>        
        </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img src="https://th.bing.com/th/id/OIP.xKv7vsM1tknuBPCZvTLsfgHaD4?w=307&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        height="178px" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">PCOD</h5>
        <p class="card-text">
            PCOD (Polycystic Ovarian Disease) is a hormonal disorder causing enlarged ovaries with
            cysts,
            leading to irregular periods, weight gain, and infertility.</p>
        <div class="d-grid">
            <button class="btn btn-dark" type="button">Join</button>
        </div>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="doc_img" src="https://th.bing.com/th/id/OIP.MPc4EAzBKvWEqIS8DdGqJQHaHa?w=177&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
            height="178px" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Migraine</h5>
            <p class="card-text">
                Migraine is a neurological condition causing intense headaches, often with nausea,
                sensitivity to light or sound, and visual disturbances, triggered by various factors.</p>
            <div class="d-grid">
                <button class="btn btn-dark" type="button">Join</button>
            </div>
        </div>
    </div>
    </div>
    <?php include '../footer.php'; ?>
    <div id="google_translate_element" class="tbtn"></div>
</body>
<script>
    var i = 0;
    var images = [];
    var time = 1400;

    // Image list
    images[0] = './images/img3.jpg'
    images[1] = './images/img5.jpg';
    images[2] = './images/hello.png';
    images[3] = './images/sleep.jpg';

    function changeImg() {
        document.getElementById('slide').src = images[i];
        if (i < images.length - 1) {
            i++;
        } else {
            i = 0;
        }
        setTimeout(changeImg, time);
    }

    window.onload = changeImg;
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            { pageLanguage: 'en' },
            'google_translate_element'
        );
    } 
</script>
<script type="text/javascript"
    src="./images/https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>