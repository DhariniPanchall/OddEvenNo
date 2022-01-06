<html>
	<body>
			<p>Odd Even number</p>
			<form method="post">
				Enter number to check:<input type="number" name="number"><br/>
				<input type="submit" name = "submit" value="submit"> 
			</form>
		<?php
			$number = $_POST['number'];
			if ($number % 2 == 0)
			{
				echo "$number is an Even no";
			}
			else
			{
				echo "$number is an Odd no";
			}
		?>
	</body>
</html>