<?php
$possiblechars=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
$sublen=60;
$madeupsub='';
$countemmzz=0;
while($countemmzz<$sublen)
{
    $countemmzz++;
    $randio=rand(0,35);
    $madeupsub=$madeupsub.$possiblechars[$randio];
}

$location='Location: http://'.$madeupsub.'.unsafezone.com/htmlize?html='.urlencode(base64_encode($_GET['html']));
header($location);
?>