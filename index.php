<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="submit.php" method="post">
<label for="i-firstname"> Firstname: </label>
<input type="text" name="firstname" id="">
<br>
<label for="i-lastname"> Surname: </label>
<input type="text" name="lastname" id="">
<br>
<label for="i-birthday"> Your birthday: </label>
<input type="number" min="1900" max="2020" name="birthday" id="">
<br>
<label for="i-school"> School you go to: </label>
<input type="text" name="school" id="">
<br>
<label for="i-hobbies"> Your hobbies: </label>
<input type="text" name="hobbies" id="">
<br>
<label for="i-class"> Class: </label>
<input type="text" name="class" id="">
<br>
<textarea name="description" id="i-description" cols="30">
Fill it out please
</textarea>
<br>
<input type="submit" value="odeslat">
<br>
</form>

</body>
</html>