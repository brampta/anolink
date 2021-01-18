<?php
$secondstowait=2;
$secret_fast='yarasphat';

include('conf.php');

if(
	(isset($_GET['link']) && $_GET['link']!='')
		||
	(isset($_GET['link64']) && $_GET['link64']!='')
)
{
	if(isset($_GET['link64'])){
		$_GET['link']=base64_decode($_GET['link64']);
	}
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
	';
	include('head.php');
	echo '
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
	';
	include('head.php');
	echo '
	</head>
	<body style="padding:0px;margin:0px;overflow:auto;">
        <div style="padding:10px;">



<h1>Create hidden links</h1>
<form>
<div><label for="link">link:</label> <input type="text" id="link" name="link"> <input type="button" value="create" onclick="anonlink()"></div>
</form>
<div id="results"></div>
<script src="anolink.js"></script>
';


	/*
echo '
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

	</center>
	';
	*/
	
	
	
	echo '
        </div>
	</body>
	</html>';

}




?>
