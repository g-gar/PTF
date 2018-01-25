<?php

require 'lib/Test.class.php';
require 'tests/classes/BookStore.class.php';

class main extends \TestFramework\Test{
	public function __construct(){

		parent::__construct();

		ini_set("display_errors", 1);
		error_reporting(E_ALL);

		function writeln($line_in) {
			echo $line_in."<br/>";
		}
		writeln('BEGIN TESTING ITERATOR PATTERN');
		writeln('');

		$firstBook = new \BookStore\Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
		$secondBook = new \BookStore\Book('PHP Bible', 'Converse and Park');
		$thirdBook = new \BookStore\Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

		$books = new \BookStore\BookList();
		$books->addBook($firstBook);
		$books->addBook($secondBook);
		$books->addBook($thirdBook);

		writeln('Testing the Iterator');

		$booksIterator = new \BookStore\BookListIterator($books);

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