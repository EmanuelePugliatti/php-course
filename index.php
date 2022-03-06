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
			
			echo "<h2>Items you can afford</h2>";
			
			foreach($products as $key => $value){
				if($value <= $credit) {
					echo "<p>".$key."</p>";
				}
			}
			
			
				$amount = 800;
				$taxRate = 0.0825;
				$addedTax = $amount * $taxRate; //amount =800,tax =0.825
				echo "<h1> the fee is</h1>";
				echo $addedTax;
				
				function tax_calc($amount,$tax){
					$calculate_tax = $amount*$tax;
					$amount = round($amount + $calculate_tax,2);
					return $amount;
				}
				echo "<h1> the calculate a fee is </h1>";
				echo tax_calc(750,0.223);
		?>
	</body>
</html>
	