<?php

require_once 'vendor/autoload.php';

use Prince\library\Library;
use Prince\library\Book;

$book = new Book('Лес', 'Морфи', '2027', 'Утопия');
$abc = new Book('Азбука', 'Англия', '2003', 'Обучение');
$kniga = new Book('В Мире Африки', 'Ричард', '1987', 'Животные');
$library = new Library;

// print($Book->getBookInfo());

$library->addBook($book);
$library->addBook($abc);
$library->addBook($kniga);

$library->listAllBooks();

foreach ($library->findBookByAuthor('Ричард') as $value) {
    print($value->getBookInfo());
}
print ('---------------------') . PHP_EOL;

$library->removeBookByTitle('Азбука');
$library->listAllBooks();
