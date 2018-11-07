<?php
    error_reporting(0);

    $current_page = $_GET['page'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>My First Website</title>
    <style>
        body {
            background: #e1e4e8;
        }
        
        .navigation-link {
            background: #cce3f9;
            padding: 6px 29px;
        }

        .page {
            background: white;
            
            padding: 50px;
            margin-left: 200px;
            margin-right: 200px;

            box-shadow: 0px 0px 20px 0px #d4d4d4;

            font-family: Arial;
            font-size: 16px;
        }

        .header-box {
            padding: 20px;
            margin: 10px;

            background: #f1f8ff;

            border-style: solid;
            border-width: 2px;
            border-color: #c8e1ff;
        }

        .main-title {
            text-align: center;
            font-family: "Helvetica";
            color: #227093;
            font-size: 45px;
        }

        .email {
            font-family: "Arial";
            color: #3d3d3d;
            text-align: center;
        }

        .image {
            float: right;
            text-align: center;
            padding: 5px;
            background: #c8e1ff;

        }

        .another-title {
            font-family: "Helvetica";
            color: #227093;
        }

        .text {
            font-family: "Arial";
            color: #3d3d3d;
        }
    </style>
</head>
<body>
    <div class="page">
        <a class="navigation-link" href="/demo/web-workshop-2018/part-5-exercise/">Home Page</a>
        <a class="navigation-link" href="/demo/web-workshop-2018/part-5-exercise/?page=profile">Profile</a>
        <a class="navigation-link" href="/demo/web-workshop-2018/part-5-exercise/?page=cats">My Cats</a>
        <a class="navigation-link" href="/demo/web-workshop-2018/part-5-exercise/?page=contact">Contact</a>
        
        <hr>
        
        <div class="header-box">
            <div class="image">
                <img src="https://placekitten.com/300/300">
            </div>
            <h1 class="main-title">Your Name Here</h1>
            <p class="email">yourname@gmail.com</p>
        </div>
        
        <hr>
  
        <?php if ($current_page == "contact") { ?>

            <h2 class="another-title">Contact Me</h2>
            <ul class="text">
                <li>Phone: 1234567890</li>
                <li>Mail: 1234567890</li>
            </ul>
            <h2 class="another-title">Social Media</h2>
            <ul class="text">
                <li><a href="https://twitter.com/fcis_iu">Twitter</a></li>
                <li><a href="https://github.com/ezhmd">Github</a></li>
            </ul>

        <?php } else if ($current_page == "profile") { ?>

            <h2 class="another-title">Profile</h2>
            <ol class="text">
                <li><b>Birthdate:</b> 6/10/1800</li>
                <li><b>Hair Color:</b> Black</li>
                <li><b>Height:</b> 170 cm</li>
                <li><b>Weight:</b> 70 kg</li>
                <li><b>Country:</b> Italy</li>
            </ol>

        <?php } else if ($current_page == "cats") { ?>

            <h2 class="another-title">My Cat Photos</h2>
            <img src="https://placekitten.com/200/200">
            <img src="https://placekitten.com/310/310">
            <img src="https://placekitten.com/320/320">

        <?php } else { ?>

            <h2 class="another-title">Welcome!</h2>
            <p class="text">This is my first website. Please look around</p>

        <?php } ?>
    </div>
</body>
</html>
