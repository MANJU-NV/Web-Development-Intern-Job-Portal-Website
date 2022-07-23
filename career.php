<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
  .Centered{
        position:absolute;
        text align:center;
        top:40px;
        left:10px;
        color:purple;
        font-family:georgia;
      }
      .col-md-4{
          margin-top:20px;
      }
      .jobs{
          border:2px solid orange;
          padding:5px;
          background-image:linear-gradient(180deg,white,gray);
      }
    
    p{
        font-family:georgia;
        font-size:15px;
    }
  </style>
    <title>career</title>
</head>
<body>

<div class="banner">
    <img src="image2.jpg" alt="" class="img-fluid" style="width:100%; height:300px;">
    <div class="Centered">
   <h1>Job Portal</h1>
   <h3>Best jobs available matching your skills</h3>
  </div>
</div>
<div class="row">
<?php 
    
     
    $sql = "SELECT `id`, `cname`, `position`, `jobdescription`, `skills`, `CTC` FROM `jobs`";
    $result = mysqli_query($conn,$sql);
    $i=0;
  if($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
    
    echo'
    <div class="col-md-4">
    <div class="jobs">
    <h3 style="text-align:center;">'.$row['position'].'</h3>
    <h4 style="text-align:center;">'.$row['cname'].'</h4>
    <p style="color:black;text-align:justify;">'.$row['jobdescription'].'</p>
    <p style="color:black;"><b>Skills Required:</b>'.$row['skills'].'</p>
    <p style="color:black;"><b>CTC:</b>'.$row['CTC'].'</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
    Apply for Job
  </button>
    </div>
    </div>';

  }
}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="apply"></textarea>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passedout:</label>
            <input type="text" class="form-control" name="year">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="apply1" class="btn btn-primary" >Apply</button>
      </div>
    </div>
  </div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>