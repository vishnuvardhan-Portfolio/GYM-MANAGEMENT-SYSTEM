<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gym | View Member</title>
   <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style>
 	#button1
	{
	width:126px;
	}

	.page-container .sidebar-menu #main-menu li#hassubopen > a {
	background-color: #2b303a;
	color: #ffffff;
	}

	#button2{
		width:126px;
		background-color:rgb(243, 44, 17);
		border : unset;
		border-radius : unset;
	}
	#button2:hover{
		width:126px;
		background-color:rgba(241, 68, 45, 0.83)!important;
		border : unset;
		border-radius : unset;
	}

	</style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>								
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Member Detail</h3>

		<hr />

		<!-- Exprie table -->
		<h4 style="color:rgb(243, 223, 38)">Exprie Member</h4>
		<table class="table table-bordered datatable" id="table-1" border=1>
			<thead>
				<tr><h2>
					<th>Sl.No</th>
					<th>Membership Expiry</th>
					<th>Member ID</th>
					<th>Name</th>
					<th>Contact</th>
					<th>E-Mail</th>
					<th>Gender</th>
					<th>Joining Date</th>
					<th>Action</th></h2>
				</tr>
			</thead>
				<tbody>

						<?php
							$query  = "select * from users ORDER BY joining_date";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$uid = $row['userid'];
									$query1 = "SELECT * FROM enrolls_to WHERE renewal='yes'and uid='$uid' ";
									$result1 = mysqli_query($con, $query1);
									if (mysqli_affected_rows($con) == 1) {
										while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
											$currentDate = date("Y-m-d");
								
											$expireDate = $row1['expire'];

											
											$threeDaysBeforeExpireDate = date("Y-m-d", strtotime($expireDate . " -3 days"));
											
											
											if ($threeDaysBeforeExpireDate <= $expireDate) {
												$style = "color: red;"; 
											} else {
												$style = "";
											}
											
											$expdate=date("d-m-Y",strtotime($expireDate));
											echo "<tr><td>".$sno."</td>";
											echo "<td style='$style'>" . $expdate . "</td>";
											echo "<td>" . $row['userid'] . "</td>";
											echo "<td>" . $row['username'] . "</td>";
											echo "<td>" . $row['mobile'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['gender'] . "</td>";
											echo "<td>" . $row['joining_date'] ."</td>";
											$sno++;
											echo "<td>
											<div>
											<form action='viewall_detail.php' method='post'>
											<input type='hidden' name='name' value='" . $uid . "'/>
											<input type='submit' class='a1-btn a1-blue' id='button1' value='View All ' class='btn btn-info'/>
											</form>
											</div>
											<div>
											<form action='send-mail.php' method='post'>
											<input type='hidden' name='name' value='" . $uid . "'/>
											<input type='hidden' name='mail' value='" . $row['email'] . "'/>
											<input type='submit' id='button2' value='Reminder ' class='btn btn-info'/>
											</form>
											</div>
											</td>
											</tr>";
											$msgid = 0;
										}
									}
								}
								
							        
							    }
							
						?>									
					</tbody>
				</table>

		<!-- Current table -->
		<h4 style="color:rgb(243, 223, 38)">Current Member</h4>
		<table class="table table-bordered datatable" id="table-1" border=1>
			<thead>
				<tr><h2>
					<th>Sl.No</th>
					<th>Membership Expiry</th>
					<th>Member ID</th>
					<th>Name</th>
					<th>Contact</th>
					<th>E-Mail</th>
					<th>Gender</th>
					<th>Joining Date</th>
					<th>Action</th></h2>
				</tr>
			</thead>
				<tbody>

						<?php
							$query  = "select * from users ORDER BY joining_date";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$uid = $row['userid'];
									$query1 = "SELECT * FROM enrolls_to WHERE uid='$uid' and renewal='no'";
									$result1 = mysqli_query($con, $query1);
									if (mysqli_affected_rows($con) == 1) {
										while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
											$currentDate = date("Y-m-d");
								
											$expireDate = $row1['expire'];

											
											$threeDaysBeforeExpireDate = date("Y-m-d", strtotime($expireDate . " -3 days"));
											
											$expdate=date("d-m-Y",strtotime($expireDate));
											
								
											echo "<tr><td>".$sno."</td>";
											echo "<td>" . $expdate . "</td>";
											echo "<td>" . $row['userid'] . "</td>";
											echo "<td>" . $row['username'] . "</td>";
											echo "<td>" . $row['mobile'] . "</td>";
											echo "<td>" . $row['email'] . "</td>";
											echo "<td>" . $row['gender'] . "</td>";
											echo "<td>" . $row['joining_date'] ."</td>";
											$sno++;
											echo "<td><form action='viewall_detail.php' method='post'><input type='hidden' name='name' value='" . $uid . "'/><input type='submit' class='a1-btn a1-blue' id='button1' value='View All ' class='btn btn-info'/></form></td></tr>";
											$msgid = 0;
										}
									}
								}
								
							        
							    }
							
						?>									
					</tbody>
				</table>

<script>
	
	function ConfirmDelete(name){
	
    var r = confirm("Are you sure! You want to Delete this User?");
    if (r == true) {
       return true;
    } else {
        return false;
    }
}

</script>
		
			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


