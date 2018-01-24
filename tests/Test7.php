<?php

namespace Tests\Test7;

class Book {
	private $author;
	private $title;

	function __construct($author, $title) {
		$this->author = $author;
		$this->title = $title;
	}
	function getAuthor() {
		return $this->author;
	}
    function getTitle() {
    	return $this->title;
    }
    function getAuthorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

class BookList {
	private $books;

	function __construct(){
		$this->books = array();
	}
	function getBookCount() {
		return count($this->books);
	}
	function getBook($index){
		return is_numeric($index) && $index < $this->getBookCount() ? $this->books[$index] : null;
	}
	function addBook(Book $book) {
		$this->books[$this->getBookCount()] = $book;
	}
	function removeBook(Book $book) {
		if ($i = array_search($book, $books)) {
			array_splice($books, $i, 1);
		}
	}
}

class BookListIterator {
	protected $bookList;
	protected $current;

	function __construct(BookList $bookList){
		$this->bookList = $bookList;
		$this->current = 0;
	}

	function getCurrentBook(){
		return $this->current < $this->bookList->getBookCount() ? $this->bookList->getBook($this->current) : null;
	}
	function getNextBook(){
		return $this->hasNextBook() ? $this->bookList->getBook($this->current++) : null;
	}
	function hasNextBook(){
		return $this->current < $this->bookList->getBookCount() -1 ? true : false;
	}
}

class main {
	function __construct(){

		ini_set("display_errors", 1);
		error_reporting(E_ALL);

		function writeln($line_in) {
			echo $line_in."<br/>";
		}
		writeln('BEGIN TESTING ITERATOR PATTERN');
		writeln('');

		$firstBook = new Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
		$secondBook = new Book('PHP Bible', 'Converse and Park');
		$thirdBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

		$books = new BookList();
		$books->addBook($firstBook);
		$books->addBook($secondBook);
		$books->addBook($thirdBook);

		writeln('Testing the Iterator');

		$booksIterator = new BookListIterator($books);

		while ($booksIterator->hasNextBook()) {
			$book = $booksIterator->getNextBook();
			writeln('getting next book with iterator :');
			writeln($book->getAuthorAndTitle());
			writeln('');
		}

		$book = $booksIterator->getCurrentBook();
		writeln('getting current book with iterator :');
		writeln($book->getAuthorAndTitle());
		writeln('');  

		writeln('END TESTING ITERATOR PATTERN');
	}
}