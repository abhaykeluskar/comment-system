<?php
$dom= new DomDocument();
$dom->Load("comments.xml");

$commenterName = $_POST['commenterName'];
$commenterEmail = $_POST['commenterEmail'];
$commentText = $_POST['commentText'];

$root=$dom->documentElement;

$newElement = $dom->createElement('commentData');
$root->appendChild($newElement);

$nameElement = $dom->createElement('commenterName');
$newElement->appendChild($nameElement);
$nameText = $dom->createTextNode($commenterName);
$nameElement->appendChild($nameText);

$emailElement = $dom->createElement('commenterEmail');
$newElement->appendChild($emailElement);
$emailText = $dom->createTextNode($commenterEmail);
$emailElement->appendChild($emailText);
$emailAttribute = $dom->createAttribute("type");
$emailAttribute->value = "yes";
$emailElement->appendChild($emailAttribute);

$textElement = $dom->createElement('commentText');
$newElement->appendChild($textElement);
$textText = $dom->createTextNode($commentText);
$textElement->appendChild($textText);

$dom->save("comments.xml");
?>