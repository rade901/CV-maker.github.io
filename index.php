<?php
include 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cv Ajax Form</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" href="assets\style.css">
</head>
<body class="FormBody">

<!-- Form start -->
<form action="cvForm.php" method="post" class="ajax" enctype="multipart/form-data" id="myform">
<div class="container">
    <center><h1 class="Form-label">Create CV</h1></center>
  <div class="row">
<div class="mb-2">
    <label for="Name1" class="form-label">Name</label>    
    <input type="text" name="name" class="form-control" id="Name1" >
  </div>
  <div class="mb-2">
    <label for="lastname1" class="form-label">Lastname</label>
    <input type="text" name="lastname" class="form-control" id="lastname1">
  </div>
  <div class="mb-2">
    <label for="Email1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="Email1">
  </div>
  <div class="mb-2">
    <label for="Number1" class="form-label">Contact</label>
    <input type="number" name="contact" class="form-control" id="Number1">
  </div>
  <div class="mb-2">
    <label for="Adress1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="Adresa1">
  </div>
  <div class="mb-2">
  <label for="Sex1" class="form-label">Sex</label>
  <select class="form-select" name="sex" aria-label="Default select">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
  </div>
  
  <label for="Birth1" class="form-label">Date of birth/City</label> 
  <div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="mb-3">
    <label for="birth" class="form-label">Birth</label>
    <input type="date" name="birth" class="form-control" id="datepicker" data-date-format="mm/dd/yyyy>" >
  </div>
    </div>
    <div class="col-sm">
    <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="city">
  </div>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
 
  <div class="col-sm">
  <div class="mb">
    <label for="skill11" class="form-label">Skills</label>
    <input type="text" name="skill" class="form-control" id="skill1">
  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputUrl1" class="form-label">Github</label>
    <input type="text" name="url" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  </div>
  <div class="mb-3">
  <textarea id="summernote" name="editordata"></textarea>
  </div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Experience',
        tabsize: 2,
        height: 100
      });
    </script>
    <div>
<button type="submit" class="btn btn-primary" id="submit">Make</button>
</div>
  

</form>
<!-- Form end -->
<script src="skill.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>