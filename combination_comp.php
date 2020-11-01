<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>forと配列を組み合わせよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>forと配列を組み合わせよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php
		$numbers = [10, 20, 30, 40];

		for ( $i = 0; $i <= 3; $i++ ) {
			echo $numbers[$i]. "<br>";
		}
		
		foreach ($numbers as $key => $value) {
			echo "添字". $key. "番は";
			echo $value. "です。<br>";
		}
		?>
	</div>
</body>
</html>
