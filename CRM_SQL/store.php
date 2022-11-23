<?php
session_start();
include "./functions.php";
$message="";
$error="";
    $alert_flag=true;
    $conn =new mysqli("localhost","root", "","school");
$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)&& isset($_POST["std_details"])) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");
        $First_Name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
        $Last_Name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
        $DOB_Name = isset($_POST['dob']) ? $_POST['dob'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $summary = isset($_POST['summary']) ? $_POST['summary'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $living_place = isset($_POST['living_place']) ? $_POST['living_place'] : null;


    if ($conn->connect_error){
        $error="Connections Failed: ".$conn->connect_error;
    }else{
        $sql = "INSERT INTO 'details' (First_Name,Last_Name,DOB_Name,email,living_place,summary,gender,phone,)
        VALUES('$First_Name','$Last_Name','$DOB_Name','$email','$living_place','$summary','$gender','$phone')";        if ($conn->query($sql)===true){
            $message="New Student register";
        }else{
            $error="error:".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
   
