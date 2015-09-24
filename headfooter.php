<?php

class Page{


var $page;

public function Page(){
  $this->page = '';
}



//generates the top part of the header
public  function addHeader( $title ){
$this->page.= <<<EOD
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
}

//generate the function fo the footer
public  function addFooter($title){

$this->page .= <<<EOD
<pre>
$title
</pre>
</body>
</html>
EOD;
}

function get(){

 return $this->page;
}


}

$webpage  = new Page();
$webpage->addHeader('A page built with object');
$webpage->addFooter('testing');
echo $webpage->get();



?>