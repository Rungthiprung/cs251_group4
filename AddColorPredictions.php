<!DOCTYPE html>
<html>
<head>
<meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">  
        <title>Addcolor</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    require('connect.php');
    if(isset($_REQUEST['coName'])){
        $coName = stripcslashes($_REQUEST['coName']);
        $coName = mysqli_real_escape_string($conn,$coName);
        $coYear = stripcslashes($_REQUEST['coYear']);
        $coYear = mysqli_real_escape_string($conn,$coYear);
        $coDescription = stripcslashes($_REQUEST['coDescription']);
        $coDescription = mysqli_real_escape_string($conn,$coDescription);
    $query = "INSERT INTO color(coName,coYear,coDescription)VALUE('$coName',$coYear,'$coDescription')";
    $result = mysqli_query($conn,$query);
    if($result){
        echo "
        <div class='form'>
                <h2>insert successfully</h2>
            </div>";
    }
    }
    else {
?>
        <div class="form">
        <h1>register</h1>
        <form name="Addcolor" action="" methos="POST">
        <input type="text" name = "coName" placeholder="colorName" require><br>
        <input type="text" name = "coYear" placeholder="Year" require> <br>
        <input type="text" name = "coDescription" placeholder="colorDescription" require><br>
        <input type ="submit" name="submit" value="ADD"><br>
        </form>
    </div>
        <?php  }  ?>
    </body>
</html>