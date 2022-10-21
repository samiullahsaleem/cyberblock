<!DOCTYPE html>
<html>
	<head>
		<title>JavaScript Practice</title>
		<style>
/* general styling */
:root {
  --smaller: .75;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
  margin: 0;
}

body {
  align-items: center;
  background-color: skyblue;
  display: flex;
  font-family: -apple-system, 
    BlinkMacSystemFont, 
    "Segoe UI", 
    Roboto, 
    Oxygen-Sans, 
    Ubuntu, 
    Cantarell, 
    "Helvetica Neue", 
    sans-serif;
}

.container {
  color: white;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-weight: normal;
  letter-spacing: .125rem;
  text-transform: uppercase;
}

li {
  display: inline-block;
  font-size: 1.5em;
  list-style-type: none;
  padding: 1em;
  text-transform: uppercase;
}

li span {
  display: block;
  font-size: 4.5rem;
}

.emoji {
  display: none;
  padding: 1rem;
}

.emoji span {
  font-size: 4rem;
  padding: 0 .5rem;
}

@media all and (max-width: 768px) {
  h1 {
    font-size: calc(1.5rem * var(--smaller));
  }
  
  li {
    font-size: calc(1.125rem * var(--smaller));
  }
  
  li span {
    font-size: calc(3.375rem * var(--smaller));
  }
}
		
		</style>
		<script>
			
			function changeit()
			{
				const todayDate = new Date().getHours();	
				if (todayDate < 12 ){
					alert ("Good Morning");
				}
				else if (todayDate < 18) {
					document.getElementById("countdown").style.display = 'none';
				alert("Sunny Day");
				}
				else {
					alert("Good Night");
				}
			}	
			
		
		</script>
		
	</head>
	<body>
		
	
	<div class="container">
  <h1 id="headline">Countdown to my birthday</h1>
  <div id="countdown">
    <ul>
      <li><span id="days"></span>days</li>
      <li><span id="hours"></span>Hours</li>
      <li><span id="minutes"></span>Minutes</li>
      <li><span id="seconds"></span>Seconds</li>
    </ul>
  </div>
  <button type="button" onclick="changeit()" > ChangeText </button>
  
</div>
	
	</body>
</html> 
