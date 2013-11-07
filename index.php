<!DOCTYPE html>
<html>
<body>

<h1>Awesome Tic-Tac-Toe (Welcome Screen)</h1>
<br>
Returning users please login:
<br>
<form action="welcome.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="hidden" name="usertype" value="old">
<input type="submit">
</form>
<br>
<br>
<br>
<br>
First timers please register:
<br>
<form action="welcome.php" method="post">
Name:     <input type="text" name="name"><br>
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="hidden" name="usertype" value="new">
<input type="submit">
</form>



</body>
</html>