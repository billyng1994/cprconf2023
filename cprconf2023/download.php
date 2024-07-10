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
  <link href="css/swiper-bundle.min.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="js/swiper-bundle.min.js"></script>

  <style>
    img {
      pointer-events: none;
    }
    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .swiper-slide img {
      display: block;
      width: 75%;
      height: auto;
      object-fit: cover;
    }

    .swiper-button-prev, .swiper-button-next {
      color: rgb(14, 135, 31); 
    }
    .swiper-pagination-bullet-active {
      background: rgb(14, 135, 31);
    }

    .video-player {
      width: 100%;
      height: 40vh;      
    }
  </style>
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
            <a href="downloads/Abstract_Template_for_Submission.docx" target="_blank" download style="display: block; width: fit-content;"><img style="width:60%;margin:2% 10% 5% 0;max-width:200px" src="images/wordfileicon.png" alt="wordfile" /></a>
            <br>
            <a href="downloads/Abstract_Template_for_Submission.docx" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
          <div class="col-12 col-lg-6">
            <h4>Ful Paper template for submissions</h4>
            <a href="downloads/Full_Paper_template_for_submissions.docx" target="_blank" download style="display: block; width: fit-content;"><img style="width:60%;margin:2% 10% 5% 0;max-width:200px" src="images/wordfileicon.png" alt="wordfile" /></a>
            <br>
            <a href="downloads/Full_Paper_template_for_submissions.docx" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
        </div>
      </div>
      <br />
      <br />
      <hr/>
      <!-- Conf Posters -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conference Poster</h3>
      <br />
      <div class="thumbnail_b text-center" style="max-width:320px;margin-bottom:5%">
        <a id="banner-reg-btn" href="images/posters/conf_poster.png" target="_blank" download>Download</a>
        <a href="images/posters/conf_poster.png" target="_blank" download><img src="images/posters/conf_poster.png" style="width:100%" /></a>
      </div>
      <a href="images/posters/conf_poster.png" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <br />
      <br />
      <hr/>
      <!-- Conf Booklets -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Booklet</h3>
      <a href="downloads/conf_booklet.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
      <br>
      <a href="downloads/conf_booklet.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Conf Proceedings -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conference Proceedings</h3>
      <a href="downloads/Conference_Proceedings.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
      <br>
      <a href="downloads/Conference_Proceedings.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Summary Conference Report -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Summary Conference Report</h3>
      <a href="downloads/Summary_Conference_Report.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
      <br>
      <a href="downloads/Summary_Conference_Report.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
      <hr/>
      <!-- Guidebook -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Guidebook</h3>
      <br />
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h4>English</h4>
            <a href="downloads/Guidebook_Eng.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
            <br>
            <a href="downloads/Guidebook_Eng.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
          <div class="col-12 col-lg-6">
            <h4>Traditional Chinese</h4>
            <a href="downloads/Guidebook_Trad_Chi.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
            <br>
            <a href="downloads/Guidebook_Trad_Chi.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
          <div class="col-12 col-lg-6">
            <h4>Simplified Chinese</h4>
            <a href="downloads/Guidebook_Sim_Chi.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px" src="images/book-icon.jpg" alt="pdffile" /></a>
            <br>
            <a href="downloads/Guidebook_Sim_Chi.pdf" target="_blank" download style="display: block; width: fit-content;"><img style="width:100%;max-width:200px;margin-bottom:10%" src="images/downloadbtn.png" alt="download" /></a>
          </div>
        </div>
      </div>
      <br />
      <br />
      <hr/>
      <!-- Conf Photo Gallery -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conferece Photos</h3>
      <!-- Day 1 -->
      <h4>Day 1 - 2023/07/11 <span><i>(<a href="https://connectpolyu-my.sharepoint.com/:f:/g/personal/a21068529s_connect_polyu_hk/Eu3Iz_lLwQ1NrhBndWWUeO8BGztiF4UJOxdJ_gndvXWmLQ?e=OQtAsD" target="_blank">Click here</a> to access all photos of day 1)</i></span></h4>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9108.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9124.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9128.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9145.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9334.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9347.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/DSC_9444.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/IMG-20230814-WA0001.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/IMG_2394.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/IMG_2478.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/IMG_2497.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day1/IMG_2511.jpg"></div>
        </div>
        <!-- slider navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- slider pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <br />
      <!-- Day 2 -->
      <h4>Day 2 - 2023/07/12 <span><i>(<a href="https://connectpolyu-my.sharepoint.com/:f:/g/personal/a21068529s_connect_polyu_hk/EkCHkol-OrZKjxHLoKXfdwkB4mmQGzSJxGqXupT8YaQEoA?e=ovIgMP" target="_blank">Click here</a> to access all photos of day 2)</i></span></h4>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_0008.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_0014.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9524.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9527.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9608.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9686.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9687.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9716.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9772.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9788.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9975.jpeg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day2/DSC_9978.jpeg"></div>
        </div>
        <!-- slider navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- slider pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <br />
      <!-- Day 3 -->
      <h4>Day 3 - 2023/07/13 <span><i>(<a href="https://connectpolyu-my.sharepoint.com/:f:/g/personal/a21068529s_connect_polyu_hk/EiGYzMaRrKxBvjq3rtV_grABXVWLb83mYe45qyMg1RUXuQ?e=KQisVx" target="_blank">Click here</a> to access all photos of day 3)</i></span></h4>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0006.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0009.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0013.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0021.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0025.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0027.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0028.jpg"></div>
          <div class="swiper-slide"><img src="images/activity_photos/day3/IMG-20230813-WA0029.jpg"></div>
        </div>
        <!-- slider navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <!-- slider pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <hr/>

      <!-- Conf Videos -->
      <h3 style="border-left: solid 5px green;padding-left: 10px;">Conferece Videos</h3>

      <h4>Conference hightlight</h4>
      <iframe style="width:100%;height:60vmin" src="https://www.youtube.com/embed/AA1xYxE3fkQ" title="Conference 2023 highlight" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>11 Aug Morning Session</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/AaHrORcE1b0" title="11 Aug Morning 8:57 AM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>11 Aug Paper Session 1</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/iCotfsHOeDI" title="11 Aug Afternoon 2 1213PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>11 Aug Paper Session 2</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/9_PUHjy-BEg" title="11 Aug Afternoon 2  16:52 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>11 Aug Industrial Session</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/AX_VkErACMk" title="11 Aug Afternoon 3 1:12 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>12 Aug Morning Session</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/rcMEKM5Xb2E" title="12 Aug Morning 8:40 AM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>12 Aug Paper Session 1</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/jsYKgGlNc3g" title="12 Aug Afternoon 1 1:27 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4>12 Aug Paper Session 2</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/JK5u2VQR6cM" title="12 Aug Afternoon 2 13:28PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
            <h4>12 Aug Industrial Session</h4>
            <iframe class="video-player" src="https://www.youtube.com/embed/Id_s_z8umkM" title="12 Aug Afternoon 3 1:28 PM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

    </div> <!-- /container -->
  </div>
  <?php include "components/footer.php" ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php include "components/fixedButton_n_scripts.php" ?>

  <script>
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
  </script>
</body>

</html>
