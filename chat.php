<?PHP
		include 'db.php';
		
		
			$query = "select * from chat ORDER BY id DESC";
			$run = $con->query($query);
			
			while($row = $run->fetch_array()) :
				
		?>
			<div id="chat_data">
				<span style="color: green;"><?PHP echo $row['name'].":"; ?></span>
				<span style="color: brown;"><?PHP echo $row['msg']; ?></span>
				<span style="float: right;"><?PHP echo $row['date']; ?></span>
			</div>
			<?PHP endwhile; ?>