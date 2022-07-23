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

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `jobs`(`cname`, `positon`, `Jdesc`, `skills`, `CTC`) VALUES ('cname','pos','Jdesc','skills','CTC')";
    if(mysqli_query($conn,$sql)){
        echo"New Job posted";
    }
    else{
        echo "ERROR: failed to post the job $sql, ".mysqli_error($conn);
    }
}
?>