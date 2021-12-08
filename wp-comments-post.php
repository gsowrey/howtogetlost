<?php

$url = $_SERVER['HTTP_REFERER'];
if (isset($url)) {
	header("Location: " . $url);
	die();
}
header("Location: https://howtogetlost.com/");
