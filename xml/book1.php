<?php
                $doc=new DOMDocument();
                $doc->load("book1.xml");
                $name=$doc->getElementsByTagName("book_name");
                $year=$doc->getElementsByTagName("year");

                echo "Books Names";
                foreach($name as $val)
                {
                                echo "<br>".$val->textContent;
                }
                echo "<br><br> Year";
                foreach($year as $value)
                {
                                echo "<br>".$value->textContent;
                }
?>