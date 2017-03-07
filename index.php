<?php
include ('class.php');
$objetos = new header();
$objetos->setNext(new article());
?>
<HTML>
<HEAD>
    <TITLE>Chain Resp Example</TITLE>
    <meta charset="UTF-8">
    <link href="css/styles.css" rel="stylesheet">
</HEAD>
<BODY>
<?php

$objetos->makeHtml('header');
$objetos->makeHtml('article');

?>

</BODY>
</HTML>