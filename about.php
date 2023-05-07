<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Services</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

		
													
												
						<main>
		<section class="banner">
			<h1>About Us</h1>
		</section>
		<section class="overview">
			<h2>Our University</h2>
			<p>
Our university is a prestigious institution of higher learning that is dedicated to providing a well-rounded education to its students. Located in the heart of the city, our university boasts state-of-the-art facilities, top-notch faculty, and a diverse student body. With a wide range of programs and courses available, students are able to tailor their education to their interests and career goals. Our university is also committed to promoting a culture of innovation and entrepreneurship, offering students opportunities to engage in research and develop their own projects. Overall, our university is an excellent choice for students looking for a challenging and rewarding academic experience.</p>
		</section>
		<section class="services">
			<h2>Services Offered</h2>
			<ul>
				<li><i class="fas fa-book"></i> Extensive library resources</li>
				<li><i class="fas fa-chalkboard-teacher"></i> Cleaners</li>
				<li><i class="fas fa-laptop"></i> State-of-the-art computer labs</li>
				<li><i class="fas fa-running"></i> Sports and recreational facilities</li>
				<li><i class="fas fa-utensils"></i> Hostels</li>
			</ul>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 University Name. All Rights Reserved.</p>
	</footer>





					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>



<style> .foot{text-align: center; border: 1px solid black;}</style>
</html>
