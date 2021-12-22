<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CV</title>
    <link rel="stylesheet" href="assets\style.css">
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="google-translate-customization" content="e6d13f48b4352bb5-f08d3373b31c17a6-g7407ad622769509b-12"></meta>
</head>
<body>
<div class="container d-flex flex-row-reverse justify-content-right mt-50 mb-50">
        <div class="row">
    <div id="google_translate_element"></div>
</div>
</div>
<div id="invoice">
<div class="container">
    <div class="pt-5" id="top">
 <h4><?php echo $_POST['name'].' '. $_POST['lastname']?></h4>
 <h5><?php echo  $_POST['address'] ?></h5>
 </div>
 <div class="container" id="PostBody">
  <div class="row">
    <div class="col">
    <h6>Date of birth:</h6>
    </div>
    <div class="col">
    <?php echo $_POST['birth']?>
    </div>
    <div class="col">
    <?php echo $_POST['city']?>
    </div>
  </div>
</div>
<div class="container" id="PostBody">
  <div class="row">
    <div class="col">
    <h6>Gender:</h6>
    </div>
    <div class="col">
    <?php echo $_POST['sex']?>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
<hr>
<div class="container" id="PostBody">
  <div class="row">
    <div class="col">
    <h6>Email:</h6>
    </div>
    <div class="col">
    <?php echo $_POST['email']?>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
<div class="container" id="PostBody">
  <div class="row">
    <div class="col">
    <h6>Contact:</h6>
    </div>
    <div class="col">
    <?php echo  $_POST['contact']?>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
<hr>
<div class="container" id="PostBody">
  <div class="row">
    <div class="col">
    <h6>Experience:</h6>
    </div>
    <div class="col-md-8">
    <?php echo $_POST['editordata'];?>
    </div>
    </div>
    <hr>
    <div class="container">
  <div class="row">
    <div class="col">
    <h6>Skills:</h6>
    </div>
    <div class="col">
    <?php echo $_POST['skill']?>
    </div>
    <div class="col">
    </div>
    </div>
  </div>
</div>
<hr>
<div class="container" id="PostBody">
  <div class="row">
    <div class="col">
    <h6>Github:</h6>
    </div>
    <div class="col">
    <i class="fa fa-link" aria-hidden="true"><a  href="<?php echo $_POST['url']?>">Github</a></i>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
<hr>
</div>
</div>

  <div class="container d-flex flex-row-reverse justify-content-right mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-5">
                <button class="btn btn-primary" id="download"> download pdf</button>
                <button class="btn btn-warning"><a class="back" href="index.php">New</a></button>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>