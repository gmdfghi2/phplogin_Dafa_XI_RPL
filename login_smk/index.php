<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - SMK Bunda Kandung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="login.php" method="post">
        <div class="container" id="signIn" >
            <h2 class="form-title">Form Login</h2>

                <div class="input-group">
                <i class="fas fa-envelope"></i>
                    <input type="text" name="username" placeholder="Username" class="input-field" require>
                </div>

                <div class="input-group password">
                <i class="fas fa-user"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <input type="submit" class="btn" value="Login">
        </div>
    </form>
</body>
</html>

