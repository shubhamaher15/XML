<?php
$xml=simplexml_load_file("book.xml");
foreach($xml->Book as $element)
{
echo"<b>Bookname :</b>".$element->Bookname."<br>";
echo"<b>Bookrelease :</b>".$element->Bookrelease."<br>";
echo"<b>BookAuthor :</b>".$element->BookAuthor."<br>";
echo"<br>";
}
?>
