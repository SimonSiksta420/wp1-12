<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
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
      <li> Birthday: <?= $birthyear ?> </li>
      <li> Age: <?= $guessage ?> </li>
    </ul>
</body>
</html>