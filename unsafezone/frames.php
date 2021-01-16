<?php
echo '<html>';

//echo '<head>
//<script type="text/javascript">
//var popoutscriptisvalid = 1;
//
//function invalidatepopoutscriptin10()
//{var t=setTimeout("setpopoutto0()",1000);}
//
//function setpopoutto0()
//{popoutscriptisvalid = 0;}
//
//function popoutframe1()
//{
//	if(popoutscriptisvalid == 1)
//	{
//		var newWindow = window.open("'.$_GET['li1'].'","banner","toolbar=1,location=1,status=1,menubar=1,scrollbars=1,resizable=1,fullscreen=yes");
//		newWindow.blur();
//	}
//}
//</script>
//<title>'.htmlspecialchars($_GET['ln']).'</title>
//</head>';

echo '<frameset rows="150,*"';
//echo ' onload="invalidatepopoutscriptin10()" onbeforeunload="popoutframe1()"';
echo '>
<frame src="'.$_GET['li1'].'" name="top" />
<frame src="'.$_GET['li2'].'" name="bottom" />
</frameset>
<noframes>
<body bgcolor="#ffffff" onload="invalidatepopoutscriptin10">
sorry, but your browser does not support frames, so, heres the link the poster\'s banner or site:<br />
<a href="'.$_GET['li1'].'" target="_blank">'.htmlspecialchars($_GET['li1']).'</a><br />
and heres the link to the content:<br />
<a href="'.$_GET['li2'].'" target="_blank">'.htmlspecialchars($_GET['li2']).'</a>
</body>
</noframes>
</html>';
?>