<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    require('connect.php');
    session_start();
    if(isset($_POST['loginid'])){
        $loginid = mysqli_real_escape_string($conn,$_POST['loginid']);
        $passwords = mysqli_real_escape_string($conn,$_POST['passwords']);
        $query = "SELECT * FROM user WHERE loginid ='$loginid' AND passwords='$passwords'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        if(mysqli_num_rows($result)){
            $_SESSION['loginid']=$loginid;
            ?>
            <script>
            window.location.replace("index.php?loginid=<?php echo ($loginid);?>");
            </script>
            <?php
    }
        else{
            echo "<div class ='form'>
                <h3>ID/PW incorrect.</h3>
                <br>Click here to<a href='Registration_form.php'>Regis</a>
                <br>Click here to<a href='login.php'>login again</a>
            </div>";
        }
    }
    else{
        ?>
        <div class ="form">
            <h1>login</h1>
            <form action="" method="post" name="login">
                <input type="text" name=loginid placeholder="username" requierd>
                <input type="password" name=passwords placeholder="password" requierd>
                <input type="submit" name=submit value="Login">
            </form>
            <p>not regis yet? <a href ="Registration_form.php">Regis</a></p>
        </div>
    <?php } ?>
</body>
</html>