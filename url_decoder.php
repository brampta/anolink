<?php

echo '<html><head>
<title>URL Decoder</title>
</head><body>
<center>
<br />
<br />';

if(isset($_POST['decode']))
{$decoded_url=urldecode($_POST['url']);}
if(isset($_POST['encode']))
{$encoded_url=urlencode($_POST['url']);}
echo '<form method="post" action="url_decoder.php">
<textarea name="url" style="width:600px;height:200px;" />'.htmlspecialchars($_POST['url']).'</textarea><br />
<input type="submit" value="decode url" name="decode" /><input type="submit" value="encode url" name="encode" />
</form>';
if(isset($_POST['decode']))
{
	echo 'decoded url:<br />
		<div style="width:100%;text-align:left;overflow=scroll;">'.(htmlentities($decoded_url)).'</div>';
}
if(isset($_POST['encode']))
{
	echo 'encoded url:<br />
		<div style="width:100%;text-align:left;overflow=scroll;">'.(htmlentities($encoded_url)).'</div>';
}

echo '</center>
	</body></html>';

?>
