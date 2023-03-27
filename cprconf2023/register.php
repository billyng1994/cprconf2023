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
			echo "$registrationPage$confName";
		?>
	</title>
  <!-- Font Aewsome CSS -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/navbar-fixed-top.css" rel="stylesheet">
  <!-- Overriding css that is literally copy pasted for the entire site -->
  <link href="css/main-override.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
  #conf_detail {
    width: 70%;
    background-color: #f5f5f5;
    padding-left: 20px;
  }
  #conf_detail #time_session{
    display: block;
    padding-left: 50px;
  }
  
  #free_of_charge {
    font-size: 24px !important;
    color: #111177;
    font-weight: bold;
    text-decoration: underline;
    text-align: center;
  }

  #reg_form {
    width: 100%;
  }
  #reg_form > embed {
    width: 100%;
  }
</style>

<body class="fontfamily">
  <?php include "components/header.php" ?>

  <div class="container">
    <div class="jumbotron">
    
        <h2 style="color: #111177;">Conference Registration</h2>
        
        <br>

        <p>The conference will concentrate on the potential and challenges that GBA cross-border e-commerce firms confront. These considerations might include the right use of cutting-edge technology and knowledge management, research knowledge and skills, education and training, and regulatory and governance processes and protocols. For the first time, such cross-border e-commerce concerns will be addressed at this conference.</p>

        <!-- Conference Detail -->
        <h2 style="color: #111177;">Conference Detail</h2>
        <div id="conf_detail">
          <p>
            Date: 11th - 12th August, 2023
            <br>
            Time: 
            <br>
            <span id="time_session">
              Day 1: 09:00 - 18:30 <br>
              Day 2: 09:00 - 18:30
            </span>
            <br>
            Venue: PolyU Hung Hom Bay Campus & online via Zoom (Hybrid mode)
          </p>

          <!-- <p><a href="https://forms.gle/xUWin1ttpi8Wh9rm9">Click here </a>to make your registration</p> -->
        </div>        
        <p id="free_of_charge">The Conference is Free of Charge</p>

        <!-- <iframe id="reg_iframe" width="100%" height="900px" src="https://forms.gle/xUWin1ttpi8Wh9rm9" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen></iframe> -->
        <object id="reg_form" data="https://forms.gle/xUWin1ttpi8Wh9rm9" height="400">
          <embed src="https://forms.gle/xUWin1ttpi8Wh9rm9"  height="400">
          Error: Embedded data could not be displayed.
        </object>
        <p><i>Or <a href="https://forms.gle/xUWin1ttpi8Wh9rm9" target="_blank">click here</a> if your cannot see the registration form above</i></p>
    </div>
  </div> <!-- /container -->

  <?php include "components/footer.php" ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include "components/fixedButton_n_scripts.php" ?>

</body>

</html>