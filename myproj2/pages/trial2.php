<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="background-color:gray;" class="login">
            <h1>Login</h1>
            <form action="../process/loginprocess.php" method="POST">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="email" placeholder="Email" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login" name="btn-login">

         <a href="register.php" style="color:black;">Dont have an account?</a>


            </form>
        </div>
</body>
</html>