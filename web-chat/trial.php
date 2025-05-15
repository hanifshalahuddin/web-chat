<?php

	function phpShowConts() {

	}

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
		/*display: flex;*/
		display: none;
		gap: 10px;
		justify-content: flex-end;
	}

	.contain {
		height: 180px;
		width: 300px;
		background-color: navy;
		gap: 5px;
		/*display: flex;*/
		display: none;
		flex-direction: column;
	}

	.cont {
		height: 50px;
		width: 90px;
		background-color: blue;
		display: flex;
		gap: 5px;
	}

	.con {
		height: 20px;
		width: 40px;
		background-color: skyblue;
		/*display: flex;*/
	}

	.luar {
		background-color: navy;
		height: 500px;
		width: 500px;
		display: flex;
		flex-direction: column;
		/*flex-grow: 1;*/
	}

	.dalam1 {
		background-color: blue;
		min-height: 300px;
		height: 400px;
		width: 400px;
		/*display: flex;*/
		/*flex-grow: 1;*/
		/*margin-top: 10px;*/
		/*margin-bottom: 10px;*/
	}

	.dalam2 {
		background-color: skyblue;
		height: 100px;
		width: 400px;
		/*display: flex;*/
		/*flex-grow: 1;*/
		/*margin-top: 10px;*/
		/*margin-bottom: 10px;*/
	}


</style>

<body>

	<div class="luar">
		<div class="dalam1"></div>
		<div class="dalam2"></div>
	</div>

	<div class="container">

		<div style="height: 50px; width: 50px; background-color: red;" onclick=showConts()></div>
		
		<div class="contain">
			<div class="cont">
				<div class="con"></div>
				<!-- <div class="con"></div> -->
				<div class="con"></div>
			</div>
			<div class="cont"></div>
			<div class="cont"></div>
		</div>

	<script type="text/javascript">
		function showConts() {
			document.querySelector('.contain').style.display = 'flex'
		}
	</script>

</body>
</html>