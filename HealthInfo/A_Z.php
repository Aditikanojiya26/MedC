
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        .class {

            background-color: darkblue;
        }


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9faff;
            color: #333;
        }

        
        .main_list {
            padding: 0px;
            display: flex;
            /* margin-left: 50px; */
        }

        .one {
            box-sizing: border-box;
            justify-content: center;
            align-items: center;
            list-style: none;
            display: flex;
            border: 1px solid black;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            text-align: center;
            
            font-size: 20px;

            &:hover {
                background-color: black;
            }
            margin-top: 20px;
            margin-right: 5px;
            font-weight: 700;
            color:white;
            background-color: darkblue;
        }

        .main_img {
            display: flex;
            justify-content: center;
            align-items: center;
            height:600px;
            background: url("health_img.jpg") no-repeat 0 0;
            background-size: cover;
            background-position-y: -200px;
        }

        .searchbar {
            width: 500px;
            height: 50px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .fas {
            position: relative;
            left: 30px;
        }

        .topic-list {
            height: 100px;
            background-color: #f6f7f9;
            padding: 15px;
            margin-bottom: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;

            &:hover {
                background-color: #e7eaef;
            }
        }
        a{
            text-decoration: none;
            color: white;
            
        }
        
    </style>
</head>

<body>
<?php include '../navbar.php';?>
    <div class="main_img">
        <div class="search">
            <i class="fa-solid fa-magnifying-glass" style="position: relative;left: 35px; font-size: 18px; top: 1px;"></i>
            <input type="text" class="searchbar" placeholder="Search By Disease"
                style="border-radius: 20px; padding-left: 35px; border: 2px solid grey;">
        </div>
    </div>
    <div class="main d-flex justify-content-center">

        <ul class="main_list">
            <a href="#"><li class="one">A</li></a>
            <a href="#"><li class="one">B</li></a>
            <a href="#"><li class="one">C</li></a>
            <a href="d_list.html"><li class="one">D</li></a>
            <a href="#"><li class="one">E</li></a>
            <a href="#"><li class="one">F</li></a>
            <a href="#"><li class="one">G</li></a>
            <a href="#"><li class="one">H</li></a>
            <a href="#"><li class="one">I</li></a>
            <a href="#"><li class="one">J</li></a>
            <a href="#"><li class="one">K</li></a>
            <a href="#"><li class="one">L</li></a>
            <a href="#"><li class="one">M</li></a>
            <a href="#"><li class="one">N</li></a>
            <a href="#"><li class="one">O</li></a>
            <a href="#"><li class="one">P</li></a>
            <a href="#"><li class="one">Q</li></a>
            <a href="#"><li class="one">R</li></a>
            <a href="#"><li class="one">S</li></a>
            <a href="#"><li class="one">S</li></a>
            <a href="#"><li class="one">T</li></a>
            <a href="#"><li class="one">U</li></a>
            <a href="#"><li class="one">V</li></a>
            <a href="#"><li class="one">W</li></a>
            <a href="#"><li class="one">X</li></a>
            <a href="#"><li class="one">Y</li></a>
            <a href="#"><li class="one">Z</li></a>
        </ul>
    </div>
    <div class="container mt-4">

        <div class="topic-list"><p>Health Intervention</p><h4>Abortion</h4></div>
        <div class="topic-list"><p>Health behaviour</p><h4>Addictive behaviour</h4></div>
        <div class="topic-list"><p>Populations and demographic</p><h4>Adolescent health</h4></div>
        <div class="topic-list"><p>Populations and demographic</p><h4>Ageing</h4></div>
    </div>
</body>

</html>