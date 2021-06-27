<?php
$databaseHost='localhost';
$databaseName='Booking';
$databaseUsername='root';
$databasePassword='';

$mysqli=mysqli_connect($databaseHost,$databaseName,$databaseUsername,$databasePassword);
if(isset($_POST[''])){
    $uname=$_POST['Uname'];
    $upassword=$_POST['password'];

    $res=mysqli_query($mysqli,"select * from admin where uname='$uname' and password='$upassword'");
    $result=mysqli_fetch_array($res);
    if($result)
    {
        echo "your login is successful";

    }
    else{
        echo "login failed";
    }
}
?>