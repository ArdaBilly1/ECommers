<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN - AMAN</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
    <div class="header">
        <h1>AMAN MALANG</h1>
    </div>
    <br>
    <br>
    <div class="login">
    <br>
        <form action="function/login.php" method="POST" onSubmit="return validasi()">
            <div>
                <label>Username :</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label>Password :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Login" class="btnLogin">
                <label style="padding-left: 115px;">Doesn't have an account? Sign up <a href="register.php">here.</a></label>
            </div>
            
        </form>
    </div>
    <br>
    <br>
    <div class="footer">
        <p>© 2019 AMAN.DEPT ORIGINAL MADE IN MALANG</p>
    </div>
</body>

<script type="text/javascript">
    function validasi(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if(username != "" && password != ""){
            return true;
        } else {
            alert('Username dan Password harus di isi !');
            return false;
        }
    }
</script>
</html>