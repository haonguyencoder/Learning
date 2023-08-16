<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Get Method PHP</title>
</head>

<body>
    <div>
        <?php
        session_start();
        ?>
        <?php
        echo "Hi " . $_GET['name'] . ". " . "<br />";
        echo "You are " . $_GET['age'] . " years old." . "<br />";
        echo "Your hobbies are " . $_GET['hobbies'] . ". " . "<br />";
        ?>
        <a href="home.php">Turn to Home</a>
    </div>

</body>

</html>