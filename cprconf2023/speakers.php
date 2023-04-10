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
			echo "$speakerPage $confName";
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

<style>
	.speaker_topics {
		font-family: Georgia, 'Times New Roman', Times, serif;
		font-style: italic;
	}
	.section_heading {
		border-bottom: 2px solid rgb(14,135,31);
		padding: 0px 0px 10px 0px;
		margin-bottom: 30px;
	}
	.speaker {
		margin-bottom: 5rem;
	}
	.speaker a{
		font-weight: bold;
	}
</style>

<body class="fontfamily">
	<?php include "components/header.php" ?>
	<div class="container">
		<div class="jumbotron">
			<!-- PAGE HEADER: Speakers  -->
			<h2 style="color: #111177;">Conference Speakers</h2><br>
			
			<!-- Keynote Speakers - SECTION HEADER -->
			<h3 class="section_heading">Keynote Speakers</h3>

			<!-- Keynote Speakers - SECTION CONTENT - START  -->
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Wang_Peng.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Prof. WANG Peng</a> <br>
						Professor, Jinan University
					</p>
					<blockquote class="speaker_topics">Future Development of Guangdong-Hong Kong-Macao Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Sunny_Ho.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. HO Sunny Lap-kee (MH, JP)</a> <br>
						Executive Director, The Hong Kong Shippers' Council
					</p>
					<blockquote class="speaker_topics">Defining Hong Kong's Role with regards to Cross-border Ecommerce Business</blockquote>
				</div>
			</div>
			
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Tse_Hing_Ming.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. Tse Hing Min, Andy</a> <br>
						LL.B., Partner, HK & GBA Lawyer - SUN LAWYERS
					</p>
					<blockquote class="speaker_topics">Contemporary Legal Issues in the Greater Bay Area E-Commerce</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/So_Kai_Man.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. SO Kai-man</a> <br>
						Executive Chairman, Hong Kong Cross-Border E-Commerce Association
					</p>
					<blockquote class="speaker_topics">How can we promote Hong Kong to become the Asian hub for green cross-border e-commerce in coordination with the Greater Bay Area?</blockquote>
				</div>
			</div>
			<!-- Keynote Speakers - SECTION CONTENT - END -->


			<!-- Speakers - SECTION HEADER -->
			<h3 class="section_heading">Speakers</h3>
			
			<!-- Speakers - SECTION CONTENT - START -->
			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Wilson_Shum.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. SHUM Wilson Kwok-fung</a> <br>
						CEO/Co-Founder - SCALE InnoTech
					</p>
					<blockquote class="speaker_topics">Exploring Opportunities with Cross-Border E-commerce, Online to Offline Business Models</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/YukMingTang.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. TANG Yuk-ming</a> <br>
						Senior Teaching Fellow - The Hong Kong Polytechnic University
					</p>
					<blockquote class="speaker_topics">The Adoption of Blockchain for Cross-Border E-commerce in the Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/HO_To_Sum.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. HO George To-sum</a> <br>
						Associate Professor - The Hang Seng University of Hong Kong
					</p>
					<blockquote class="speaker_topics">Trends of Business Intelligence for Cross-Border E-commerce in the Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Gavin_Chau.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Prof. CHAU Gavin Ka-yin</a> <br>
						Associate Dean and Professor - City University of Macau
					</p>
					<blockquote class="speaker_topics">Exploring Destination Branding for Guangdong-Hong Kong-Macao Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Michelle.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms CHENG Michelle Shuk-yuen</a> <br>
						General Manager - Greater Bay Airlines Company Limited
					</p>
					<blockquote class="speaker_topics">Emerging Aviation Issues: Cross-border E-commerce Business for the Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Paul_Li.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. LI Paul Ping Hung</a> <br>
						President - Transland Shipping (1971) Group
					</p>
					<blockquote class="speaker_topics">Import Drugs into the Greater Bay Area: Cases on Cross-border E-commerce</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Yang_Huijun.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr. YANG Huijun</a> <br>
						Assistant Professor - Macao Institute for Tourism Studies
					</p>
					<blockquote class="speaker_topics">Smart technology supports the development of cross-border consumption in the Catering Industry</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/placeholder.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. YEUNG John Kunwoon</a> <br>
						Director, Bookschwa Technologies
					</p>
					<blockquote class="speaker_topics">Twin Engine of Empowering Cross-Border E-commerce Platforms: The Applications of Cloud Computing and Artificial Intelligence (AI)</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Harman_Ng.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. NG Harman Wai-chung</a> <br>
						Vice Chairman, The Federation of Greater Bay International Logistics and Supply Chain Industry
					</p>
					<blockquote class="speaker_topics">The Regional Comprehensive Economic Partnership (RCEP) and China Import/Export Trade Facilitation</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Sio_Hou_In.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. SIO Sandy Hou-in</a> <br>
						Vice President, Supervisory Council of the Macau Institute for Corporate Social Responsibility in Greater China
					</p>
					<blockquote class="speaker_topics">Sustainability and Diversification in Cross-border E-commerce for the Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/ZHANG_Ruopiao.jpg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Dr ZHANG Ruopiao</a> <br>
						Assistant Professor, Macau University of Science and Technology
					</p>
					<blockquote class="speaker_topics">The Role of GBA Cooperation in the China Biodiversity Strategy 2030 through the Lens of Cross-border Consumption</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/placeholder.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. WONG Ling</a> <br>
						Founder, 100degreec & President of Rotary Club of Smart Hong Kong
					</p>
					<blockquote class="speaker_topics">The Effectiveness of Omni channel for Cross-border E-commerce in the Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/placeholder.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. HUNG Alex Man-ching</a> <br>
						Managing Director of Crossover Green Sustainability for Better International. Co. Ltd. & Charter President of Rotary Club of Peninsula East
					</p>
					<blockquote class="speaker_topics">Cross-border E-commerce in the Greater Bay Area</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/placeholder.png" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Ms. Tannie SZE</a> <br>
						Executive Director of Winson Holdings Hong Kong Limited
					</p>
					<blockquote class="speaker_topics">Sustainability in the Greater Bay Area Ports and Supply Chain</blockquote>
				</div>
			</div>

			<div class="row speaker">
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="img-rounded" style="box-shadow: 0px 0px 8px 5px rgba(0,0,0,0.2);">
						<img src="images/speakers/Kwok_Man_Ki.jpeg" style="width:100%">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<p>
						<a href="#" target="_blank">Mr. KWOK Man-ki Philip Kino</a> <br>
						Founder & CEO of GPEC Holding Limited; President of Hong Kong Cross-Border E-commerce Association
					</p>
					<blockquote class="speaker_topics">Cross-border E-Commerce Payment Security and Fraud Prevention</blockquote>
				</div>
			</div>
			<!-- Keynote Speakers - SECTION CONTENT - END -->

		</div>
	</div> <!-- /container -->
	<?php include "components/footer.php" ?>

	<!-- Bootstrap core JavaScript
  ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php include "components/fixedButton_n_scripts.php" ?>
</body>

</html>