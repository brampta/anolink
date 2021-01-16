<?php
echo '<html>
<head>
<title>Anolink HTMLizer</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
</head>
<body>';
echo base64_decode($_GET['html']);
echo '<br /><center><div>Powered by the <a href="http://anolink.com/" target="_blank">Anolink</a> HTMLizer</div></center>';
echo '</body></html>';
?>