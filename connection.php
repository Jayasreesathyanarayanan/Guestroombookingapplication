<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $ph_No = $_POST['ph_No'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $arrive = $_POST['arrive'];
    $depature = $_POST['depature'];
    $people = $_POST['people'];
    $rtype= $_POST['rtype'];
    $need = $_POST['need'];
    // database Connection
    $conn = new mysqli('localhost','root','','booking');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);

    }else{
        $stmt = $conn->prepare("insert into reservation(name,mail,ph_No,address,pincode,arrive,depature,people,rtype,need)
        values(?,?,?,?,?,?,?,?,?,?)");
        //$stmt->bind_param(ssisibbsss,$name,$mail,$ph_No,$address,$pincode,$arrivel,$depature,$people,$rtype,$need);
        echo "Reservation Sucessfull...!";
        $stmt->close();
       $conn->close();
    }

?>