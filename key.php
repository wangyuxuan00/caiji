<?php
$key = md5("domain=cctvpinpai.com&tnow=2014-6-24");
$key = base64_encode($key);
$key = $key."time=2014-6-24";
echo $key;
?>