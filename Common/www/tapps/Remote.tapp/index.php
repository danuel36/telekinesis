<html>
<head>
	<title><?=$_ENV["COMPUTER_NAME"]?> - Remote</title>
	<meta name="viewport" content="width=320" />
        <meta name="viewport" id="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" charset="utf-8" />
	<script src="/js/remote.js" type="text/javascript" charset="utf-8" />
<script src="/js/hidelocation.js" type="text/javascript" charset="utf-8" />
</head>

<body style="margin:0;padding:0;" >
	
    <div style="background-color:black; width:100%; height:20px;"></div>
    <br>
<center><img src="buttons.png" width="192" height="299" border="0" alt="" usemap="#remote_Map">
</center>
	<map name="remote_Map">
<area shape="circle" alt="" coords="96,261,36" onClick="loadURL('/t/runscript?path=scripts/Menu.scpt&rand=' +  Math.random())" href="#">
		<area shape="circle" alt="" coords="97,96,54" onClick="loadURL('/t/runscript?path=scripts/Play-Pause.scpt&rand=' +  Math.random())" href="#">
		<area shape="poly" alt="" coords="191,1,96,95,190,189" onClick="loadURL('/t/runscript?path=scripts/Next.scpt&rand=' +  Math.random())" href="#">
		<area shape="poly" alt="" coords="189,188,98,97,2,188" onClick="loadURL('/t/runscript?path=scripts/Minus.scpt&rand=' +  Math.random())" href="#">
		<area shape="poly" alt="" coords="1,189,97,98,0,0" onClick="loadURL('/t/runscript?path=scripts/Prev.scpt&rand=' +  Math.random())" href="#">
		<area shape="poly" alt="" coords="0,0,192,0,95,97" onClick="loadURL('/t/runscript?path=scripts/Plus.scpt&rand=' +  Math.random())" href="#">
	</map>
	</div>
</body>
</html>