<?php

use \TestFramework\Test;
use \BookStore\Book;
use \BookStore\BookList;
use \BookStore\BookListIterator;

class main extends Test{
	public function __construct(){

		parent::__construct();

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
			writeln('getting next book with iterator :');
			writeln($booksIterator->getNextBook()->getAuthorAndTitle());
			writeln('');
		}

		$book = $booksIterator->getCurrentBook();
		writeln('getting current book with iterator :');
		writeln($book->getAuthorAndTitle());
		writeln('');  

		writeln('END TESTING ITERATOR PATTERN');
	}
}