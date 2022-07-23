<?php

$server='localhost';
$username='root';
$password='';
$database='1stop';


$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"";
session_start();


if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='email id or password is incorrect';
    }
}


if(isset($_POST['job1'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $jobdescription=$_POST['jobdescription'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job="INSERT INTO `jobs`( `cname`, `position`, `jobdescription`, `skills`, `CTC`) VALUES  ('$cname','$position','$jobdescription','$skills','$CTC')";
    mysqli_query($conn,$job);
}


if(isset($_POST['apply1']))
{
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    
    $can="INSERT INTO `candidates`( `name`, `qual`, `year`, `apply`) VALUES ('$name','$apply','$qual','$year')";
    
    mysqli_query($conn,$can);

}

?>