<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER - INOCHI</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
    <div class="header">
        <h1>INOCHI</h1>
    </div>
    <br>
    <br>
    <div class="register">
    <br>
        <form action="function/reg.php" method="POST" onSubmit="return validasi()">
            <div>
                <label>Name :</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label>Username :</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label>Password :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Register" class="btnReg">
                <label style="padding-left: 128px;">Already have an account? Login <a href="index.php">here.</a></label>
            </div>
        </form>
    </div>
    <br>
    <br>
    <div class="footer">
        <p>© 2019 INOCHI.DEPT ORIGINAL MADE IN MALANG</p>
    </div>
</body>

<script type="text/javascript">
    function validasi(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var name     = document.getElementById("name").value;

        if(username != "" && password != "" && name != ""){
            return true;
        } else {
            alert('Data tidak boleh ada yang kosong !');
            return false;
        }
    }
</script>
</html>