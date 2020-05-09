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
    require ('connect.php');
    if(isset($_REQUEST['loginid'])){
    $loginid=stripcslashes($_REQUEST['loginid']);
    $loginid=mysqli_real_escape_string($conn,$loginid);
    echo "hello :";
    $query ="SELECT uname,coDescription FROM user,color WHERE coName = 'blue' AND loginid='$loginid' ";
    $result =mysqli_query($conn,$query);
    $row=mysqli_fetch_row($result);
    echo "Name: ".$row[0],'<pre>';
    echo "colorDescription: ".$row[1];

    }
     echo'id ',($loginid); ?>    
</body>
</html>