<meta http-equiv="refresh" content="0">
<?php

if (!defined('HAS_ACURL_VERSION')) {
	require_once "libs/aCurl/aCurl.php";
}

$TASK['cookie'] = "cookie.txt";

$c = new aCurl("http://morefmchoir.com");
$c->setCookieFile($TASK['cookie']);
$c->includeHeader(false);
$c->createCurl();

$c = new aCurl("http://morefmchoir.com/sendvote.asp?_=" . time() . "&o=1140");
$c->setCookieFile($TASK['cookie']);
$c->includeHeader(false);
$c->createCurl();

echo $c;

//@unlink($TASK['cookie']);

