


<!-- <!DOCTYPE html>
<html>
<head>

    <title>Gym | Edit Member</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	
	<style>
 	#button1
	{
	width:126px;
	}
	#boxxe
	{
		width:230px;
	}

	.page-container .sidebar-menu #main-menu li#hassubopen > a {
	background-color: #2b303a;
	color: #ffffff;
	}

	</style>

</head>
        <body>
            <div>
            <head><script>alert('Reminder done');</script></head></html>
            <meta http-equiv='refresh' content='0; url=table_view.php'>
            </div>
			<?php include('footer.php'); ?>
</body>
</html>	 -->




 <?php
require '../../include/db_conn.php';
page_protect();

// Define a list of random messages
$messages = [
    "Reminder: Don't forget to log your workout today!",
    "Your next session is waiting for you. Stay motivated!",
    "Time to crush your fitness goals today!",
    "Push yourself beyond your limits. Keep going!",
    "Your body is stronger than you think. Stay committed!",
];

// Select a random message from the array
$randomMessage = $messages[rand(0, count($messages) - 1)];

// Optional: Send the message to the user (you can replace this with email or any other notification mechanism)
echo "<script>alert('$randomMessage');</script>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym | Edit Member</title>
    <link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" rel="stylesheet" type="text/css">
    <style>
        #button1 {
            width: 126px;
        }
        #boxxe {
            width: 230px;
        }

        .page-container .sidebar-menu #main-menu li#hassubopen > a {
            background-color: #2b303a;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div>
        <head><script>alert('Reminder done');</script></head>
        <meta http-equiv='refresh' content='0; url=table_view.php'>
    </div>

    <?php include('footer.php'); ?>  
</body>
</html>
