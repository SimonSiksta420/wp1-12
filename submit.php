<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$school = filter_input(INPUT_POST, 'school');
$class = filter_input(INPUT_POST, 'class');
$hobbies = filter_input(INPUT_POST, 'hobbies');
$textarea = filter_input(INPUT_POST, 'description');
$birthyear = filter_input(INPUT_POST, 'birthday');
$guessage = date('Y') - $birthyear;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Formulář byl odeslán </p>
    <ul>
      <li> Name: <?= $firstname ?> </li>
      <li> Surname: <?= $lastname ?> </li>
      <li> School: <?= $school ?> </li>
      <li> Class: <?= $class ?> </li>
      <li> Hobbies <?= $hobbies ?> </li>
      <li> Birthday: <?= $birthyear ?> </li>
      <li> Age: <?= $guessage ?> </li>
      <li> description: <?= $textarea ?>
    </ul>
</body>
</html>