<?php
$doc = new DOMDocument;

$root = $doc->createElement("cars");
$doc->appendChild($root);

$elm1 = $doc->createElement("car");
$root->appendChild($elm1);

$txt1 = $doc->createTextNode("スポーツカー");
$elm1->appendChild($txt1);

$elm2 = $doc->createElement("car");
$root->appendChild($elm2);

$txt2 = $doc->createTextNode("トラック");
$elm2->appendChild($txt2);

print $doc->saveXML();
?>