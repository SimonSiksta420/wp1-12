<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$birthyear = 1988;
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
      <li> Name: </li>
      <li> Birthday: </li>
      <li> Age </li>
    </ul>
</body>
</html>