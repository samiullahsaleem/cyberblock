<!DOCTYPE html>
<html>
<head>
	<title>Image Change</title>
	<script>
		function changeimgcar() {
			//document.getElementById("changebike").style.display='none';
			document.getElementById("changecar").src="rollsroyce.jpg";
		}
		function changeimgbike() {
			//document.getElementById("changecar").style.display='none';
			document.getElementById("changecar").src="revolt.jpg";
		}
		
	</script>
</head>

<body>

	<h1 align="center" style="color: royalblue;">Choose The Vehicle</h1>
	<br>
	<div style="float: left; margin-left: 480px;">
		<img id="changecar" src="img.jpg" style="height: 200px; width: 400px;">
		<br>
	</div>
	<!--<div style="float: left; margin-left: 20px;">
		<img id="changebike" src="yamaha.jpg" style="height: 200px; width: 400px;">
		<br>
	</div>-->
	<div style="margin-top: 250px; margin-left: 575px;">
		<button type="button" onclick="changeimgcar()" style="color: white; background-color: royalblue; padding: 10px; border-radius: 10px;">Rolls Royce Car</button>
		<button type="button" onclick="changeimgbike()" style="color: white; background-color: royalblue; padding: 10px; border-radius: 10px">Revolt Bike</button>
	</div>
</body>
</html>
