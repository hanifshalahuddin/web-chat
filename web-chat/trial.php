<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	
	.container {
		height: 600px;
		width: 1000px;
		border: 5px solid black;
		display: flex;
		/*justify-content: space-evenly;*/
		/*justify-content: flex-end;*/
		/*align-items: space-evenly;*/
		/*flex-direction: column;*/
		gap: 10px;
		justify-content: flex-end;
	}

	.contain {
		height: 180px;
		width: 300px;
		background-color: navy;
		gap: 5px;
		display: flex;
		flex-direction: column;
	}

	.cont {
		height: 50px;
		width: 90px;
		background-color: blue;
		/*flex-direction: row;*/
		/*justify-content: space-evenly;*/
	}

</style>

<body>

	<div class="container">
		
		<div class="contain">
			<div class="cont"></div>
			<div class="cont"></div>
			<div class="cont"></div>
		</div>

		<!-- <div class="contain"></div> -->
		<!-- <div class="contain"></div> -->

	</div>
		
		<div class="contain">
			<div class="cont"></div>
			<div class="cont"></div>
			<div class="cont"></div>
		</div>

</body>
</html>