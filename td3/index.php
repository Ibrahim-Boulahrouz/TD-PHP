<?php
include 'book.php';
include 'library.php';
$book = new Book('livre1', 'moi', 'moi', '10');
$book2 = new Book('livre2', 'toi', 'toi', '20');
$book3 = new Book('livre3', 'lui', 'lui', '30');
$library = new Library('MaLibrary', 'chez ouam', '10');
$library->showAll();
$library->addBook($book);
$library->addBook($book2);
$library->showAll();
$library->addBook($book3);
$library->showAll();
$library->delBook($book2);
$library->showAll();
?>