<?php
foreach ($_POST as $key => $value)
    $$key = $value;

$file = './booksXML2.xml';
$books = simplexml_load_file($file);     // read xml into object

$id = 0;
foreach ($books as $book)                 // find highest id
    if ($book['id'] > $id)
        $id = $book['id'];
$id++;                           // increment highest id for use

$book = $books->addChild('book');
$book->addAttribute('ref', $ref);
$book->addAttribute('mycanon', $mdu);
$book->addChild('title', $title);
$book->addChild('edition', $edition);
$authors = $book->addChild('authors');
$author = $authors->addChild('author');
$author->addChild('firstname', $firstname);
$author->addChild('lastname', $lastname);
$publisher = $book->addChild('publisher');
$publisher->addChild('name', $publisher_name);
$publisher->addChild('year', $publisher_year);
$publisher->addChild('place', $publisher_place) ;
$book->addChild('pages', $pages);
$book->addChild('isbn', $isbn);
$book->addChild('price',  $price);
$book->addChild('currency', $currency);
$comments = $book->addChild('comments');
$comments->addChild('comment', $comment);;
$books->asXML($file);
header('Location: ./validator.php');
