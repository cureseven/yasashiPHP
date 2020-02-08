<?php

$doc = new DOMDocument;
$doc->load("Sample.xml");

$list = $doc->getElementsByTagName("name");

for ($i=0; $i<$list->length; $i++) {
    $node = $list->item($i); // item()で一つずつ取り出せる
    $utxt = $node->nodeValue;
    print $utxt;
}