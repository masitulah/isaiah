<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('img/2.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
  <title>Sign Up Page</title>
</head>
<body>
<div class="mymain" style="padding-left: 500px; padding-top: 15px">
  <h1>Sign Up Page</h1>
  <form method="post" action="db.php">
    <label>Username:</label>
    <input type="text" name="username2"><br><br>
    <label>firstname:</label>
    <input type="text" name="firstname"><br><br>
    <label>lastname:</label>
    <input type="text" name="lastname"><br><br>
    <label>DOB:</label>
    <input type="text" name="DOB"><br><br>
    <label>email:</label>
    <input type="text" name="email"><br><br>
    <label>phonenumber:</label>
    <input type="text" name="phonenumber"><br><br>
    <label>Password:</label>
    <input type="password" name="password2"><br><br>
    <input type="submit" name="signup" value="Sign up">
  </form>
  <p>Already have an account? <a href="index.php">Login</a></p>
</div>
</body>
</html>
