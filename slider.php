<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Images</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.svg">
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
</head>

<body>
    <header id="header">
        <div class="avatar">
            <img src="./images/2.jpg" alt="avatar" class="avatar-img">
        </div>
        <h2 class="my-name">Hao Nguyen</h2>
        <ul class="header-links">
            <li><a class="my-link" href="home.php">Home</a></li>
            <li><a class="my-link" href="project.php">Projects</a></li>
            <li><a class="my-link" href="contact.php">Contact</a></li>
            <li><a class="my-link" href="formActionGet.php">Form</a></li>
            <li><a class="my-link" href="slider.php">Slider</a></li>
        </ul>
    </header>
    <div class="container-slider">
        <button onclick="prev()"> Prev </button>
        <img id="slider" src="./images/10.jpg" width="600px" height="300px" />
        <button onclick="next()"> Next </button>
    </div>

</body>
<script src="https://kit.fontawesome.com/4fa07de7ff.js" crossorigin="anonymous"></script>

</html>