<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/polypng.png">
  <title>
		<?php 
			include "components/page_title.php";
			echo "$downloadPage$confName";
		?>
	</title>
  <!-- Font Aewsome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/navbar-fixed-top.css" rel="stylesheet">
  <!-- Overriding css that is literally copy pasted for the entire site -->
  <link href="css/main-override.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body class="fontfamily">
  <?php include "components/header.php" ?>
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h2 style="color: #111177;">Download</h2><br>
      
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Templetes</h3>
      <br />
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h4>Abstract Template for Submission</h4>
            <a href="downloads/Abstract_Template_for_Submission.docx" target="_blank" download><img style="width:30%;margin:2% 10% 5% 0;max-width:200px" src="images/wordfileicon.png" alt="wordfile" /></a>
            <br>
            <a href="downloads/Abstract_Template_for_Submission.docx" target="_blank" download><img style="width:40%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
          <div class="col-12 col-lg-6">
            <h4>Ful Paper template for submissions</h4>
            <a href="downloads/Full_Paper_template_for_submissions.docx" target="_blank" download><img style="width:30%;margin:2% 10% 5% 0;max-width:200px" src="images/wordfileicon.png" alt="wordfile" /></a>
            <br>
            <a href="downloads/Full_Paper_template_for_submissions.docx" target="_blank" download><img style="width:40%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
        </div>
      </div>
      <br />
      <br />
      <hr/>
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conference Poster</h3>
      <br />
      <div class="thumbnail_b text-center" style="max-width:320px;margin-bottom:5%">
        <a id="banner-reg-btn" href="images/posters/conf_banner.jpg" target="_blank" download>Download</a>
        <a href="images/posters/conf_banner.jpg" target="_blank" download><img src="images/posters/conf_banner.jpg" style="width:100%" /></a>
      </div>
      <a href="images/posters/conf_banner.jpg" target="_blank" download><img style="width:40%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
    </div> <!-- /container -->
  </div>
  <?php include "components/footer.php" ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include "components/fixedButton_n_scripts.php" ?>
</body>

</html>