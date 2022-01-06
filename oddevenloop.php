<html>
	<body>
			<p>Odd Even number</p>
			<?php
				for ($i = 0; $i <= 100; $i++)
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