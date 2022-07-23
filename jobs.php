<?php include 'header.php' ?>
<?php include 'config.php' ?>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
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
    $sql="SELECT  `name`, `qual`, `year` FROM `candidates`";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0)
    {
      while($rows=$result->fetch_assoc()){
        echo'

    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'$row['name'].'</td>
      <td>'$row['apply'].'</td>
      <td>'$row['year'].'</td>
    </tr>';
    else{
      echo"";
    }
    ?>
  </tbody>
</table>