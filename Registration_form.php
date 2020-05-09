<!DOCTYPE html>
<html lang="en">
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>registration</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php
    require('connect.php');
    if(isset($_REQUEST['loginid'])){
        $loginid = mysqli_real_escape_string($conn,$_POST['loginid']);
        $passwords = mysqli_real_escape_string($conn,$_POST['passwords']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $dayss = mysqli_real_escape_string($conn,$_POST['dayss']);
        $dayinweek = mysqli_real_escape_string($conn,$_POST['dayinweek']);
        $months = mysqli_real_escape_string($conn,$_POST['months']);
        $years = mysqli_real_escape_string($conn,$_POST['years']);
        $zodiac = mysqli_real_escape_string($conn,$_POST['zodiac']);
        $yearZodiac = mysqli_real_escape_string($conn,$_POST['yearZodiac']);
        $query ="INSERT INTO user(loginid,passwords,email,uname,dayss,dayinweek,months,years,zodiac,yearZodiac)
                    VALUE('$loginid','$passwords','$email','$uname',$dayss,'$dayinweek',$months,$years,'$zodiac','$yearZodiac')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
                <h2>register successfully</h2>
                <br>Click here to <a href='login.php'>login</a> 
                </div>";
            
        }
        else{
            echo "unsuccess";
        }
    }
    else {
?>
        <div class="form">
        <h1>register</h1>
        <form name="registration" action="" method="POST">
        <input type="text" name = "loginid" placeholder="Username"require><br>
        <input type="password" name = "passwords" placeholder="password" require> <br>
        <input type="email" name = "email" placeholder="E-mail" require><br>
        <input type="text" name = "uname" placeholder="Username" require><br>
        <input type="number" name = "dayss" placeholder="date" min="1" max="31" step="1" value="1"require><br>
        <input type="text" name = "dayinweek" placeholder="วันที่เกิด(จ-อา)" require><br>
        <input type="text" name = "months" placeholder="Month" require><br>
        <input type="text" name = "years" placeholder="Year" require><br>
        <input type="text" name = "zodiac" placeholder="ราศี" require><br>
        <input type="text" name = "yearZodiac" placeholder="ปีนักษัตร" require><br>
        <input type ="submit" name="submit" value="Register"><br>
        </form>
    </div>
        <?php  }  ?>
</body>
</html>