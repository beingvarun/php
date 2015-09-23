<?php

class Page{
//generates the top part of the header
public static function addHeader($page, $title ){
$page.= <<<EOD
<html>
<head>
</head>
<title>
$title
</title>
<body>
<h1 align="center">
$title
</h1>
EOD;
return $page;
}

//generate the function fo the footer
public static function addFooter($page, $title){

$page .= <<<EOD
<pre>
$title
</pre>
</body>
</html>
EOD;
return $page;
}
}
$page ='';
$page = Page::addHeader($page, 'Finally found the right one');
$page = Page::addFooter($page, 'nothing here to say');
echo $page;


?>