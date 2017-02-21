<?PHP

include 'db.php';

?>

<html>

	<head>
		<title>Chat System using PHP and AJAX</title>
	</head>

	<link rel="stylesheet" href="styles/theme.css" type="text/css">
		
<body>

	<div id="container">
	
		<div id="chat_box">
		<?PHP
		
			$query = "select * from chat ORDER BY id DESC";
			$run = $con->query($query);
			
			while($row = $run->fetch_array()) :
				
		?>
			<div id="chat_data">
				<span style="color: green;">Vinod: </span>
				<span style="color: brown;">Hey there!</span>
				<span style="float: right;">11:47 AM</span>
			</div>
			<?PHP endwhile; ?>
			
		</div>	
		
		<form method="POST" action="index.php">
			<input type="text" name="name" placeholder="Enter name" />
			<textarea name="enter message" name="enter message" placeholder="Enter message"></textarea>
			<input type="submit" name="submit" value="Send" />
			
		</form>
	</div>

</body>

</html>