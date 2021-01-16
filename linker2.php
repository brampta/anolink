<?php
chdir('/var/www/anolink');

if($_GET['go']=='yesmoo')
{setcookie("skipcpwarning", 'skip', time()+31536000);}

if($_COOKIE['skipcpwarning']=='skip')
{$_GET['go']='yesman';}


include('../nab/common_files/down/goifup_denyifdown.php');


$addslashed_getli=addslashes($_GET['li']);



include('../nab/serverinfo.php');

$_GET['go']='motherfucker';


//if(!isset($_GET['go']))
//{
//
//
//
//
//	include('../nab/common_files/db_conn2.php');
//	mysql_select_db("movies",$conn);
//	$result = mysql_query("/*anolink linker2*/ SELECT link, linkname FROM user_links WHERE user_linkID = '$addslashed_getli'");
//	while($row = mysql_fetch_array($result))
//	{
//		$link=$row['link'];
//		$linkname=$row['linkname'];
//	}
//	mysql_close($conn);
//
//
//
//	echo '<html><head>
//<title>Linkerz</title>
//<script type="text/javascript">
//function setshit()
//{
//	var checktocheck = document.getElementById("donotshowthisagain");
//	var linktoshit = document.getElementById("shitnez");
//	if(checktocheck.checked == true)
//	{linktoshit.href = "linker?li='.$_GET['li'].'&go=yesmoo";}
//	else
//	{linktoshit.href = "linker?li='.$_GET['li'].'&go=yesman";}
//}
//</script>
//</head><body>';
//
//
//	echo '<center>
//		<div style="width:100%;text-align:center;font-size:150%;">
//		<br /><br />You are now leaving Ghetto-Moviez.
//			</div>
//
//			<br /><br />
//
//			<div style="width:100%;text-align:center;font-size:200%;"><a href="linker?li='.$_GET['li'].'&go=yesman" id="shitnez">Continue to '.$link.'</a></div>
//
//
//			<br />
//			<input type="checkbox" id="donotshowthisagain" onclick="setshit()" />do not show this again
//
//
//<br /><br /><div>
//<IFRAME FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=300 HEIGHT=250 SRC="http://adserving.cpxinteractive.com/st?ad_type=iframe&ad_size=300x250&section=193423&pop_nofreqcap=1"></IFRAME>
//</div>
//
//
//		</center>
//
//
//
//
//			</body></html>';
//
//
//
//}
//else
//{








include('../nab/common_files/db_conn2.php');
mysql_select_db("movies",$conn);

//add a click
mysql_query("/*anolink linker2*/ UPDATE user_links SET clicks = clicks+1 WHERE user_linkID = '$addslashed_getli'");
//get link values
$result = mysql_query("/*anolink linker2*/ SELECT link, bannerURL, linkname FROM user_links WHERE user_linkID = '$addslashed_getli'");
while($row = mysql_fetch_array($result))
{
	$thislink=trim($row['link']);
	$startofthislink=substr($thislink,0,7);
	if($startofthislink!='http://')
	{$thislink='http://'.$main_domain_name.'/'.$thislink;}
	if($_GET['go']=='yes')
	{$link=$thislink;}
	else if($_GET['go']=='yesmam')
	{$link='http://anolink.com/?link='.urlencode($thislink).'&fast=yarasphat';}
	else
	{$link='http://anolink.com/?link='.urlencode($thislink);}
	$bannerURL=$row['bannerURL'];
	$linkname=$row['linkname'];
}

if($bannerURL=='' || $bannerURL=='none')
{
	$location='Location: '.$link;
	header($location);
}
else
{


echo '<html>
<head>
<script type="text/javascript">
var popoutscriptisvalid = 1;

function invalidatepopoutscriptin10()
{var t=setTimeout("setpopoutto0()",1000);}

function setpopoutto0()
{popoutscriptisvalid = 0;}

function popoutframe1()
{
	if(popoutscriptisvalid == 1)
	{
		var newWindow = window.open("'.$bannerURL.'","banner","toolbar=1,location=1,status=1,menubar=1,scrollbars=1,resizable=1,fullscreen=yes");
		newWindow.blur();
	}
}
</script>
<title>'.$linkname.'</title>
</head>
<frameset rows="150,*" onload="invalidatepopoutscriptin10()" onbeforeunload="popoutframe1()">
<frame src="'.$bannerURL.'" name="top">
<frame src="'.$link.'" name="bottom">
</frameset>
<noframes>
<body bgcolor="#ffffff" onload="invalidatepopoutscriptin10">
sorry, but your browser does not support frames, so, heres the link the posters site:<br />
<a href="'.$bannerURL.'" target="_blank">'.$bannerURL.'</a><br />
and heres the link to the movie:<br />
<a href="'.$link.'" target="_blank">'.$link.'</a>
</body>
</noframes>
</html>';


}

mysql_close($conn);


//}
?>
