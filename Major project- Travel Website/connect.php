<?php 
$username=filter_input(INPUT_POST,'Username');
$password=filter_input(INPUT_POST,'Password');
if(!empty($username)){
if(!empty($password)){
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="user";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_erroe()){
    die('Connect Erroe('.mysqli_connect_errno().')'
    .mysqli_connect_erroe());
}
else{
    $sql="INSERT INTO user(Username,Password)
    values('$username','$password')";
    if($conn->query($sql)){
        echo "New record is added";
    }
    else{
        echo"Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}
}
else{
    echo"password should not be empty";
    die();
}
else{
    echo"username should not be empty";
    die();
}