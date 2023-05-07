<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="services.php"><i class="fa fa-files-o"></i>Services</a></li>
<li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Find Instructor</a></li>
<li><a href="room-details.php"><i class="fa fa-file-o"></i>Find Roommate</a></li>
<li><a href="about.php"><i class="fa fa-user"></i> About</a></li>
<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<?php } ?>

			</ul>
		</nav>