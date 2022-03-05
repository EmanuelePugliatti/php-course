<!DOCTYPE html>
<html>
	<head>
		<title>PHP Store</title>
	</head>
	<body>
		<?php
		$name = "PHP Store";
		$credit = 1000;
		//Using two forward slashes we create comments in php.
		// Within the php tag, we can insert values into our HTML.
		echo "<h1> Welcome to ".$name."!</h1>";
		echo"<h2> you have $".$credit."in your wallet.</h2>";
		
			$products['Computer']= 750;
			$products['car'] = 15000;
			$products['Iphone'] = 1000;
			$products['Toaster']= 75;
			
			foreach($products as $key => $value){
				echo "<p>the ".$key." costs ".$value."</p>";
			}
			
		?>
	</body>
</html>
	