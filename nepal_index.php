<html>
<head>
	<title>Communication Status in Nepal</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#expanderHead").click(function(){
				$("#expanderContent").slideToggle();
				if ($("#expanderSign").text() == "+"){
					$("#expanderSign").html("-")
				}
				else {
					$("#expanderSign").text("+")
				}
			});
		});
	</script>
    <style type="text/css">
        .container, .navbar {
            width: 960px !important;
            background-color: #E5E4E2;
        }
        body {
            background-color: black;
        }
        hr { 
            border-top: 2px solid #ccc;
        }
    </style>
</head>  
    <script type="text/javascript" src="js/chart_telecom_nepal.js"></script>
    <script type="text/javascript" src="js/chart_internet_nepal.js"></script>
    <script type="text/javascript" src="js/chart_internet_pie_nepal.js"></script>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
<body>
    <center>
        <img src="img/header_final.png" />
    </center>
	<div class="container">
        <div class="navbar">
          <div class="navbar-inner">
              <ul class="nav">
                <li><a href="index.php">South Asia</a></li>
                <li class="active"><a href="nepal_index.php">Nepal</a></li>
              </ul>
          </div>
        </div>
        <div class="actions">
		<div class="row-fluid">
            <h2 align="center">Nepal</h2>
            <div class="span10 offset1 well">
                <div id="chart_telecom_nepal"></div>
                <br />
                <hr>
                <div id="chart_internet_nepal"></div>
                <br />
                <hr> 
                <div id="chart_internet_pie_nepal"></div>
                <br />
                <hr>
				<h4 id="expanderHead" style="cursor:pointer;">
					Analysis
					<span id="expanderSign">+</span>
				</h4>
				<div id="expanderContent" style="display:none">
					<p style="color: black; font-weight: bold; color: #777777;">
						Telephone services in Nepal are on continuous rise whereas the Internet services are very few. In the past two years their has been a good increase in Internet users but is it still enough? Surely, not! Finally, the ISP's have to step up their approach as likes of Nepal Telecom and Ncell Telecom are doing very good.  
					</p>
				</div>
				<hr>
            </div>
        </div>
	</div>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <div id="footer">
      <div class="container">
        <p class="muted credit" align="center">Courtesy Team Young, Open Nepal Hackathon 2013</p>
      </div>
    </div>
</body>
</html>