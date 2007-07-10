<html>
<head>
	<title><?=$_ENV["COMPUTER_NAME"]?> - Screen</title>
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" charset="utf-8">
	    <meta name="viewport" id="viewport" content="width=1440; maximum-scale=1.0; minimum-scale=0.2;" />
	<script src="/js/remote.js" type="text/javascript" charset="utf-8"></script>

	<meta http-equiv="expires" content="-1"> 
	<meta http-equiv="Pragma" content="no-cache"> 
	<meta http-equiv="Cache-Control" content="no-cache">

	<script type="text/javascript">
	var ctx;
	var img;
	var ctime;
	function $(o) {return document.getElementById(o);}

	function load() {
		ctx = $('cv').getContext("2d");
		img = new Image();
		img.onload = screenLoaded;
		loadImage();
	}
	
	function screenLoaded(e) {
		
		$('cv').width = img.width;
		$('cv').height = img.height;
		$('cv').style.width = img.width;
		$('cv').style.height = img.height;
		$('textbar').style.width = img.width;
		ctx.drawImage(img, 0, 0, img.width, img.height);
		
		//	var c = document.cookie.split("=")[1].split("+");
		//ctx.drawImage(img, parseInt(c[0]), parseInt(c[1]), img.width, img.height);
		
		ctime = setTimeout("loadImage()", 5000);
	}

	function loadImage() {
		img.src = '/t/grabscreen?' + Math.random();
	}
var img2;
	function sendClick(e) {
		img2 = new Image();
		img2.onload = loadImage;
		img2.src = "/t/click?x=" + e.x + "&y=" + e.y;
		
    $('cursor').style.top = e.y - 3;
    $('cursor').style.left = e.x - 3;
  
		clickComplete();
	}
	
	function clickComplete() {
		clearTimeout(ctime);
		ctime = setTimeout("loadImage()", 500);
	}
	
	function sendString(str) {
		sendData({'string':str});
	}

	// window.onkeydown = handleKeyEvent;
	// window.onkeyup = handleKeyEvent;
	// window.onmousedown = handleMouseEvent;
	// window.onmouseup = handleMouseEvent;
	//window.onmousemove = handleMouseEvent;
	</script>
</head>
<body onload="load();" bgcolor="black" style="padding:0; margin:0;">

<div id="cursor" style="z-index:100; border:1px solid white; background-color:black; width:6px; height:6px; position:absolute; top:-1; left:-1;"></div>
<a onclick="sendClick(event); return false;" href="#"><canvas id="cv" style="width:1024; height:768"></canvas></a>
  	<div id="textbar" style="background-color:gray; padding: 0; margin:0">
	<form style="padding:30px;" action="#" onsubmit="sendString($('textinput').value
	); $('textinput').value = ''; $('textinput').focus(); return false;">
		<input id="textinput" type="text" style="font-size:48px;"></input><input type="submit" style="font-size:48px;"value="Send Text">
		</form>
</div>
</body>
</html>