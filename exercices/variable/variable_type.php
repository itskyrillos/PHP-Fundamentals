<?php
$firstname = "Cyrille";
$age = 23;
$eyesColor = "blue";
$family = array("Thierry", "Geneviève");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Hi! My name is <?php echo $firstname ?>.</p>
    <p>I am <?php echo $age ?> years old.</p>
    <p>My eyes are <?php echo $eyesColor ?></p>
    <p>The first person in my family is <?php echo $family[1] ?></p>
</body>

</html>