<?php

class Page{


var $page;
var $title;

public function Page($page, $title){
  $this->page = $page;
  $this->title =$title;
  $this->addHeader();
}



//generates the top part of the header
public  function addHeader(){
$this->page.= <<<EOD
<html>
<head>
</head>
<title>
$this->title
</title>
<body>
<h1 align="center">
$this->title
</h1>
EOD;
}

//generate the function fo the footer
public  function addFooter(){

$this->page .= <<<EOD
<pre>
$this->title
</pre>
</body>
</html>
EOD;
}

function get(){
//keep the copy without footer
	$temp = $this->page;
	$this->addFooter();
	//restore the page for next call for
	$page= $this->page;
	$this->page = $temp;

 return $this->page;
}


}

$webpage  = new Page('time to beat', 'knowledge getting better');
echo $webpage->get();



?>