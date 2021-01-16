<?php
$secondstowait=2;


$secret_fast='yarasphat';

$counter='
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=4900943; 
var sc_invisible=1; 
var sc_partition=57; 
var sc_click_stat=1; 
var sc_security="e5422f17"; 
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="counter on blogger"
href="http://www.statcounter.com/blogger/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/4900943/0/e5422f17/1/"
alt="counter on blogger" ></a></div></noscript>
<!-- End of StatCounter Code -->';


// $counter.='<script type="text/javascript">
// var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
// document.write(unescape("%3Cscript src='."'".'" + gaJsHost + "google-analytics.com/ga.js'."'".' type='."'".'text/javascript'."'".'%3E%3C/script%3E"));
// </script>
// <script type="text/javascript">
// try {
// var pageTracker = _gat._getTracker("UA-6961072-7");
// pageTracker._trackPageview();
// } catch(err) {}</script>
// ';



$googleleaderboard='<script type="text/javascript"><!--
google_ad_client = "pub-3427126291022263";
/* 728x90, date de création 30/07/09 */
google_ad_slot = "9705563951";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$cpgoogloleaderboard='<!-- BEGIN STANDARD TAG - 728 x 90 - googlonymous.com: Run-of-site - DO NOT MODIFY -->
<IFRAME FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=728 HEIGHT=90 SRC="http://adserving.cpxinteractive.com/st?ad_type=iframe&ad_size=728x90&section=239063"></IFRAME>
<!-- END TAG -->';


$googlesquare='<script type="text/javascript"><!--
google_ad_client = "pub-3427126291022263";
/* 336x280, date de création 11/07/09 */
google_ad_slot = "1781493461";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$cpsquare='<!-- BEGIN STANDARD TAG - 300 x 250 - googlonymous.com: Run-of-site - DO NOT MODIFY -->
<IFRAME FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=300 HEIGHT=250 SRC="http://adserving.cpxinteractive.com/st?ad_type=iframe&ad_size=300x250&section=239063"></IFRAME>
<!-- END TAG -->';

$cpxpopup='<!-- BEGIN STANDARD TAG - popup or popunder - googlonymous.com: Run-of-site - DO NOT MODIFY -->
<SCRIPT TYPE="text/javascript" SRC="http://adserving.cpxinteractive.com/st?ad_type=pop&ad_size=0x0&section=239063&banned_pop_types=28&pop_times=1&pop_frequency=0&pop_nofreqcap=1"></SCRIPT>
<!-- END TAG -->';


$gsquares='<div style="width:100%;"><table style="width:100%;"><tr><td style="width:50%;text-align:right;">'.$googlesquare.'</td><td style="width:50%;text-align:left;">'.$googlesquare.'</td></tr></table></div>';
$cpsquares='<div style="width:100%;"><table style="width:100%;"><tr><td style="width:50%;text-align:right;">'.$cpsquare.'</td><td style="width:50%;text-align:left;">'.$cpsquare.'</td></tr></table></div>';



$google_bottom='<center><div>'.$googleleaderboard.'</div><div>'.$cpgoogloleaderboard.'</div></center>';

