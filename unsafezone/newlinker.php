<?php
echo '<html>
<head>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width">
</head>
<body>';
echo '<div style="font-size:18px;font-weight:bold;text-align:center;"><a href="'.htmlspecialchars($_GET['link']).'">Continue to '.htmlspecialchars($_GET['link']).'</a></div><br />';


$adcode_file_path='/home/goblet/nab/backstage/userads/'.substr($_GET['um'],0,1).'/'.$_GET['um'].'.userad';
echo file_get_contents($adcode_file_path);




echo '</body></html>';
?>
