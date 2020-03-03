<!DOCTYPE html>
<html lang="en-US">
	<head>
    <meta charset="utf-8">
    <title>Hebrap</title>
    <meta property="og:type" content="website" >
    <meta property="description" content="Hebrew Words Generator"/>
    <meta property="og:url" content="http://hebrap.com"/>
    <meta property="og:image" content="https://imgur.com/4CLI3Ts"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="microphone.png">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="words.js"></script>
	
    </head>
	
<body>
	<div class="main">	
		<div class="refresh-container" onclick="">
			<a   class="span1">New Word Every (secs):</a>
			<button style="background:#DF3100;" class="refresh" id="timer1" onclick="inter(1)">1</button>
			<button style="background:#DF3100;" class="refresh" id="timer1" onclick="inter(2)">2</button>
			<button style="background:#DF3100;" class="refresh" id="timer1" onclick="inter(3)">3</button>
			<button style="background:#FB9C01;" class="refresh" id="timer2" onclick="inter(4)">4</button>
			<button style="background:#FB9C01;" class="refresh" id="timer2" onclick="inter(5)">5</button>
			<button style="background:#FB9C01;" class="refresh" id="timer2" onclick="inter(6)">6</button>
			<button style="background:#FFED00;" class="refresh" id="timer3" onclick="inter(7)">7</button>
			<button style="background:#FFED00;" class="refresh" id="timer3" onclick="inter(8)">8</button>
			<button style="background:#FFED00;" class="refresh" id="timer3" onclick="inter(9)">9</button>
			<button style="background:#00D51B;" class="refresh" id="timer4" onclick="inter(10)">10</button>
			<button style="background:#00D51B;" class="refresh" id="timer4" onclick="inter(11)">11</button>
			<button style="background:#00D51B;" class="refresh" id="timer4" onclick="inter(12)">12</button>
			<button style="background:#34EBFF;" class="refresh" id="timer5" onclick="inter(13)">13</button>
			<button style="background:#34EBFF;" class="refresh" id="timer5" onclick="inter(14)">14</button>
			<button style="background:#34EBFF;" class="refresh" id="timer5" onclick="inter(15)">15</button>
		</div>
		
		<div class="generator" id="generator"></div>
		
		<div class="subjects">
			<button style="background:#bb86fc;" class="subject" id="space" onclick="newSubject(space),inter(2)">חלל</button>
			<button style="background:#bb86fc;" class="subject" id="adjectives" onclick="newSubject(adjectives),inter(2)">שמות תואר</button>
			<button style="background:#bb86fc;" class="subject" id="sports" onclick="newSubject(sport),inter(2)">ספורט</button>
			<button style="background:#bb86fc;" class="subject" id="sports" onclick="newSubject(food),inter(2)">אוכל</button>
			<button style="background:#bb86fc;" class="subject" id="sports" onclick="newSubject(nature),inter(2)">טבע</button>
			<button style="background:#bb86fc;" class="subject" id="nature" onclick="newSubject(animals),inter(2)">חיות</button>
			<button style="background:#bb86fc;" class="subject" id="food" onclick="newSubject(music),inter(2)">מוזיקה</button>
			
	</div>
</body>
</html>
