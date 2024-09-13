<?php

namespace Prince\library;

use Prince\library\Book;

class Library
{

    private array $books = [];

    public function addBook(Book $book): void
    {
        array_push($this->books, $book);
    }

    public function removeBookByTitle(string $title): void
    {
        for ($i = 0; $i < count($this->books); $i++) {
            if ($this->books[$i]->getTitle() == $title) {
                array_splice($this->books, 1, $i);
                print ('Книга удалена с полок') . PHP_EOL;
                print ('---------------------') . PHP_EOL;
                return;
            }
        }
    }

    public function findBookByAuthor(string $author): array
    {
        $tempArray = [];
        for ($i = 0; $i < count($this->books); $i++) {
            if ($this->books[$i]->getAuthor() == $author) {
                array_push($tempArray, $this->books[$i]);
            }
        }
        return $tempArray;
    }

    public function listAllBooks():void
    {
        for ($i = 0; $i < count($this->books); $i++) {
            print($this->books[$i]->getBookInfo());
        }
        print ('---------------------') . PHP_EOL;
    }
}
