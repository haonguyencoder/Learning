<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Get Method PHP</title>
  <link rel="icon" type="image/x-icon" sizes="250x250" href="./images/favicon.svg">
  <link rel="stylesheet" href="style.css">
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
  <div class="container-formActionGet">
    <form class="formActionGet" action="actionGet.php" method="get">
      <input class="formActionGet-input" type="text" name="name" placeholder="Name" required /></p><br /><br />
      <input class="formActionGet-input" type="text" name="age" placeholder="Age" required /></p><br /><br />
      <input class="formActionGet-input" type="text" name="hobbies" placeholder="Hobbies" required /></p><br /><br />
      <input class="formActionGet-submit" type="submit" name="submit" value="Submit" />
    </form>
  </div>
</body>
</html>