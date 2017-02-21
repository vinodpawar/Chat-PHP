<?PHP

include 'db.php';

?>

<html>

	<head>
		<title>Chat System using PHP and AJAX</title>
		
		<script>
		
			function ajax() {
				
				var req = new XMLHttpRequest();
				req.onreadystatechange = function(){
					
					if(req.readyState == 4 && req.status == 200) {
						
						document.getElementById('chat').innerHTML = req.responseText;
						
					}
				}
				
				req.open('GET','chat.php','true');
				req.send();
			}
			
			setInterval(function(){ajax();},1000);
			
		</script>
		
	</head>

	<link rel="stylesheet" href="styles/theme.css" type="text/css">
		
<body onload="ajax();">

	<div id="container">
	
		<div id="chat_box">
			<div id="chat">
			
			</div>
			
		</div>	
		
		<form method="POST" action="index.php">
			<input type="text" name="name" placeholder="Enter name" />
			<textarea name="msg" placeholder="Enter message"></textarea>
			<input type="submit" name="submit" value="Send" />
			
		</form>
		
		<?PHP
		
		if(isset($_POST['submit'])) {
	
		$name = $_POST['name'];
		$msg = $_POST['msg'];	
	
		$insertQuery = "insert into chat(name,msg) values('$name','$msg')";
		
		$run = $con->query($insertQuery);
		
		if($run) {
			
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'>";
		}
		
		}

		?>
	</div>

</body>

</html>