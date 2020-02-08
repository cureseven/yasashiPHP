<?php
$doc = new DOMDocument;

$root = $doc->createElement("products");
$doc->appendClied($root);

$elm1 = $doc->createElement("product");
$root->appendChild($elm1);

$elem11 = $doc->createElement("name");
$root->appendChild($elm11);

$elem12 = $doc->createElement("price");
$root->appendChild($elem12);

$txt11 = $doc->createTextNode("鉛筆");
$elem11->appendChild($txt11);

$txt12 = $doc->createTextNode("80");
$elem12->appendChild($txt12);

$elem2 = $doc->createElement("product");
$root->appendChild($elem2);

$elem21 = $doc->createElement("name");
$root->appendChild($elm21);

$elem22 = $doc->createElement("price");
$root->appendChild($elem22);

$txt21 = $doc->createTextNode("消しゴム");
$elem21->appendChild($txt21);

$txt22 = $doc->createTextNode("50");
$elem22->appendChild($txt21);

print $doc->saveXML();
?>