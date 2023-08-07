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
			echo "$programPage$confName";
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
    /* .center-text > tbody > tr *:not(div) {
        padding: 18px 10px;
    } */
    .center-text > tbody > tr > td {
        text-align: center;
        vertical-align: middle;
        text-align:center;
    }

    table span {
        font-size: 2vmin
    }
    table b {
        font-size: 1.5vmin !important;
    }

    .firstcol, .lastcol{
        width: 10%;
    }

    .container::-webkit-scrollbar {
        display: none;
    }

    .container{
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>
<!-- [colspan="2"] -->
<body class="fontfamily">
    <?php include "components/header.php" ?>

	<div class="container" style="overflow-x: scroll">
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h2 style="color: #111177;">Programme</h2>
            <br/>

            <h3>Day 1 – 11th August, 2023</h3>
			<!-- Day 1 Table -->
			<table class="table table-bordered table-striped center-text">
                <tbody>
                    <tr class="info">
                        <th colspan="1" style="text-align:center;">
                            <span>Time</span>
                        </th>
                        <th colspan="7" style="text-align:center;">
                            <span>Content</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Venue</span>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:00</b></td>
                        <td colspan="7" style="text-align:center;">
                            <b>Registration at PolyU Hung Hom Bay Campus</b>
                        </td>
                        <td colspan="1" rowspan="7" class="lastcol"><b>UG06</b></td>                        
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:30 - 09:40</b></td>
                        <td colspan="7" style="text-align:center;line-height: 1.8">
                            <b>Opening Remarks</b><br/>
                            <b><u>Professor CHIU Warren Chi Kwan</u></b><br/>
                            <b>Associate Dean (Education) of College of Professional and Continuing Education, The Hong Kong Polytechnic University</b>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="1" class="firstcol"><b>09:40 - 9:45</b></td>
                        <td colspan="7" style="text-align:center;line-height: 1.8">
                            <b>Best Paper Awarding Ceremony</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:45 - 9:55</b></td>
                        <td colspan="7" style="text-align:center;line-height: 1.8">
                            <b>Group Photo Taking</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:55 - 10:20</b></td>
                        <td colspan="7" style="text-align:center;line-height: 1.8">
                            <b><u>Mr. Sunny Ho</u></b><br/>
                            <b>Defining Hong Kong's Role with regards to Cross-border Ecommerce Business</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>10:20 - 10:45</b></td>
                        <td colspan="7" style="text-align:center;line-height: 1.8">
                            <b><u>Mr. So Kai Man</u></b><br/>
                            <b>How can we  promote Hong Kong to become the Asian hub for green cross - border e-commerce  in coordination with the Greater Bay Area?</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>10:45 - 11:00</b></td>
                        <td colspan="7" >
                            <b>Coffee Break and Social Networking</b>
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>11:00 - 11:50</b></td>
                        <td colspan="7" >
                            <b>Feature  Sessions 1-5</b>
                        </td>
                        <td colspan="1" class="lastcol"></td>  
                    </tr>

                    <tr class="info">
                        <th colspan="1" style="text-align:center;">
                            <span>Feature Session</span>
                        </th>
                        <th colspan="3" style="text-align:center;">
                            <span>Speakers</span>
                        </th>
                        </th>
                        <th colspan="4" style="text-align:center;">
                            <span>Topic</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Venue</span>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>1</b></td>
                        <td colspan="3" >
                            <b><u>Prof. NG Adolf Koi Yu</u></b><br>
                            <b>Acting Dean and Professor</b>
                        </td>
                        <td colspan="4">
                            <b><u>CCAPPTIA</u></b><br>
                            <b>Research Project Highlights and Future Trends</b>
                        </td>
                        <td colspan="1" rowspan="5" class="lastcol"><b>UG06</b></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>2</b></td>
                        <td colspan="3" >
                            <b><u>Ir Dr YIP Tsz Leung</u></b><br>
                            <b>Associate Dean of Students and Associate Professor</b>
                        </td>
                        <td colspan="4" >
                            <b><u>CY Tung International Centre for  Maritime Studies</u></b><br>
                            <b>Maritime Education and Training</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>3</b></td>
                        <td colspan="3" >
                            <b><u>Dr. WONG Yin Cheung</u></b><br>
                            <b>Associate Head and Associate Professor</b>
                        </td>
                        <td colspan="4" >
                            <b><u>The Hang Seng University of Hong  Kong</u></b><br>
                            <b>Virtual Reality Centre: Innovative Teaching and Learning Pedagogies</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>4</b></td>
                        <td colspan="3" >
                            <b><u>Dr. WONG Shun Mun</u></b><br>
                            <b>Division Head and Principal Lecturer</b>
                        </td>
                        <td colspan="4" >
                            <b><u>PolyU SPEED, Research Centre for Green Business</u></b><br>
                            <b>Green Business and E-Commerce</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>5</b></td>
                        <td colspan="3" >
                            <b><u>Dr. WU Yang</u></b><br>
                            <b>Lecturer</b>
                        </td>
                        <td colspan="4" >
                            <b><u>PolyU SPEED, Research Centre for Green Energy, Transport and Building</u></b><br>
                            <b>The Application of Green Technology in E-commerce</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>12:00 - 13:15</b></td>
                        <td colspan="7">
                            <b>Conference Lunch</b>
                        </td> 
                        <td colspan="1" class="lastcol"><b>Crystal Harbour Restaurant</b></td> 
                    </tr>

                    <tr class="info">
                        <th colspan="1" style="text-align:center;">
                            <span>Session</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Paper Number</span>
                        </th>
                        </th>
                        <th colspan="2" style="text-align:center;">
                            <span>Author</span>
                        </th>
                        <th colspan="4" style="text-align:center;">
                            <span>Topic</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Venue</span>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 1</u><b><br>
                            <b>13:30-15:00</b>
                        </td>
                        <td colspan="1">
                            <b>022</b>
                        </td> 
                        <td colspan="2">
                            <b>Mawuli Afenyo*</b>
                        </td> 
                        <td colspan="4">
                            <b>Maritime Cybersecurity threats to e-commerce in the Greater Bay Area (GBA)</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 105</b></td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>007</b>
                        </td> 
                        <td colspan="2">
                            <b>Naima Saeed*</b><br>
                            <b>Muhammad Hasan Ashraf</b>
                        </td> 
                        <td colspan="4">
                            <b>A Framework For A Sustainable And Resilient Cruise Shipping</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>005</b>
                        </td> 
                        <td colspan="2">
                            <b>Qiong Chen</b><br>
                            <b>Yui-Yip Lau*</b><br>
                            <b>Adolf K.Y. Ng</b>
                        </td> 
                        <td colspan="4">
                            <b>Maritime Port Connectivity Analysis- Evidence From Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 2</u></b><br>
                            <b>13:30-15:00</b>
                        </td>
                        <td colspan="1">
                            <b>009</b>
                        </td> 
                        <td colspan="2">
                            <b>Yang Zhuang*</b><br>
                            <b>Yui-Yip Lau</b><br>
                            <b>Jieqi Guan</b>
                        </td> 
                        <td colspan="4">
                            <b>Does Pandemic Affect Consumers’ Perception Of E-Commerce In Hong Kong?</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 106</b></td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>010</b>
                        </td> 
                        <td colspan="2">
                            <b>Zhenkai Gao*</b><br>
                            <b>Fang Hong</b><br>
                            <b>Yen Nee Christy Ng</b>
                        </td> 
                        <td colspan="4">
                            <b>The Impact Of Covid-19 On The Market Value Of Listed Tourism Companies In China: Evidence From The E-Transactions In Stock Market</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>013</b>
                        </td> 
                        <td colspan="2">
                            <b>Daniel H.Y. Pun*</b><br>
                            <b>Jason Y.Z. Zhang</b><br>
                            <b>Keith C.K. Ng*</b><br>
                            <b>Yan Y.F. Yim*</b>
                        </td> 
                        <td colspan="4">
                            <b>A Greater Grey Area, Or A Greater Era?</b><br>
                            <b>An Investigation On Greater Bay Area,  E-Commerce, And Insurance Industry In Hong Kong</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="2" class="firstcol">
                            <b><u>Industrial Session 1</u></b><br>
                            <b>13:30-15:00</b>
                        </td>
                        <td colspan="1" rowspan="2">
                            <b>/</b>
                        </td> 
                        <td colspan="2">
                            <b>Dr. YANG Huijun</b>
                        </td> 
                        <td colspan="4">
                            <b>Smart Technology Supports the Development of Cross-border Consumption in the Catering Industry</b>
                        </td> 
                        <td colspan="1" rowspan="2" class="lastcol"><b>Classroom 107</b></td> 
                    </tr>

                    <tr>
                        <td colspan="2">
                            <b>Dr ZHANG Ruopiao</b>
                        </td> 
                        <td colspan="4">
                            <b>The Role of GBA Cooperation in the China Biodiversity Strategy 2030 through the Lens of Cross-border Consumption</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>15:00 - 15:15</b></td>
                        <td colspan="7">
                            <b>Coffee Break and Social Networking</b>
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 3</u><b><br>
                            <b>15:15-16:45</b>
                        </td>
                        <td colspan="1">
                            <b>008</b>
                        </td> 
                        <td colspan="2">
                            <b>Yim Kit Yu, Alvin*</b>
                        </td> 
                        <td colspan="4">
                            <b>The Obstacles Of Hong Kong Small Or Medium Size Enterprises (SMEs) On Inventory Management In A Retail Chain Store</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 105</b></td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>014</b>
                        </td> 
                        <td colspan="2">
                            <b>Simon S.M. Yuen*</b><br>
                            <b>Calvin W.O. Cheng</b><br>
                            <b>Joseph L.M. Lee</b>
                        </td> 
                        <td colspan="4">
                            <b>A Study Of The Determinants Of Sustainable E-Procurement During Covid-19 Era</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>002</b>
                        </td> 
                        <td colspan="2">
                            <b>Du Jie*</b><br>                            
                            <b>Shanshan Qi</b>
                        </td> 
                        <td colspan="4">
                            <b>Comparison Of Tourism Development Conditions In World Class Bay Areas</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 4</u><b><br>
                            <b>15:15-16:45</b>
                        </td>
                        <td colspan="1">
                            <b>003</b>
                        </td> 
                        <td colspan="2">
                            <b>Simon Wong*</b><br>  
                            <b>John Kun-Woon Yeung</b><br>  
                            <b>Yui-Yip Lau</b><br>  
                            <b>Tomoya Kawasaki</b>
                        </td> 
                        <td colspan="4">
                            <b>Exploring Sustainable Practices Through The Use Cases Of Cloud-Based Blockchain Integrated With Machine Learning For Supply Chains</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 106</b></td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>021</b>
                        </td> 
                        <td colspan="2">
                            <b>Andrew Y. Wu*</b><br>
                            <b>Jessica L.M. Wong </b><br>
                            <b>Ju-Ai Wu</b>
                        </td> 
                        <td colspan="4">
                            <b>What are the differences between brick-and-mortar business and e-commerce in terms of customer satisfaction and operating efficiency?</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>011</b>
                        </td> 
                        <td colspan="2">
                            <b>Tsz Yan Hui*</b><br>                            
                            <b>Yuk Ting Hester Chow</b><br>
                            <b>Simon S.M. Yuen</b>
                        </td> 
                        <td colspan="4">
                            <b>Facilitating Storage Operations And Trading With Autonomous Systems For Hong Kong’S Wine Industry</b>
                        </td> 
                    </tr>
                    
                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Industrial Session 2</u></b><br>
                            <b>15:15-16:45</b>
                        </td>
                        <td colspan="1" rowspan="3">
                            <b>/</b>
                        </td> 
                        <td colspan="2">
                            <b>Mr. Li Paul Ping Hung</b>
                        </td> 
                        <td colspan="4">
                            <b>Import Drugs into the Greater Bay Area: Cases on Cross-border E-commerce</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 107</b></td> 
                    </tr>

                    <tr>
                        <td colspan="2">
                            <b>Dr. TANG Yuk-ming</b>
                        </td> 
                        <td colspan="4">
                            <b>The Adoption of Blockchain for Cross-Border E-commerce in the Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="2">
                            <b>Mr. YU Shing Chung, John</b>
                        </td> 
                        <td colspan="4">
                            <b>Post COVID Market Dynamics in Cross-border E-commerce</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>16:45 - 17:00</b></td>
                        <td colspan="4">
                            <div>
                                <b>Coffee Break and Social Networking</b>
                            </div>                            
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 5</u><b><br>
                            <b>17:00-18:30</b>
                        </td>
                        <td colspan="1">
                            <b>026</b>
                        </td> 
                        <td colspan="2">
                            <b>Eugene Wong</b><br>  
                            <b>Ran Wei*</b><br>  
                            <b>Chi-Wing Tsang</b><br>  
                            <b>Danny Ho</b>
                        </td> 
                        <td colspan="4">
                            <b>Supercapacitor energy storage for electric bus in the urban public transport system of the Greater Bay Area – A Case Study of Green Source Technology Company</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 105</b></td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>028</b>
                        </td> 
                        <td colspan="2">
                            <b>Rong Hu</b><br>                            
                            <b>Yilan Ling*</b>
                        </td> 
                        <td colspan="4">
                            <b>Text Analysis of China Customs' Cross border E-commerce Supervision Policy from the Perspective of Attention</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>027</b>
                        </td> 
                        <td colspan="2">
                            <b>Eugene Wong</b><br>    
                            <b>Ran Wei*</b><br>                            
                            <b>Danny C. K. Ho</b><br>
                            <b>Chan Man Hin, Eve</b>
                        </td> 
                        <td colspan="4">
                            <b>An analysis of emission impact on the deployment of electric vehicles in Jingdong Logistics using the GREET model and LCA methodology</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 6</u><b><br>
                            <b>17:00-18:30</b>
                        </td>
                        <td colspan="1">
                            <b>001</b>
                        </td> 
                        <td colspan="2">
                            <b>Mark Ching-Pong Poo*</b><br>  
                            <b>Mirza Farhan Baig</b>
                        </td> 
                        <td colspan="4">
                            <b>Consumer Attitudes And Perceptions Of Their Rights In Online Transactions For Great Bay Area</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 106</b></td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>016</b>
                        </td> 
                        <td colspan="2">
                            <b>Zhimei Lei</b><br>                            
                            <b>Shaoxin Zhuo*</b>
                        </td> 
                        <td colspan="4">
                            <b>The impact of cross-border supply chain digital infrastructure on cross-border logistics efficiency</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1">
                            <b>024</b>
                        </td> 
                        <td colspan="2">
                            <b>Kong Xiaosheng*</b><br>    
                            <b>Guan Jieqi</b>
                        </td> 
                        <td colspan="4">
                            <b>A study of the development strategies and changes related to some Macau internet celebrity restaurants</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Industrial Session 3</u></b><br>
                            <b>17:00-18:30</b>
                        </td>
                        <td colspan="1" rowspan="3">
                            <b>/</b>
                        </td> 
                        <td colspan="2">
                            <b>Mr. Jones Ng</b>
                        </td> 
                        <td colspan="4">
                            <b>The Promotional Strategies of Cross Border E-Commerce in the Greater Bay Area</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 107</b></td> 
                    </tr>

                    <tr>
                        <td colspan="2">
                            <b>Ms. SIO Sandy Hou-in</b>
                        </td> 
                        <td colspan="4">
                            <b>Sustainability and Diversification in Cross-border E-commerce for the Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="2">
                            <b>Dr. Wong Weng Chou, Jose</b>
                        </td> 
                        <td colspan="4">
                            <b>Information Technology of E-commerce in hospitality and tourism industry: development and trends</b>
                        </td> 
                    </tr>
                </tbody>
            </table>

			<!-- Day 2 Table -->
            <h3>Day 2 – 12th August, 2023</h3>
            <table class="table table-bordered table-striped center-text">
                <tbody>
                    <tr class="info">
                        <th colspan="1" style="text-align:center;">
                            <span>Time</span>
                        </th>
                        <th colspan="7" style="text-align:center;">
                            <span>Content</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Venue</span>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:00</b></td>
                        <td colspan="7" style="text-align:center;">
                            <b>Registration at PolyU Hung Hom Bay Campus</b>
                        </td>
                        <td colspan="1" rowspan="5" class="lastcol"><b>UG06</b></td>                        
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:30 – 09:55</b></td>
                        <td colspan="7">
                            <b><u>Dr. Yang Jingjing</u></b><br>
                            <b>Cross-border consumption of tourism industry in GBA</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>09:55-10:20</b></td>
                        <td colspan="7">
                            <b><u>Mr Tse Hing Min, Andy</u></b><br>
                            <b>Contemporary Legal Issues in the Greater Bay Area E-Commerce</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>10:20 - 10:35</b></td>
                        <td colspan="7">
                            <b>Coffee Break and Social Networking</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>10:35 - 11:40</b></td>
                        <td colspan="7">
                            <b>Research Methodology Workshop 1-5</b>
                        </td>  
                    </tr>

                    <tr class="info">
                        <th colspan="1" style="text-align:center;">
                            <span>Research Methodology Workshop</span>
                        </th>
                        <th colspan="3" style="text-align:center;">
                            <span>Speakers</span>
                        </th>
                        </th>
                        <th colspan="4" style="text-align:center;">
                            <span>Topic</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Venue</span>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>1</b></td>
                        <td colspan="3" >
                            <b><u>Dr. WONG Yin Cheung</u></b><br>
                            <b>Associate Head and Associate Professor</b>
                        </td>
                        <td colspan="4" >
                            <b>Interdisciplinary Research</b>
                        </td>
                        <td colspan="1" rowspan="5" class="lastcol"><b>UG06</b></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>2</b></td>
                        <td colspan="3" >
                            <b><u>Prof. NG Adolf Koi Yu</u></b><br>
                            <b>Acting Dean and Professor</b>
                        </td>
                        <td colspan="4" >                            
                            <b>Systematic Review</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>3</b></td>
                        <td colspan="3" >
                            <b><u>Dr. CHAN Man Hin</u></b><br>
                            <b>Assistant Professor</b>
                        </td>
                        <td colspan="4" >                            
                            <b>Econometric Modelling: Techniques and Applications</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>4</b></td>
                        <td colspan="3" >
                            <b><u>Dr. LAU Yui Yip</u></b><br>
                            <b>Senior Lecturer</b>
                        </td>
                        <td colspan="4" >                            
                            <b>Qualitative Research</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>5</b></td>
                        <td colspan="3" >
                            <b><u>Dr. WU Yang</u></b><br>
                            <b>Lecturer</b>
                        </td>
                        <td colspan="4" >                            
                            <b>Multi-agent Behavior Model</b>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>11:50 - 13:15</b></td>
                        <td colspan="7">
                            <b>Conference Lunch</b>
                        </td> 
                        <td colspan="1" class="lastcol"><b>Choi Fook Royal Banquet (Metropolis)</b></td> 
                    </tr>

                    <tr class="info">
                        <th colspan="1" style="text-align:center;">
                            <span>Session</span>
                        </th>
                        </th>
                        <th colspan="3" style="text-align:center;">
                            <span>Author</span>
                        </th>
                        <th colspan="4" style="text-align:center;">
                            <span>Topic</span>
                        </th>
                        <th colspan="1" style="text-align:center;">
                            <span>Venue</span>
                        </th>
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 7</u><b><br>
                            <b>13:30-15:00</b>
                        </td>
                        <td colspan="3">
                            <b>Simon Wong*</b><br>
                            <b>John Kun-Woon Yeung</b><br>
                            <b>Yui-Yip Lau</b><br>
                            <b>Tomoya Kawasaki</b>
                        </td> 
                        <td colspan="4">
                            <b>Blockchain Technology Adoption in Supply Chains: Implications from a Critical Literature Review</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 105</b></td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Yang Guiyi*</b><br>
                            <b>Simon Yuen</b>
                        </td> 
                        <td colspan="4">
                            <b>Omni-Channel Customer Service In Fast Fashion Supply Chain</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Cheung Kwun Man*</b>
                        </td> 
                        <td colspan="4">
                            <b>Explore Relationship Between Category Management And Strategic Procurement: Conceptual Framework Development</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 8</u><b><br>
                            <b>13:30-15:00</b>
                        </td>
                        <td colspan="3">
                            <b>Tianni Wang*</b><br>
                            <b>Haochen Feng</b><br>
                            <b>Zongjie Ding</b><br>
                            <b>Haiyan Yu</b>
                        </td> 
                        <td colspan="4">
                            <b>Enhancing Resilience of China's Major Ports to Adapt to the Impacts of Typhoon on the Global Shipping Network through Digitalization</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 106</b></td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Cao Qi*</b><br>
                            <b>Yang Guiyi</b><br>
                            <b>Ng Ching Hei Christy*</b><br>
                            <b>Tse Yuen Ki Ester</b><br>
                            <b>Cheung Kwun Man</b>
                        </td> 
                        <td colspan="4">
                            <b>Quality Management in Seaports – A Case of Kaohsiung Port</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Xu Jingqian*</b><br>
                            <b>Guan Jieqi</b>
                        </td> 
                        <td colspan="4">
                            <b>Cross-border Green Consumption and Online Booking Behavior: evidence from the hotel industry in Macao</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="4" class="firstcol">
                            <b><u>Industrial Session 4</u></b><br>
                            <b>13:30-15:00</b>
                        </td>
                        <td colspan="3">
                            <b>Mr. YEUNG John Kunwoon</b>
                        </td> 
                        <td colspan="4">
                            <b>Twin Engine of Empowering Cross-Border E-commerce Platforms: The Applications of Cloud Computing and Artificial Intelligence (AI)</b>
                        </td> 
                        <td colspan="1" rowspan="4" class="lastcol"><b>Classroom 107</b></td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Ms. WONG Ling</b>
                        </td> 
                        <td colspan="4">
                            <b>The Effectiveness of Omni channel for Cross-border E-commerce in the Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Mr. HUNG Alex Man-ching (MH)</b>
                        </td> 
                        <td colspan="4">
                            <b>Cross-border E-commerce in the Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Ms. Ivy Shum</b>
                        </td> 
                        <td colspan="4">
                            <b>The Adoption of VR AR in E-Commerce of Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>15:00 – 15:15</b></td>
                        <td colspan="7">
                            <b>Coffee Break and Social Networking</b>
                        </td>                           
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="3" class="firstcol">
                            <b><u>Paper Session 9</u><b><br>
                            <b>15:15-16:45</b>
                        </td>
                        <td colspan="3">
                            <b>Yang Liu*</b><br>
                            <b>Ming Long Kong</b><br>
                            <b>Fang Hong</b>
                        </td> 
                        <td colspan="4">
                            <b>Community Consumption via Mobile Payment in Macao</b>
                        </td> 
                        <td colspan="1" rowspan="3" class="lastcol"><b>Classroom 105</b></td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Ying Liang*</b><br>
                            <b>Chui Ying Chung</b><br>
                            <b>Yang Zhuang</b>
                        </td> 
                        <td colspan="4">
                            <b>Development of Mobile Payment in Food Delivery Industry in Macao</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Eve Man Hin Chan</b><br>
                            <b>Boris Kc Wong*</b><br>
                            <b>Yui-Yip Lau</b>
                        </td> 
                        <td colspan="4">
                            <b>Customer Churn Prediction of the Telecom Industry in the Guangdong-Hong Kong-Macao Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" rowspan="4" class="firstcol">
                            <b><u>Industrial Session 5</u></b><br>
                            <b>15:15-16:45</b>
                        </td>
                        <td colspan="3">
                            <b>Mr. SHUM Wilson Kwok-fung</b>
                        </td> 
                        <td colspan="4">
                            <b>Exploring Opportunities with Cross-Border E-commerce, Online to Offline Business Models</b>
                        </td> 
                        <td colspan="1" rowspan="4" class="lastcol"><b>Classroom 107</b></td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Ms CHENG Michelle Shuk-yuen</b>
                        </td> 
                        <td colspan="4">
                            <b>Emerging Aviation Issues: Cross-border E-commerce Business for the Greater Bay Area</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Mr. NG Harman Wai-chung</b>
                        </td> 
                        <td colspan="4">
                            <b>The Regional Comprehensive Economic Partnership (RCEP) and China Import/Export Trade Facilitation</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="3">
                            <b>Mr. KWOK Man-ki Philip Kino</b>
                        </td> 
                        <td colspan="4">
                            <b>Cross-border E-Commerce Payment Security and Fraud Prevention</b>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>16:45 – 17:00</b></td>
                        <td colspan="7">
                            <b>Coffee Break and Social Networking</b>
                        </td>        
                        <td colspan="1" class="lastcol"><b>UG06</b></td>            
                    </tr>

                    <tr>
                        <td colspan="1" class="firstcol"><b>17:00 - 17:15</b></td>
                        <td colspan="7">
                            <b>Closing Remarks</b>
                        </td>    
                        <td colspan="1" class="lastcol"><b>UG06</b></td>                              
                    </tr>

                    <!-- <tr>
                        <td colspan="1" width="20%"><b>10:45 -11:45</b></td>
                        <td colspan="4" style="display: flex;justify-content: space-around;flex-wrap: nowrap;">
                            <div style="width: 20%;display: block;text-align:center;padding: 15px 8px;min-width: 150px;">
                                <b>Research Methodology Workshop 1:</b>
                                <div style="padding-top: 5px">Interdisciplinary Research</div>
                            </div>
                            <div style="width: 20%;display: block;text-align:center;padding: 15px 8px;min-width: 150px;">
                                <b>Research Methodology Workshop 2:</b>
                                <div style="padding-top: 5px">Systematic Reviews</div>
                            </div>
                            <div style="width: 20%;display: block;text-align:center;padding: 15px 8px;min-width: 150px;">                                
                                <b>Research Methodology Workshop 3:</b>
                                <div style="padding-top: 5px">Econometric Modelling: Techniques and Applications</div>
                            </div>
                            <div style="width: 20%;display: block;text-align:center;padding: 15px 8px;min-width: 150px;">  
                                <b>Research Methodology Workshop 4:</b>
                                <div style="padding-top: 5px">Qualitative Research</div>
                            </div>
                            <div style="width: 20%;display: block;text-align:center;padding: 15px 8px;min-width: 150px;">  
                                <b>Research Methodology Workshop 5:</b>
                                <div style="padding-top: 5px">Multi-agent Behavior Model</div>  
                            </div>
                        </td> 
                    </tr>
                     -->
                    <!-- <tr>
                        <td colspan="1" width="20%"><b>11:45 - 13:15</b></td>
                        <td colspan="4">
                            <b>Conference Lunch</b>
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="1" width="20%"><b>13:15 - 14:45</b></td>
                        <td colspan="4" style="display: flex;justify-content: space-around;flex-wrap: wrap;">
                            <div style="display: block;text-align:center;padding: 15px 8px;min-width: 180px;">
                                <b>Paper Presentation Session 7</b>
                            </div>
                            <div style="display: block;text-align:center;padding: 15px 8px;min-width: 180px;">
                                <b>Paper Presentation Session 8</b>
                            </div>
                            <div style="display: block;text-align:center;padding: 15px 8px;min-width: 180px;">
                                <b>Industrial Session 4</b>
                            </div>
                        </td>  
                        
                    </tr>

                    <tr>
                        <td colspan="1" width="20%"><b>14:45 - 15:00</b></td>
                        <td colspan="4">
                            <b>Coffee Break and Social Networking</b>
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="1" width="20%"><b>15:00 - 16:30</b></td>
                        <td colspan="4" style="display: flex;justify-content: space-around;flex-wrap: wrap;">
                            <div style="display: block;text-align:center;padding: 15px 8px;min-width: 180px;">
                                <b>Paper Presentation Session 9</b>
                            </div>
                            <div style="display: block;text-align:center;padding: 15px 8px;min-width: 180px;">
                                <b>Paper Presentation Session 10</b>
                            </div>
                            <div style="display: block;text-align:center;padding: 15px 8px;min-width: 180px;">
                                <b>Industrial Session 5</b>
                            </div>
                        </td> 
                    </tr>

                    <tr>
                        <td colspan="1" width="20%"><b>16:30 - 16:45</b></td>
                        <td colspan="4">
                            <b>Coffee Break and Social Networking</b>
                        </td>  
                    </tr>

                    <tr>
                        <td colspan="1" width="20%"><b>16:45 - 17:15</b></td>
                        <td colspan="4">
                            <b>Closing Remarks and announcing the three best paper awards</b>
                        </td>  
                    </tr> -->
                </tbody>
            </table>
            <br />

		</div> <!-- /container -->
	</div>
    <?php include "components/footer.php" ?>

	<!-- Bootstrap core JavaScript
  ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
    <?php include "components/fixedButton_n_scripts.php" ?>
</body>

</html>




