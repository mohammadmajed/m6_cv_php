<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youre CV</title>
</head>
<body>
    

<?php
 
session_start();

if (isset($_POST['create_cv'])) {
    // $Image = isset($_POST['img']) ? $_POST['img'] : null;
    $First_Name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
    $Second_Name = isset($_POST['second_name']) ? $_POST['second_name'] : null;
    $Last_Name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
    $DOB_Name = isset($_POST['dob']) ? $_POST['dob'] : null;
    $study_major = isset($_POST['study_major']) ? $_POST['study_major'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $github = isset($_POST['github']) ? $_POST['github'] : null;
    $linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : null;
    $carrer = isset($_POST['carrer']) ? $_POST['carrer'] : null;
    $summary = isset($_POST['summary']) ? $_POST['summary'] : null;
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $Options = isset($_POST['carrer']) ? $_POST['carrer'] : null;
}
$details = json_decode(file_get_contents('./details.json'));
$id =count($details);  

// if(isset ($_POST['create_cv'])){
//     echo "<p><strong> Image: </strong><img src='$Image'></p>";
 
// }
if(isset ($_POST['create_cv'])){
    echo "<p><strong>Full name: </strong>$First_Name $Second_Name $Last_Name</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p><strong> First Name: </strong>$First_Name</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p> <strong>Second Name: </strong>$Second_Name</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p> <strong>Last Name: </strong>$Last_Name</p>";
  
}
if(isset ($_POST['create_cv'])){
    echo "<p><strong> Date of Birth: </strong>$DOB_Name</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p> <strong>Study Major: </strong>$study_major</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p> <strong>Email: </strong>$email</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p><strong> linkedin link: </strong>$linkedin</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p><strong> Github link: </strong>$github</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<strong> <p>Carrer Path:</strong>$carrer</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p><strong>About Me: </strong>$summary</p>";
    
}
if(isset ($_POST['create_cv'])){
    echo "<p><strong>Gender: </strong>$gender</p>";
    
}
file_put_contents('./details.json',json_encode($details));



?>
</body>
</html>