$adbrite_fullkit='<!-- Begin: AdBrite, Generated: 2009-08-01 0:42:08  -->
<script type="text/javascript">
var AdBrite_Title_Color = "0000FF";
var AdBrite_Text_Color = "000000";
var AdBrite_Background_Color = "FFFFFF";
var AdBrite_Border_Color = "CCCCCC";
var AdBrite_URL_Color = "008000";
try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==""?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe="";var AdBrite_Referrer="";}
</script>
<script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write('."'".' src="http://ads.adbrite.com/mb/text_group.php?sid=1284281&zs=3330305f323530&ifr='."'".'+AdBrite_Iframe+'."'".'&ref='."'".'+AdBrite_Referrer+'."'".'" type="text/javascript">'."'".');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
<div><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1284281&afsid=1" style="font-weight:bold;font-family:Arial;font-size:13px;">Your Ad Here</a></div>
<!-- End: AdBrite -->';

$adbritesquares='<div style="width:100%;"><table style="width:100%;"><tr><td style="width:50%;text-align:right;">'.$adbrite_fullkit.'</td><td style="width:50%;text-align:left;">'.$adbrite_fullkit.'</td></tr></table></div>';


if(isset($_GET['link']) && $_GET['link']!='')
{
	$goto_link=$_GET['link'];
	echo '<html>
	<head>
	<title>Anonymously Redirecting to '.$goto_link.'</title>
	<meta http-equiv="refresh" content="'.($secondstowait+1).';url='.$goto_link.'" />
	<script type="text/javascript">
	var time_left = '.$secondstowait.';
	var time_elapsed = 0;
	var waitingfor = "waiting for the page<br />" +
		"'.htmlspecialchars($goto_link).'<br />" +
		" to load<br />";
	var itslong = "";
	var superslow = "<br /><span id='."'".'superslow'."'".' style='."'".'display:none;'."'".'>Super Slow!!!</span>";
	function decrease_time()
	{
		var secondsS = "s";
		if(secondass==1)
		{secondsS = "";}
		document.getElementById("secondass").innerHTML=time_left;
		document.getElementById("secondsS").innerHTML=secondsS;
		time_left = Math.abs(time_left) - 1;
		if(time_left >= 0)
		{var t=setTimeout("decrease_time()",1000);}
		else
		{
			document.location.href="'.addslashes($goto_link).'";
			document.getElementById("shoshit").innerHTML = waitingfor;
			var t=setTimeout("shostatus()",1000);
		}
	}
	function shostatus()
	{
		time_elapsed++;

		var isitsuperslow = "";

		if(time_elapsed==5)
		{itslong = "<br />the site seems to be slow to open";}
		if(time_elapsed==10)
		{itslong = "<br />the site is Very slow!";}
		if(time_elapsed==30)
		{
			itslong = "<br />well sorry its taking forever to open, probably wont work...";
			isitsuperslow = superslow;
			blinksuperslow();
		}


		var secondsS = "s";
		if(time_elapsed==1)
		{secondsS = "";}
		document.getElementById("shoshit").innerHTML = waitingfor + "<br /> " + time_elapsed + " second" + secondsS + " elapsed" + itslong + isitsuperslow;
		var t=setTimeout("shostatus()",1000);
	}
	function blinksuperslow()
	{
		var myspan = document.getElementById("superslow");
		if(superslow.style.display=="none")
		{superslow.style.display="inline";}
		else
		{superslow.style.display="none";}
		var t=setTimeout("blinksuperslow()",500);
	}
	</script>
	<link href="http://fonts.googleapis.com/css?family=Prosto+One|Sanchez" rel="stylesheet" type="text/css">
	<style>
	h1, h2, h3, h4, h5, h6 {
    font-family: \'Prosto One\', Georgia, Times, serif;
	}
	p, div {
		font-family: \'Sanchez\', Helvetica, Arial, sans-serif;
	}
	</style>
	</head>
	<body>
        <div style="padding:10px;">
	<center>
	<h1>anolink.com</h1>
	<h4>is covering up your tracks</h4>
	redirecting to:<br />
	<a href="'.addslashes($goto_link).'">'.$_GET['link'].'</a><br />
	<div id="shoshit">(in <span id="secondass">'.$secondstowait.'</span> second<span id="secondsS">s</span>)</div>
	<br />';
	
	//jumparazioo
	echo '<iframe src="http://smc.boomforums.com/jumparazioo?iframe&ad_format=popar&unif" width=0 height=0 frameborder=0 marginheight=0 marginwidth=0 scrolling="no"></iframe>';
	//2meet4free squaro
	//echo '<iframe src="http://2meet4free.com/ad5" width=300 height=250 frameborder=0 marginheight=0 marginwidth=0 scrolling="no"></iframe>';
	
	
	
	echo '<br />
	<br />
	<div style="font-size:12px;">*Powered by <a href="http://intercode.ca/">Intercode.ca</a></div>
	<script type="text/javascript">
	decrease_time();
	</script>
	'.$counter.'
	</center>
        </div>
	</body>
	</html>';

}
else
{




	echo '<html>
	<head>
	<title>AnoLink - Anonymous Redirector</title>
	<link href="http://fonts.googleapis.com/css?family=Prosto+One|Sanchez" rel="stylesheet" type="text/css">
	<style>
	h1, h2, h3, h4, h5, h6 {
    font-family: \'Prosto One\', Georgia, Times, serif;
	}
	p, div {
		font-family: \'Sanchez\', Helvetica, Arial, sans-serif;
	}
	</style>
	</head>
	<body style="padding:0px;margin:0px;overflow:auto;">
        <div style="padding:10px;">


	<center>
	
	
	<table><tr><td style="width:800px;">
	
	<h1>Easily Create Anonymous Links with the Anolink Dereferer!</h1>
	
	<p>How?</p>
	<p>Simply append the link that you want to link to anonymously after <b>http://anolink.com/?link=</b>. And make sure to urlencode your link first if it contains any sensitive characters (like "&" (ampersand) especially). like for example, to link to wikipedia anonymously use<br />
	<a href="http://anolink.com/?link=http://wikipedia.com/"><b>http://anolink.com/?link=<span style="color:red;">http://wikipedia.com/</span></b></a></p>
	<p>Click <b><a href="url_decoder" style="cursor:pointer;color:brown;text-decoration:underline;">here</a></b> to use the url encoder/decoder</p>

	<br />
	<p>Whats the point of that? Who will be anonymous in that? It is the website that offers the link that will be hidden from the site that is beeing linked to. Instead of appearing to be refered from your site, the visitor will appear to be refered from anolink.com. The privacy of the visitor is also protected by this mechanism because this way the site that is beeing linked to cannot see where the visitor comes from.</p>
	



<br />
<div>see also:</div>
<h2 style="margin-top:0px;">The Anolink HTMLizer</h2>
<p>Want to post HTML somewhere where you can only post links? the Anolink HTMLizer can allow you to do that. first <a href="url_decoder" style="cursor:pointer;color:brown;text-decoration:underline;">url-encode</a> your HTML code and then simply append it after <b>http://anolink.com/htmlize?html=</b>. When the link opens it will take the value of the html Get variable and simply write it on the page. example:</p>
code:
<pre style="margin-top:0;">
&#60;script type="text/javascript">alert(\'bip!\');&#60;/script>
&#60;p style="background-color:red;">test&#60;/p>
</pre>
link:
<div><b><a href="http://anolink.com/htmlize?html=%3Cscript+type%3D%22text%2Fjavascript%22%3Ealert%28%27bip%21%27%29%3B%3C%2Fscript%3E%0D%0A%3Cp+style%3D%22background-color%3Ared%3B%22%3Etest%3C%2Fp%3E%0D%0A" target="_blank">http://anolink.com/htmlize?html=<span style="color:red;">%3Cscript+type%3D%22text%2Fjavascript%22%3Ealert%28%27bip%21%27%29%3B%3C%2Fscript%3E%0D%0A%3Cp+style%3D%22background-color%3Ared%3B%22%3Etest%3C%2Fp%3E%0D%0A</span></a></b></div>
<br />


</td></tr></table>



<br />
<div style="font-size:12px;">*Powered by <a href="http://intercode.ca/">Intercode.ca</a></div>

'.$counter.'





	</center>
        </div>
	</body>
	</html>';

}




?>
