<html>
	<body>
		<p>Odd Even number</p>
		<form method="post">
			Enter range:<input type="number" name="number"><br/>
			<input type="submit" name = "submit" value="submit"> 
		</form>
		<?php
			$number = $_POST['number'];
			for ($i = 0; $i <= $number; $i++)
			{
				if ($i % 2 == 0)
				{
					echo "Even no: $i";
					echo "<br>";
				}
				else
				{
					echo "Odd no: $i";
					echo "<br>";
				}
			}
		?>
	</body>
</html>